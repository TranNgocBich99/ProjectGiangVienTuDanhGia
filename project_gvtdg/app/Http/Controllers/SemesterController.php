<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use App\Semester;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
class SemesterController extends Controller
{
	public function ajax_get_semester(Request $request){
		$semester = new Semester;
		$year = $_GET['year'];
		$data = $semester->getListSeByYears($year);
		$title="Chọn học kỳ";	
		return Response(view('Front-end.ajax_view.list_semester',compact('data','title'))); 
	}
	
}
