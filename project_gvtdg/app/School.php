<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
class School extends Authenticatable 
{
	use Notifiable;
	protected $table = 'school';
	protected $fillable = [
        'sch_id','sch_name', 'sch_address','created_at','updated_at'
    ];

	protected $primaryKey = 'sch_id';
  
	public function GetAllSchool(){
		$data = DB::table($this->table)->get();
		return $data;
	}
	
}
