<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
       
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
	
   public function boot()
    {
        $this->registerPolicies();
		Gate::define('admin',function($user){
			return $user->us_is_admin === 1;
		});
		Gate::define('teacher',function($user){
			return $user->us_is_admin === 2;
		});
		Gate::define('guest',function($user){
			return $user->us_is_admin === 3;
		});
		
    }
	
	
	
}
