<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index')->name('home');

Route::post('dangki',['as'=>'postDangki','uses'=>'RegisterController@postDangki']);
Route::get('dangki',['as'=>'getDangki','uses'=>'RegisterController@getDangki']);

Auth::routes();
// ------------------------------------------- Edit profile --------------------------------------

Route::get('edit/profile/{id}','ProfileController@getProfile')->name('getProfile');
Route::post('edit/profile/{id}','ProfileController@postProfile')->name('postProfile');

Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});
Route::group(['prefix'=>'admin','middleware' => ['can:admin']],function(){

	//-------------------------------------------User------------------------------------------
	Route::group(['prefix'=>'user'],function(){

			Route::get('/',['as'=>'admin.user.getList','uses'=>'UserController@getList']);
			Route::get('list',['as'=>'admin.user.getList','uses'=>'UserController@getList']);
			Route::get('add',['as'=>'admin.user.add','uses'=>'UserController@getAdd']);
			Route::post('add',['as'=>'admin.user.postAdd','uses'=>'UserController@postAdd']);
			Route::get('delete/{id}',['as'=>'admin.user.delete','uses'=>'UserController@getDelete']);
			Route::get('edit/{id}',['as'=>'admin.user.edit','uses'=>'UserController@getEdit']);
			Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);
			Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);
	});

	//-------------------------------------------School------------------------------------------
	Route::group(['prefix'=>'school'],function(){
			Route::get('/',['as'=>'admin.school.getList','uses'=>'SchoolController@getList']);
			Route::get('list',['as'=>'admin.school.getList','uses'=>'SchoolController@getList']);
			Route::get('add',['as'=>'admin.school.add','uses'=>'SchoolController@getAdd']);
			Route::post('add',['as'=>'admin.school.postAdd','uses'=>'SchoolController@postAdd']);
			Route::get('delete/{id}',['as'=>'admin.school.delete','uses'=>'SchoolController@getDelete']);
			Route::get('edit/{id}',['as'=>'admin.school.edit','uses'=>'SchoolController@getEdit']);
			Route::post('edit/{id}',['as'=>'admin.school.postEdit','uses'=>'SchoolController@postEdit']);
	});

	//-------------------------------------------Science------------------------------------------
	Route::group(['prefix'=>'science'],function(){
		Route::get('ajax_get_science','ScienceController@ajax_get_science')->name('ajax_get_science');
	});

    //statistic

    Route::group(['prefix'=>'statistic'],function(){
        Route::get('/', 'StatisticController@index');
    });
});

