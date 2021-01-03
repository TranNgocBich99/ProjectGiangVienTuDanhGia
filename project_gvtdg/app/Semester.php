<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $table = 'semester';
    protected $fillable = [
        'se_id','se_name', 'se_year','created_at','updated_at'
    ];

	protected $primaryKey = 'se_id';

	public function getListYears() {
	    $data = DB::table($this->getTable())
            ->select('se_year')
            ->groupBy('se_year')
	        ->get();
	    return $data;
    }

    public function getListSeByYears($yearInput){
        $data = DB::table($this->getTable())
            ->where('se_year', $yearInput)
            ->get();
        return $data;
    }
	
	public function getSemesterByUserID($us_id){
		$semester = DB::table($this->getTable())
            ->join('user_eval_sem', 'user_eval_sem.se_id', '=', 'semester.se_id')
			->where('user_eval_sem.us_id','=',$us_id)
			->select('semester.se_id','semester.se_year','semester.se_name')
			->orderBy('semester.se_year', 'desc')
            ->first();
        return $semester;
	}
}
