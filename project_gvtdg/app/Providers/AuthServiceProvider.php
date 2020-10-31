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
       //  'App\Customer' => 'App\Policies\CustomerPolicy',
		// 'App\news' => 'App\Policies\NewPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
	
   public function boot()
    {
        $this->registerPolicies();
		/*Gate::before(function($user){
			return $user->user_type === 'admin';
		});*/
		Gate::define('admin',function($user){
			//dd($user->user_type);
			return $user->user_type === '1';
		});
		Gate::define('user',function($user){
			return $user->user_type === '0';
		});
		
    }
	
	
	
}
