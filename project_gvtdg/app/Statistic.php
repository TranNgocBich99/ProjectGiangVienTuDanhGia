<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class Statistic extends Authenticatable 
{
	use Notifiable;
	protected $table = 'statistic';
	protected $fillable = [
        'st_id','st_us_id', 'st_sum_point','st_standard_deviation','se_id','created_at','updated_at'
    ];
	
	protected $primaryKey = 'st_id';
  
	public function GetAllStatictis(){
		$data = DB::table($this->table)->get();
		return $data;
	}
	
}
