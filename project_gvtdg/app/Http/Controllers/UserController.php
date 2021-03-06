<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use App\school;
use App\User;
use App\User_self_think;
use App\Evaluation;
use App\Science;
use App\Year;
use App\Semester;
use App\User_eval_year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon; 
use Auth;

class UserController extends Controller
{
   	private $destinationPath =  '/uploads/profile/';

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getList()
    {
		$user = new User;
		$dataUser = $user->GetAllUsers();
		$listUsers = array();
		$listUsers = $dataUser;
		return view('admin.user.list',compact('listUsers'));
    }
	
	public function getForm($us_id){
		$user = new user;
		$user = user::find($us_id);
		$listEvalOfUser=[];
		$year = new Year;
		$listYear=[];
		$thinkOfUser=[];
		$us_year=null;
		if($user->status == 1){
			$user_self_think = new User_self_think;
			$user_eval_year = new User_eval_year;
			$us_year = $year->getYearByUserID($us_id);
			if($us_year != null && isset($us_year)){
				$thinkOfUser = $user_self_think->getThinkOfUser($us_id,$us_year->ye_id);
				$listEvalOfUser = $user_eval_year->getAllEvalOfUserYear($us_id,$us_year->ye_id);
			}
		}
		$listYear = $year->getAll();
		$eval = new Evaluation;
		$nhiem_vu = $eval->GetAllEvaluationsByCategory(6);
		$thong_tin_hoc_phan = $eval->GetAllEvaluationsByCategory(7);
		$kiem_tra_danh_gia = $eval->GetAllEvaluationsByCategory(8);
		$hoat_dong_quan_tri = $eval->GetAllEvaluationsByCategory(9);
		$cong_tac_ho_tro = $eval->GetAllEvaluationsByCategory(10);
		return view('Front-end.user.form',compact('nhiem_vu',
							'thong_tin_hoc_phan',
							'kiem_tra_danh_gia','hoat_dong_quan_tri',
							'cong_tac_ho_tro','listEvalOfUser',
							'listYear','us_year','thinkOfUser'));
	}
	
	public function post_form(Request $request){
		if(Auth::user() == null){
			return;
		}
		$id = Auth::user()->us_id;
		$user = new User;
		$user = user::find($id);
		$data = $request->all();
		$count_eval=0;
		$this->validate($request,[
			'year' => 'required|numeric',
		],[
			'year.required' => 'Hãy chọn năm học',
			'year.numeric' => 'Hãy chọn năm học',
		]);
		//foreach($data as $eval_id => $point) {
		//	if(!is_numeric($eval_id)){
		//		continue;
		//	}
		////	$count_eval++;
		//}
		//$this->validate($request,[
		//	'count_record' => 'same:$count_eval',
		//],[
		///	'count_record.same' => 'Hãy đánh giá tất cả các tiêu chí.',
		///]);
		$ye_id = $data["year"];
		$us_self_think = $data['user_self_think'];;
		$user_self_think = new User_self_think;
		if(count($data) > 0){
			$thinkOfUser = $user_self_think->getThinkOfUser($id,$ye_id);
			if(count($thinkOfUser)>0){
				$update_think_us = User_self_think::find($thinkOfUser[0]->id);
				$update_think_us->us_self_think = $us_self_think;
				$update_think_us->save();
			}elseif($us_self_think != null){
				$user_self_think->us_id = $id;
				$user_self_think->ye_id = $ye_id;
				$user_self_think->us_self_think = $us_self_think;
				$user_self_think->save();
			}
			foreach($data as $eval_id => $point) {
				if(!is_numeric($eval_id)){
					continue;
				}
				$count_eval++;
				$user_eval_year = new User_eval_year;
				$us_sem_eval_ID=$user_eval_year->getRecordOfUserYearID($id,$ye_id,$eval_id);
				if($user->status==1 && count($us_sem_eval_ID)>0){
					$user_eval_year = User_eval_year::find($us_sem_eval_ID[0]->id);
				}
				$user_eval_year->us_id = $id;
				$user_eval_year->eval_id = $eval_id;
				$user_eval_year->ye_id  = $ye_id;
				$user_eval_year->user_rate_point = $point;
				$user_eval_year->save();	
			}
			$user->status = 1;	
			$user->save();
		}
		return redirect()->route('home');
	}
	
	//add
	public function getAdd(){
		return view('admin.user.add');
	}
	public function postAdd(Request $request){
		$data = $request->all();
		$passAgain = $data['passwordAgain'];
		$res_school = $data['school'];
		$res_science = $data['science'];
		$this->validate($request,[
			'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'name' => 'required|min:3|max:255',
			'email' => 'required|email|unique:users,email',
			'password' => 'required|min:8|max:32',
			'passwordAgain' => 'same:password',
			'school' => 'required|numeric',
			'science' => 'required|numeric',
		],[
			'avatar.image' => 'Chọn avartar người dùng với định dạng ảnh',
			'avatar.mimes' => 'ảnh đại diện người dùng phải có 1 trong các định dạng jpeg,png,jpg,gif,svg',
			'avatar.max' => 'Dung lượng tối đa của ảnh là 2048 kb',
			'name.required' => 'Bạn chưa nhập tên người dùng',
			'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
			'name.max' => 'Tên người dùng chỉ được tối đa 255 ký tự',
			'email.required' => 'Bạn chưa nhập Email',
			'email.email' => 'Bạn chưa nhập đúng định dạng Email', 
			'email.unique' => 'Email đã tồn tại',
			'password.required' => 'Bạn chưa nhập mật khẩu',
			'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự',
			'password.max' => 'Mật khẩu chỉ được tối đa 32 ký tự',
			'passwordAgain.same' => 'Mật khẩu nhập lại không đúng',
			'school.required' => 'Hãy chọn 1 đơn vị trường',
			'school.numeric' => 'Hãy chọn 1 đơn vị trường',
			'science.required' => 'Hãy chọn 1 đơn vị khoa',
			'science.numeric' => 'Hãy chọn 1 đơn vị khoa'
		]);
		$user = new User;
		if($request->hasFile('avatar')){
			$file = Input::file('avatar');
			$filename =$file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension();
			$timestamp = str_replace([' ', ':','-'], '', Carbon::now()->toDateTimeString());
			$name =$timestamp .'.'.$extension;
			$file->move(public_path($this->destinationPath), $name);
			$user->us_avatar=$this->destinationPath.$name;
		}
		else{
			$user->us_avatar = '/uploads/profile/default.png';
		}
		$user->us_name = $data['name'];
		$user->email = $data['email'];
		$user->us_is_admin = $data['role'];   
		$user->us_sci_id = $data['science'];   
		$user->us_id_school = $data['school'];   
		$user->password = bcrypt($data['password']);
		$user->save();
		return redirect()->route('admin.user.getList')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);
	}
	//delete
	public function getDelete($id){
		user::destroy($id);
		return redirect()->route('admin.user.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
	}
	
	//edit
	public function getEdit($id){
		$user = DB::table('users')->where('users.us_id',$id)->select('users.*')->limit(1)->get();
		if(count($user)==0){
			return getList();
		}
		$user=$user[0];
		$science = new Science;
		$listScience = $science->getSciencesBySchId($user->us_id_school);
		return view('admin.user.edit',compact('user','listScience'));
	}
	
	public function postEdit($id,Request $request){
		$data = $request->all();
	
		$this->validate($request,[
			'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'name' => 'required|min:3|max:255',
			'school' => 'required|numeric',
		],[
			'name.required' => 'Bạn chưa nhập tên người dùng',
			'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
			'name.max' => 'Tên người dùng chỉ được tối đa 255 ký tự',
			'avatar.image' => 'Chọn avartar người dùng với định dạng ảnh',
			'avatar.mimes' => 'ảnh đại diện người dùng phải có 1 trong các định dạng jpeg,png,jpg,gif,svg',
			'avatar.max' => 'Dung lượng tối đa của ảnh là 2048 kb',
			'school.required' => 'Hãy chọn 1 đơn vị trường',
			'school.numeric' => 'Hãy chọn 1 đơn vị trường'
		]);
		$user = new user;
		$user = user::find($id);
		$user->us_name = $data['name'];
		$user->us_is_admin = $data['role']; 
		if($request->changePass == "on"){
			$this->validate($request,[
				'school' => 'required|numeric',
				'password' => 'required|min:8|max:32',
				'passwordAgain' => 'required|same:password'
			],[
				
				'password.required' => 'Bạn chưa nhập mật khẩu',
				'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự',
				'password.max' => 'Mật khẩu chỉ được tối đa 32 ký tự',
				'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
				'passwordAgain.same' => 'Mật khẩu nhập lại không đúng',
				
			]);
			$user->password = bcrypt($data['password']);
		}
		if($request->changeEmail == "on"){
			$this->validate($request,[
			
				'email' => 'required|email|unique:users,email',
				
			],[
				'email.required' => 'Bạn chưa nhập Email',
				'email.email' => 'Bạn chưa nhập đúng định dạng Email', 
				'email.unique' => 'Email đã tồn tại',
			]);
			$user->email = $data['email'];
		}
		
		$us_avatar = '/uploads/Users'.$user->us_avatar;
		if($request->hasFile('avatar')){
			$file = Input::file('avatar');
			$filename =$file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension();
			$timestamp = str_replace([' ', ':','-'], '', Carbon::now()->toDateTimeString());
			$name =$timestamp .'.'.$extension;
			$file->move(public_path($this->destinationPath), $name);
			$user->us_avatar = $this->destinationPath.$name;
		}
		$user->us_sci_id = $data['science'];   
		$user->us_id_school = $data['school'];   
		$user->save();
		return redirect()->route('admin.user.getList')->with('admin.thongbao','Sửa thành công');
//return redirect()->route('admin.user.edit',$id)->with('thongbao','Sửa thành công');

	}
	
	public function statistic($id){
		$year = new Year;
		$user = new user;
		$user = user::find($id);
		$listYear = $year->getAll();
		return view('admin.user.statistic',compact('listYear','user'));
	}
	
}
