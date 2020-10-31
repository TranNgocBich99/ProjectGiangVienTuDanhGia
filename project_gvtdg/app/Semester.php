<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class Semester extends Authenticatable -
	use Notifiable;
	protected $table = 'semester';
	protected $fillable = [
        'se_id','se_name', 'se_year','created_at','updated_at'
    ];
	
	protected $primaryKey = 'se_id';
  
	public function GetAllSemester(){
		$data = DB::table($this->table)->get();
		return $data;
	}
	
}
