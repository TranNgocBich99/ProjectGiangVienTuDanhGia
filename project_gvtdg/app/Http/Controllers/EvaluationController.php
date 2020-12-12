<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use App\User_sem_eval;
use App\User_self_think;
use App\User;
use App\Evaluation;
use App\Semester;
use App\Year;
use App\User_eval_year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon; 
use Auth;

class EvaluationController extends Controller
{
   	
    public function getList()
    {
	
		$evaluation = new Evaluation;
		$dataEvaluation = $evaluation->GetAllEvaluations();
		$listEvaluation  = array();
		$listEvaluation  = $dataEvaluation;
		
		return view('admin.evaluation.list',compact('listEvaluation'));
      
    }
	//add
	public function getAdd(){
		return view('admin.evaluation.add');
	}
	public function postAdd(Request $request){
		$data = $request->all();
		$evaluation = new Evaluation;
		$evaluation->eva_name = $data['name'];
		$evaluation->eva_ad_create_point = $data['point'];
		$evaluation->save();
		return redirect()->route('admin.evaluation.getList')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);
		
		// $this->validate($request,[
		// 	'eva_name ' => 'required',
		// 	'eva_ad_create_point' => 'required'
		// ],[
		// 	'eva_name.required' => 'Nhập nội dung tiêu chí đánh giá',
		// 	'eva_ad_create_point.required' => 'Nhập điểm tiêu chí'
		// ]);
		
	}
	//delete
	public function getDelete($id){
		evaluation::destroy($id);
		return redirect()->route('admin.evaluation.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
	}
	
	//edit
	public function getEdit($id){
		$evaluation = DB::table('evaluation')->where('evaluation.eva_id',$id)->select('evaluation.*')->limit(1)->get();
		if(count($evaluation)==0){
			return getList();
		}
		$evaluation=$evaluation[0];
		return view('admin.evaluation.edit',compact('evaluation'));
	}
	
	public function postEdit($id, Request $request){
		$data = $request->all();
		$evaluation = new Evaluation;
		$evaluation = evaluation::find($id);
		$evaluation->eva_name = $data['name'];
		$evaluation->eva_ad_create_point = $data['point']; 
		$evaluation->save();
		return redirect()->route('admin.evaluation.getList')->with('admin.thongbao','Sửa thành công');
		
	}
	
	public function ajax_get_list_eval(Request $request){
		if(Auth::user() == null){
			return;
		}
		$us_id = Auth::user()->us_id;
		$user = new user;
		$user = user::find($us_id);
		$evaluation = new Evaluation;
		$user_eval_year = new User_eval_year;
		$ye_id = $_GET['ye_id'];
		$thinkOfUser=[];
		$listEvalOfUser=[];
		$user_self_think = new User_self_think;
		if($ye_id != -1){
			$thinkOfUser = $user_self_think->getThinkOfUser($us_id,$ye_id);
			$listEvalOfUser = $user_eval_year->getAllEvalOfUserYear($us_id,$ye_id);
		}
		$nhiem_vu = $evaluation->GetAllEvaluationsByCategory(6);
		$thong_tin_hoc_phan = $evaluation->GetAllEvaluationsByCategory(7);
		$kiem_tra_danh_gia = $evaluation->GetAllEvaluationsByCategory(8);
		$hoat_dong_quan_tri = $evaluation->GetAllEvaluationsByCategory(9);
		$cong_tac_ho_tro = $evaluation->GetAllEvaluationsByCategory(10);
		return Response(view('Front-end.ajax_view.list_eval_of_year',
							compact('nhiem_vu','thong_tin_hoc_phan',
							'kiem_tra_danh_gia','hoat_dong_quan_tri',
							'cong_tac_ho_tro','listEvalOfUser','thinkOfUser'))); 
	}
	
	
	public function ajax_get_eval_of_user(Request $request){
		$ye_id = $_GET['ye_id'];
		$us_id = $_GET['us_id'];
		$listEvalOfUser=[];
		$user_eval_year = new User_eval_year;
		if($ye_id != -1){
			$listEvalOfUser = $user_eval_year->getAllEvalOfUserYear($us_id,$ye_id);
		}
		//$encode = json_encode($listEvalOfUser,JSON_UNESCAPED_UNICODE);
		//echo count($listEvalOfUser);
		//exit();
		return Response(json_encode($listEvalOfUser,JSON_UNESCAPED_UNICODE)); 
	}
	
}
