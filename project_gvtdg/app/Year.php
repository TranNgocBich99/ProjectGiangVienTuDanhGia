<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $table = 'year';
    protected $fillable = [
        'ye_id','ye_start', 'ye_note','created_at','updated_at','ye_end'
    ];

	protected $primaryKey = 'ye_id';

	public function getAll() {
	    $data = DB::table($this->getTable())
				->orderBy('year.ye_end', 'asc')	
				->get();
	    return $data;
	}
	
	public function getYearByUserID($us_id){
		$year = DB::table($this->getTable())
            ->join('user_eval_year', 'user_eval_year.ye_id', '=', 'year.ye_id')
			->where('user_eval_year.us_id','=',$us_id)
			->orderBy('year.ye_end', 'desc')
            ->first();
        return $year;
	}
}
	
	
