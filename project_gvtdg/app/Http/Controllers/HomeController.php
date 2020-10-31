<?php
namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use App\User;
use Auth;
use App\Schedule;
use ScheduleController;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$user = new User;
		if (Auth::user()->us_type == 1) {
			$schedule = new Schedule;
			$data = $schedule->GetAllschedule();
			$list = array();
			$list = $data;
			return view('admin.schedule.list',compact('list'));
		} elseif(Auth::user()->us_type == 2) {		
			$list = $user->getAllSubjectByUsType(Auth::user()->us_id);
			return view('admin.auth.giangvien',compact('list'));
		} elseif(Auth::user()->us_type == 3) {
			$list = $user->getAllSubjectByUsType(Auth::user()->us_id);
			return view('admin.auth.student',compact('list'));
		}else{
			return "View not found";
		}
      
    }
}
