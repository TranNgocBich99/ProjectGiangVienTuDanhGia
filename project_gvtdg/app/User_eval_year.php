<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
class User_eval_year extends Authenticatable
{
	use Notifiable;
	protected $table = 'user_eval_year';

	protected $fillable = [
        'id','us_id', 'ye_id','eval_id','user_rate_point'
    ];

	protected $primaryKey = 'id';
	
	public function getAllEvalOfUserYear($us_id,$ye_id){
		$data=DB::table($this->getTable())
				->join('evaluation', 'user_eval_year.eval_id', '=', 'evaluation.eva_id')
				->where('user_eval_year.us_id', $us_id)
				->where('user_eval_year.ye_id', $ye_id)
				->get();
		return $data;
	}

	public function getAllEvalOfUserSem($us_id,$year_id){
		$data=DB::table($this->getTable())
		        ->where('us_id', $us_id)
		        ->where('ye_id', $year_id)
		        ->get();
		return $data;
	}

	public function getRecordOfUserYearID($us_id,$year_id,$eval_id){
		$data=DB::table($this->getTable())
		        ->where('us_id', $us_id)
		        ->where('ye_id', $year_id)
		        ->where('eval_id', $eval_id )
		        ->get();
		return $data;
	}

	public function getNumberUserRate($year_id, $eval_id, $users){
		$data = DB::table($this->getTable())
		          ->select(DB::raw('COUNT(eval_id) as count'))
		          ->where('ye_id', $year_id)
		          ->where('eval_id', $eval_id)
		          ->whereIn('us_id', $users)
		          ->groupBy('eval_id')
		          ->get();
		return $data;
	}

	public function getReportData($year_id, $eval_id, $users){
		$data = DB::table($this->getTable())
		          ->select('user_rate_point as point', DB::raw('COUNT(user_rate_point) as count'))
		          ->where('ye_id', $year_id)
		          ->where('eval_id', $eval_id)
		          ->whereIn('us_id', $users)
		          ->groupBy('user_rate_point')
		          ->get();
		return $data;
	}

	public function getAllData($users, $year = ''){
		$data = DB::table($this->getTable())
		          ->whereIn('us_id', $users);
		if(!empty($year)){
			$data->where('ye_id', $year);
		}

		return $data->get();
	}

	public function getAllDataByEvalID($users, $eval_id, $year_id){
		$data = DB::table($this->getTable())
		          ->whereIn('us_id', $users)
		          ->where('eval_id', $eval_id)
				->where('ye_id', $year_id)
		          ->get();
		return $data;
	}
}
