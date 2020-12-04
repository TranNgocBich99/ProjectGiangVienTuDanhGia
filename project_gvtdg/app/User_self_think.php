<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
class User_self_think extends Authenticatable 
{
	use Notifiable;
	protected $table = 'user_self_think';

	protected $fillable = [
        'id','us_id', 'se_id','	us_self_think'
    ];
	
	protected $primaryKey = 'id';
  
	public function getThinkOfUser($us_id,$se_id){
		$data = DB::table($this->getTable())
            ->where('us_id', $us_id)
            ->where('se_id', $se_id)
			->get();
        return $data;
	}
}
