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
    
    public function index()
    {
		return view('Front-end.welcome.welcome');
    }
}
