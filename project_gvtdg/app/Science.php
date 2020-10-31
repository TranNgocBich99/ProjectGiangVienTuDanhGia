<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class Science extends Authenticatable 
{
	use Notifiable;
	protected $table = 'science';
	protected $fillable = [
        'sci_id','sci_name', 'sci_id_school','created_at','updated_at'
    ];
	
	protected $primaryKey = 'sci_id';
  
	public function GetAllScience(){
		$data = DB::table($this->table)->get();
		return $data;
	}
	
	public function getSciencesBySchId($sch_id){
		$data = DB::table($this->table)
						->where("science.sci_id_school",$sch_id)
						->get();
		return $data;
		
	}

}
