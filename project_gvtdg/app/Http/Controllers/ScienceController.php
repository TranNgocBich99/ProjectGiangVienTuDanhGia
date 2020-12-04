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
   
  //   public function getList()
  //   {
		// $science = new Science;
		// $listScience = $science->GetAllScience();
		// return view('admin.science.list',compact('listScience'));
  //   }
    
	public function ajax_get_science(Request $request){
		$science = new Science;
		$sch_id = $_GET['sch_id'];
		$data = $science->getSciencesBySchId($sch_id);
		$title="Chọn khoa";	
		return Response(view('admin.ajax_view.list_science',compact('data','title'))); 
	}
	
	public function getList($id){
		$science = new Science;
		$session_id = session()->getId();
		$listScience = $science->getSciencesBySchId($id);
		return view('admin.science.list',compact('listScience')); 
	}

	//add
	public function getAdd(){
		$list = School::all();
		return view('admin.science.add', compact('list'));
	}
	public function postAdd(Request $request){

		$data = $request->all();
		$this->validate($request,[
			'name' => 'required|min:3|max:255',
		],[
			'name.required' => 'Bạn chưa nhập tên người dùng',
			'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
			'name.max' => 'Tên người dùng chỉ được tối đa 255 ký tự',
		]);
		$science = new Science;
		$science->sci_name = $data['name'];
		$science->sci_id_school = $data['school'];
		$science->save();
		return redirect()->route('admin.school.getList')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);
	}

	//delete
	public function getDelete($id){
		science::destroy($id);
		return redirect()->route('admin.school.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
	}
	
	//edit
	public function getEdit($id){
		$science = DB::table('science')->where('science.sci_id',$id)->select('science.*')->limit(1)->get();
		if(count($science)==0){
			return getList();
		}
		$science=$science[0];
		return view('admin.science.edit',compact('science','id'));
	}
	
	public function postEdit($id,Request $request){
		$data = $request->all();
	
		$this->validate($request,[
			'name' => 'required|min:3|max:255',
		],[
			'name.required' => 'Bạn chưa nhập tên người dùng',
			'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
			'name.max' => 'Tên người dùng chỉ được tối đa 255 ký tự',
		]);
		$science = new Science;
		$science = Science::find($id);
		$science->sci_name = $data['name']; 
		$science->save();
		return redirect()->route('admin.school.getList')->with('admin.thongbao','Sửa thành công');
	}
}
