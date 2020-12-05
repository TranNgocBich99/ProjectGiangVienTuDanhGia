<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
class User_sem_eval extends Authenticatable
{
	use Notifiable;
	protected $table = 'user_eval_sem';

	protected $fillable = [
        'id','us_id', 'se_id','eval_id','user_rate_point'
    ];

	protected $primaryKey = 'id';

    public function getNumberUserRate($se_id, $eval_id, $users){
        $data = DB::table($this->getTable())
            ->select(DB::raw('COUNT(eval_id) as count'))
            ->where('se_id', $se_id)
            ->where('eval_id', $eval_id)
            ->whereIn('us_id', $users)
            ->groupBy('eval_id')
            ->get();
        return $data;
    }

    public function getReportData($se_id, $eval_id, $users){
        $data = DB::table($this->getTable())
            ->select('user_rate_point as point', DB::raw('COUNT(user_rate_point) as count'))
            ->where('se_id', $se_id)
            ->where('eval_id', $eval_id)
            ->whereIn('us_id', $users)
            ->groupBy('user_rate_point')
            ->get();
        return $data;
    }



	public function getAllEvalOfUserSem($us_id,$se_id){
		$data=DB::table($this->getTable())
				->where('us_id', $us_id)
				->where('se_id', $se_id)
				->get();
		return $data;
	}

	public function getRecordOfUserSemID($us_id,$se_id,$eval_id){
		$data=DB::table($this->getTable())
				->where('us_id', $us_id)
				->where('se_id', $se_id)
				->where('eval_id', $eval_id )
				->get();
		return $data;
	}


    public function getAllData($users){
        $data = DB::table($this->table)
            ->whereIn('us_id', $users)
            ->get();
        return $data;
    }

}
