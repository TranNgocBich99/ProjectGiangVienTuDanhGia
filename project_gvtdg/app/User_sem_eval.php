<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
class User_sem_eval extends Authenticatable 
{
	use Notifiable;
	protected $table = 'user_eval_sem';

	protected $fillable = [
        'id','us_id', 'se_id','eval_id','user_rate_point'
    ];
	
	protected $primaryKey = 'id';
  
}
