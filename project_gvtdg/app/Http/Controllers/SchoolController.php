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
class schoolController extends Controller
{
   
    public function getList()
    {
		$school = new School;
		$data = $school->GetAllSchool();
		$listSchool = array();
		$listSchool = $data;
		
		return view('admin.school.list',compact('listSchool'));
      
    }

	//add
	public function getAdd(){
		return view('admin.school.add');
	}
	public function postAdd(Request $request){
		$data = $request->all();
		$this->validate($request,[
			'name' => 'required|min:3|max:255',
			'address' => 'required|min:3|max:255'
		],[
			'name.required' => 'Bạn chưa nhập tên Trường',
			'name.min' => 'Tên trường phải có ít nhất 3 ký tự',
			'name.max' => 'Tên trường chỉ được tối đa 255 ký tự',
			'address.required' => 'Bạn chưa nhập địa chỉ',
			'address.min' => 'Địa chỉ phải có ít nhất 3 ký tự',
			'address.max' => 'Địa chỉ chỉ được tối đa 255 kí tự'
		]);
		$school = new school;
		$school->sch_name = $data['name'];
		$school->sch_address = $data['address'];
		$school->save();
		return redirect()->route('admin.school.getList')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);
	}

	//delete
	public function getDelete($id){
		$data =DB::table('school')
                    ->leftJoin('science','school.sch_id', '=','science.sci_id_school')
                    ->where('school.sch_id', $id); 
        DB::table('science')->where('sci_id_school', $id)->delete();                           
        $data->delete();
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
			'name' => 'required|min:3|max:255',
			'address' => 'required|min:3|max:255'
		],[
			'name.required' => 'Bạn chưa nhập tên Trường',
			'name.min' => 'Tên trường phải có ít nhất 3 ký tự',
			'name.max' => 'Tên trường chỉ được tối đa 255 ký tự',
			'address.required' => 'Bạn chưa nhập địa chỉ',
			'address.min' => 'Địa chỉ phải có ít nhất 3 ký tự',
			'address.max' => 'Địa chỉ chỉ được tối đa 255 kí tự'
		]);
		$school = new school;
		$school = school::find($id);
		$school->sch_name = $data['name'];
		$school->sch_address = $data['address']; 
		$school->save();
		return redirect()->route('admin.school.getList')->with('admin.thongbao','Sửa thành công');
	}
}
