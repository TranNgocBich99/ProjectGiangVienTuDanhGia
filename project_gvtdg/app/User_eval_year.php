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
	
	public function getRecordOfUserYearID($us_id,$ye_id,$eval_id){
		$data=DB::table($this->getTable())
				->where('us_id', $us_id)
				->where('ye_id', $ye_id)
				->where('eval_id', $eval_id)
				->get();
		return $data;
	}


}
