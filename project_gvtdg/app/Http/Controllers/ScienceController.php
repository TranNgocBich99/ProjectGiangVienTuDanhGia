<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use App\school;
use App\Science;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon; 
class ScienceController extends Controller
{
   
    public function getList()
    {
		$science = new Science;
		$listSchool = $science->GetAllScience();
		return view('admin.school.list',compact('listSchool'));
    }
	public function ajax_get_science(Request $request){
		echo "sssssssssssssssssss";
		//call_user_func('layXaPhuongTheoQuanHuyen');
		$science = new Science;
		$sch_id = $_GET['sch_id'];
		$data = $science->getSciencesBySchId($sch_id);
		$title="Chọn khoa";	
		return Response(view('admin.ajax_view.list_science',compact('data','title'))); 
	}
	//add
	public function getAdd(){
		return view('admin.school.add');
	}
	public function postAdd(Request $request){
		$data = $request->all();
		$this->validate($request,[
			'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'name' => 'required|min:3|max:255',
			'email' => 'required|email|unique:schools,email',
			'password' => 'required|min:8|max:32',
			'passwordAgain' => 'same:password'
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
			'passwordAgain.same' => 'Mật khẩu nhập lại không đúng'
		]);
		$school = new school;
		$school->us_name = $data['name'];
		$school->email = $data['email'];
		$school->us_is_admin = $data['type'];   
		$school->password = bcrypt($data['password']);
		$school->save();
		return redirect()->route('admin.school.getList')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);
	}
	//delete
	public function getDelete($id){
		school::destroy($id);
		return redirect()->route('admin.school.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
	}
	
	//edit
	public function getEdit($id){
		$school = DB::table('school')->where('school.sch_id',$id)->select('school.*')->limit(1)->get();
		if(count($school)==0){
			return getList();
		}
		$school=$school[0];
		return view('admin.school.edit',compact('school'));
	}
	
	public function postEdit($id,Request $request){
		$data = $request->all();
	
		$this->validate($request,[
			'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'name' => 'required|min:3|max:255',
		],[
			'name.required' => 'Bạn chưa nhập tên người dùng',
			'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
			'name.max' => 'Tên người dùng chỉ được tối đa 255 ký tự',
			'avatar.image' => 'Chọn avartar người dùng với định dạng ảnh',
			'avatar.mimes' => 'ảnh đại diện người dùng phải có 1 trong các định dạng jpeg,png,jpg,gif,svg',
			'avatar.max' => 'Dung lượng tối đa của ảnh là 2048 kb',
		]);
		$school = new school;
		$school = school::find($id);
		$school->us_name = $data['name'];
		$school->us_is_admin = $data['type']; 
		$school->save();
		return redirect()->route('admin.school.getList')->with('admin.thongbao','Sửa thành công');

	}
	
}
