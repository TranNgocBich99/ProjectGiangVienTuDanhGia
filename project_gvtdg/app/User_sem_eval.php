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

    public function getReportData($se_id, $eval_id){
        $data = DB::table($this->getTable())
            ->select('user_rate_point as point', DB::raw('COUNT(user_rate_point) as count'))
            ->where('se_id', $se_id)
            ->where('eval_id', $eval_id)
            ->groupBy('user_rate_point')
            ->get();
        return $data;
    }

    public function getAllData(){
        $data = DB::table($this->table)->get();
        return $data;
    }

}
