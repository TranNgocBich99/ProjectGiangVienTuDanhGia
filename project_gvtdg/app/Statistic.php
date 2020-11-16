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
	public function status() {
	    $data = DB::table('users')
            ->where('status', 1)
	        ->get();
	    return $data;
    }
    public function averageScore($se_id) {
	    $data = DB::table('evaluation')
            ->join('user_eval_sem', 'evaluation.eva_id', '=', 'user_eval_sem.eval_id')
            ->select('evaluation.eva_id', 'user_eval_sem.user_rate_point as a', 'evaluation.eva_name', DB::raw('sum(user_eval_sem.user_rate_point) as point, COUNT(user_eval_sem.eval_id) as number_user'))
            ->where('se_id', $se_id)
            ->groupBy('user_eval_sem.eval_id')
            ->get();
	    return $data;
    }
   public function getPoint() {
	    $data = DB::table('evaluation')
            ->join('user_eval_sem', 'evaluation.eva_id', '=', 'user_eval_sem.eval_id')
            ->select('user_eval_sem.user_rate_point')
            ->get();
	    return $data;
    }

}
