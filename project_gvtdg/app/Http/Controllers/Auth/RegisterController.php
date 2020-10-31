<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
	private $destinationPath =  '/uploads/Users/';
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
  ///  protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
	
    public function __construct()
    {
     //   $this->middleware('guest');
		//$this->authorize('admin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
	
    protected function create(array $data)
    {
		/*$data = $request->all();
		$request->validate([
            'avatar.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
		$user = new User;
		if($request->hasFile('avatar')){
			$file = Input::file('avatar');
			$filename =$file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension();
			$timestamp = str_replace([' ', ':','-'], '', Carbon::now()->toDateTimeString());
			$name =$timestamp .'.'.$extension;
			$file->move(public_path($this->destinationPath), $name);
			$user->user_avartar=$this->destinationPath.$name;
		}
		$user->name = $data['name'];
		$user->email = $data['email'];
		$user->password = Hash::make($data['password']);
		//$user->user_type = $data['type'];
		$user->save();
		return redirect()->route('home')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);
		*/
	//	print_r($data);
	//	exit();
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
			'user_type' => 0,
		]);
    }
	
}
