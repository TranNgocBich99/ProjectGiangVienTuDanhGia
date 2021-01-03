<?php

namespace App\Http\Controllers;
use App\Evaluation;
use App\School;
use App\Semester;
use App\Statistic;
use App\User;
use App\User_eval_year;
use App\User_sem_eval;
use App\Year;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class StatisticController extends Controller
{
    private $model = null;
    private $user = null;
    public function __construct()
    {
        $this->model = new Statistic();
        $this->user = new User();
    }

	public function report1(Request $request) {
		$schoolInput = $request->post('school', '');
		$yearInput = $request->post('year', '');
		$evalID = $request->post('eval_id', '');

		$userModel = new User();
		$allUserBySchool = $userModel->getUserBySchool($schoolInput);
		if(!$allUserBySchool->isEmpty()){
			$listUser = [];
			foreach ($allUserBySchool as $usr){
				array_push($listUser, $usr->us_id);
			}
		}else{
			$listUser = [];
		}

		//Get Semester year data
		$seModel = new Year();
		$listYears = $seModel->getPagination('DESC');

		$evalModel = new Evaluation();
		$listEval = $evalModel->GetAllEvaluations();

		//getListSchool
		$schoolModel = new School();
		$listSchools = $schoolModel->GetAllSchool();

		$evalModel = new User_eval_year();
		$dataResDTB = [];
		$dataResDLC = [];
		if(!$listYears->isEmpty()){
			foreach ($listYears->items() as $year){
				$year_id = $year->ye_id;
				$year_start = $year->ye_start;

				//DTB
				$point = $this->model->averageScoreWithEval($year_id, $evalID,  $listUser);
				$dtb = 0;
				if(!empty($point->point) && !empty($point->number_user)){
					$dtb = $point->point/$point->number_user;
				}
				$dataResDTB[$year_start] = $dtb;

				//DLC
				$dlcData = $evalModel->getAllDataByEvalID($listUser, $evalID, $year_id);
				if(!$dlcData->isEmpty()){
					$count_teacher = $dlcData->count() - 1;
					if($count_teacher <= 0){
						$count_teacher = 1;
					}
					$tc = 0;

					foreach ($dlcData as $itemDLC) {
						$tc += pow($itemDLC->user_rate_point - $dtb, 2);
					}

					$dataResDLC[$year_start] = (float)number_format(($tc/$count_teacher), 2, '.', '');
				}else{
					$dataResDLC[$year_start] = 0;
				}
			}
		}

		return view('admin.statistic.report1', compact('listYears', 'listSchools', 'listEval', 'dataResDLC', 'dataResDTB'));
	}

    public function report(Request $request) {
        $schoolInput = $request->post('school', '');
        $yearInput = $request->post('year', '');
        $evalID = $request->post('eval_id', '');

        $userModel = new User();
        $allUserBySchool = $userModel->getUserBySchool($schoolInput);
        if(!$allUserBySchool->isEmpty()){
            $listUser = [];
            foreach ($allUserBySchool as $usr){
                array_push($listUser, $usr->us_id);
            }
        }else{
            $listUser = [];
        }


        //Get Semester year data
        $seModel = new Year();
        $listYears = $seModel->getAll();

        $evalModel = new Evaluation();
        $listEval = $evalModel->GetAllEvaluations();

        //getListSchool
        $schoolModel = new School();
        $listSchools = $schoolModel->GetAllSchool();

        //Độ lệch chuẩn
        $semEvalModel = new User_eval_year();
        $report = $semEvalModel->getReportData($yearInput, $evalID, $listUser);
        $number_user_rate = $semEvalModel->getNumberUserRate($yearInput, $evalID, $listUser);
        if(!$number_user_rate->isEmpty()){
            $number = $number_user_rate[0]->count;
        }else{
            $number = 1;
        }
        $data = [];
        $tc = [
            '1' => 'Rất không tốt',
            '2' => 'Không tốt',
            '3' => 'Trung bình',
            '4' => 'Tốt',
            '5' => 'Rất tốt',
        ];
        $total_review = 0;
        if(!$report->isEmpty()){
            $keys_tc = array_keys($tc);
            foreach ($keys_tc as $item){
                foreach ($report as $key => $val){
                    if($val->point == $item){
                        $data[$item] = [
                            'rate_id' => $item,
                            'rate_name' => $tc[$item],
                            'count' => $val->count,
                            'percent' => number_format(($val->count/$number) *100, 2)
                        ];
                    }else{
                        if(!isset($data[$item])) {
                            $data[$item] = [
                                'rate_id' => $item,
                                'rate_name' => $tc[$item],
                                'count' => 0,
                                'percent' => 0
                            ];
                        }
                    }
                }
            }
        }

        $dataChart = [
            'percent' => [],
            'label' => []
        ];
        if(!empty($data)){
            foreach ($data as $key => $val){
                $dataChart['percent'][] = $val['percent'];
                $dataChart['label'][] = $val['rate_name'] . ' ('. $val['count'] .' đánh giá)';
            }
        }


        return view('admin.statistic.report', compact('data', 'dataChart','listYears', 'listSchools', 'listEval'));
    }

    public function index(Request $request) {
        $schoolInput = $request->post('school', '');
        $yearInput = $request->post('year', '');

	    //Get Semester year data
	    $seModel = new Year();
	    $listYears = $seModel->getAll();

        $userModel = new User();
        $allUserBySchool = $userModel->getUserBySchool($schoolInput);

        $totalUser = $allUserBySchool->count();

        $status = count($this->model->status($schoolInput));

        if($totalUser > 0) {
            $ratio = $status / $totalUser;
        }else{
            $ratio = 0;
        }

        if(!$allUserBySchool->isEmpty()){
            $listUser = [];
            foreach ($allUserBySchool as $usr){
                array_push($listUser, $usr->us_id);
            }
        }else{
            $listUser = [];
        }
        $point = $this->model->averageScore($yearInput, $listUser);

        //getListSchool
        $schoolModel = new School();
        $listSchools = $schoolModel->GetAllSchool();

        //Độ lệch chuẩn
        $evalModel = new User_eval_year();
        $dlcData = $evalModel->getAllData($listUser, $yearInput);
        $dlcDataRes = [];
        if(!$dlcData->isEmpty()){
            foreach ($dlcData as $key => $item){
                $dlcDataRes[$item->eval_id][] = $item;
            }
        }

        return view('admin.statistic.list', compact('totalUser', 'status', 'ratio', 'point', 'listYears', 'listSchools', 'dlcDataRes'));
    }

}
