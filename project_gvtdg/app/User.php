<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
class User extends Authenticatable
{
	use Notifiable;
	protected $table = 'users';

	protected $fillable = [
        'us_id','us_name', 'us_is_admin','us_is_active',
		'us_is_active ','us_sci_id','us_id_school',
		'remember_token','password','created_at',
		'updated_at','email','us_avatar',
		'password ','email_verified_at'
    ];
	 /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	protected $primaryKey = 'us_id';

	public function GetAllUsers(){
		$data = DB::table('users')
            ->join('school', 'users.us_id_school', '=', 'school.sch_id')
            ->join('science', 'users.us_sci_id', '=', 'science.sci_id')
            ->get();
		return $data;
	}

	public function getUserBySchool($school){
        $data = DB::table('users')
            ->where('us_id_school', $school)
            ->get();
        return $data;
    }
	
}
