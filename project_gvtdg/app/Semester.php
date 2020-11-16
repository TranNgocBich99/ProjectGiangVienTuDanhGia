<?php

namespace App;
use DB;
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
}
