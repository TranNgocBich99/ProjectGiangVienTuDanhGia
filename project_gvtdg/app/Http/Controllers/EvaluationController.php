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
		$user_sem_eval = new User_sem_eval;
		$se_id = $_GET['se_id'];
		$thinkOfUser=[];
		$listEvalOfUser=[];
		$semester = new Semester;
		$user_self_think = new User_self_think;
		$user_sem_val = new User_sem_eval;
		if($se_id != -1){
			$thinkOfUser = $user_self_think->getThinkOfUser($us_id,$se_id);
			$listEvalOfUser = $user_sem_eval->getAllEvalOfUserSem($us_id,$se_id);
		}
		$nhiem_vu = $evaluation->GetAllEvaluationsByCategory(6);
		$thong_tin_hoc_phan = $evaluation->GetAllEvaluationsByCategory(7);
		$kiem_tra_danh_gia = $evaluation->GetAllEvaluationsByCategory(8);
		$hoat_dong_quan_tri = $evaluation->GetAllEvaluationsByCategory(9);
		$cong_tac_ho_tro = $evaluation->GetAllEvaluationsByCategory(10);
		return Response(view('Front-end.ajax_view.list_eval_of_semester',
							compact('nhiem_vu','thong_tin_hoc_phan',
							'kiem_tra_danh_gia','hoat_dong_quan_tri',
							'cong_tac_ho_tro','listEvalOfUser','thinkOfUser'))); 
	}
}
