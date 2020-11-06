<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use App\Science;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon; 
class ProfileController extends Controller
{
	
	private $destinationPath =  '/uploads/profile/';
    public function getProfile($id){
		$user = DB::table('users')->where('users.us_id',$id)->select('users.*')->limit(1)->get();
		if(count($user)==0){
			return;
		}
		$user=$user[0];
		$science = new Science;
		$listScience = $science->getSciencesBySchId($user->us_id_school);
		return view('Front-end.profile.profile',compact('user','listScience'));
	}

	
	// son
	function postProfile(Request $request, $id){
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
		$user = new User;
		$user = user::find($id);
		$user->us_name = $data['name'];
		
		if($request->changePass == "on"){
			$this->validate($request,[
				
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
		
		$us_avatar = '/uploads/profile'.$user->us_avatar;
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
		return redirect()->route('home')->with('admin.thongbao','Sửa thành công');
		
	}
	
}