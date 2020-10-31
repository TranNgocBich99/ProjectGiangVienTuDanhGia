<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use App\news;
use App\Product;
use App\Service;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon; 
class UserController extends Controller
{
   	
    public function getList()
    {
	
		$user = new User;
		// $user->getAllSubjectByUsType(2);
		$dataUser = $user->GetAllUsers();
		$listUsers = array();
		$listUsers = $dataUser;
		
		return view('admin.user.list',compact('listUsers'));
      
    }
	//add
	public function getAdd(){
	//	$this->authorize('admin');
		return view('admin.user.add');
	}
	public function postAdd(Request $request){
	//	$this->authorize('admin');
		$data = $request->all();
		$passAgain = $data['passwordAgain'];
		$this->validate($request,[
			'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'name' => 'required|min:3|max:255',
			'email' => 'required|email|unique:users,email',
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
		if($passAgain !== ""){
			$this->validate($request,[
			
				'passwordAgain' => 'required',
			
			],[
				'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu'
			]);
			
		}
		$user = new User;
	//	$cus_img = '/uploads/customers'.$user->cus_img;
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
			$user->us_avatar = '/uploads/customers/20190518095616.png';
		}
		$user->us_name = $data['name'];
		$user->email = $data['email'];
		$user->us_is_admin = $data['type'];   
		$user->password = bcrypt($data['password']);
		$user->save();
		return redirect()->route('admin.user.getList')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);
	}
	//delete
	public function getDelete($id){
		//$this->authorize('admin');
		user::destroy($id);
		return redirect()->route('admin.user.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
	}
	
	//edit
	public function getEdit($id){
	//	$this->authorize('admin');
		$user = DB::table('users')->where('users.us_id',$id)->select('users.*')->limit(1)->get();
		if(count($user)==0){
			return getList();
		}
		$user=$user[0];
		return view('admin.user.edit',compact('user'));
	}
	
	public function postEdit($id,Request $request){
	//	$this->authorize('admin');
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
		$user = new user;
		$user = user::find($id);
		$user->us_name = $data['name'];
		$user->us_is_admin = $data['type']; 
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
		$user->save();
		return redirect()->route('admin.user.getList')->with('admin.thongbao','Sửa thành công');
//return redirect()->route('admin.user.edit',$id)->with('thongbao','Sửa thành công');

	}
	
}
