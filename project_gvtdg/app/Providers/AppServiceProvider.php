<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\School;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
		$school = new School;
		View::share('listSchool',$school->GetAllSchool());

    }
}
