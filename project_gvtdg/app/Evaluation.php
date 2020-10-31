<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class Evaluation extends Authenticatable 
{

	use Notifiable;
	protected $table = 'evaluation';
	protected $fillable = [
        'eva_id','eva_name', 'eva_ad_create_point','created_at','updated_at','eva_user_rate_point'
    ];

	protected $primaryKey = 'eva_id';
  
	public function GetAllEvaluations(){
		$data = DB::table($this->table)->get();
		return $data;
	}
	
}
