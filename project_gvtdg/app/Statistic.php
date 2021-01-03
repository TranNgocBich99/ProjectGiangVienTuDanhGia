<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

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
	public function status($school) {
	    $data = DB::table('users')
            ->where('status', 1)
            ->where('us_id_school', $school)
	        ->get();
	    return $data;
    }
    public function averageScore($year_id, $users) {
	    $data = DB::table('evaluation')
            ->join('user_eval_year', 'evaluation.eva_id', '=', 'user_eval_year.eval_id')
            ->select('evaluation.eva_id', 'user_eval_year.user_rate_point as a', 'evaluation.eva_name', DB::raw('sum(user_eval_year.user_rate_point) as point, COUNT(user_eval_year.eval_id) as number_user'))
            ->where('ye_id', $year_id)
            ->whereIn('us_id', $users)
            ->groupBy('user_eval_year.eval_id')
            ->get();
	    return $data;
    }

	public function averageScoreWithEval($year_id, $eval_id, $users) {
		$data = DB::table('user_eval_year')
		          ->select(DB::raw('sum(user_eval_year.user_rate_point) as point, COUNT(user_eval_year.eval_id) as number_user'))
		          ->where('ye_id', $year_id)
		          ->whereIn('us_id', $users)
		          ->where('eval_id', $eval_id)
		          ->get()->first();
		return $data;
	}

   public function getPoint() {
	    $data = DB::table('evaluation')
            ->join('user_eval_year', 'evaluation.eva_id', '=', 'user_eval_year.eval_id')
            ->select('user_eval_year.user_rate_point')
            ->get();
	    return $data;
    }

}
