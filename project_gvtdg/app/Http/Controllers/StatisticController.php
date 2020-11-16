<?php

namespace App\Http\Controllers;
use App\Semester;
use App\Statistic;
use App\User;
use App\User_sem_eval;
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

    public function report(Request $request) {
        $yearInput = $request->post('year', '');
        $selID = $request->post('se_id', '');
        $evalID = $request->post('eval_id', '');

        //Độ lệch chuẩn
        $evalModel = new User_sem_eval();
        $report = $evalModel->getReportData($selID, $evalID);
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
                            'percent' => ($val->count/count($keys_tc)) *100
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

        dd($data);

        return view('admin.statistic.report', compact('$data', 'status', 'ratio', 'point', 'listYears', 'listSe', 'dlcDataRes'));
    }

    public function index(Request $request) {
        $yearInput = $request->post('year', '');
        $selID = $request->post('se_id', '');
        $user = User::all();
        $totalUser = count($user);
        $status = count($this->model->status());
        $ratio = $status/$totalUser;
        $point = $this->model->averageScore($selID);

        //Get Semester year data
        $seModel = new Semester();
        $listYears = $seModel->getListYears();

        $listSe = new \Illuminate\Support\Collection();
        if(!empty($yearInput)){
            $listSe = $seModel->getListSeByYears($yearInput);
        }

        //Độ lệch chuẩn
        $evalModel = new User_sem_eval();
        $dlcData = $evalModel->getAllData();
        $dlcDataRes = [];
        if(!$dlcData->isEmpty()){
            foreach ($dlcData as $key => $item){
                $dlcDataRes[$item->eval_id][] = $item;
            }
        }

        return view('admin.statistic.list', compact('totalUser', 'status', 'ratio', 'point', 'listYears', 'listSe', 'dlcDataRes'));
    }

}
