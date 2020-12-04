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
Route::get('teacher/{id}/form','UserController@getForm')->name('getForm');
Route::post('post_form','UserController@post_form')->name('post_form');

Route::get('ajax_get_semester','SemesterController@ajax_get_semester')->name('ajax_get_semester');
Route::get('ajax_get_list_eval','EvaluationController@ajax_get_list_eval')->name('ajax_get_list_eval');




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
		Route::get('list/{id}',['as'=>'admin.science.getList','uses'=>'ScienceController@getList']);
		Route::get('add',['as'=>'admin.science.add','uses'=>'ScienceController@getAdd']);
		Route::post('add',['as'=>'admin.science.postAdd','uses'=>'ScienceController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.science.delete','uses'=>'ScienceController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.science.edit','uses'=>'ScienceController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.science.postEdit','uses'=>'ScienceController@postEdit']);
	});

    //statistic

    Route::group(['prefix'=>'statistic'],function(){
        Route::get('/', 'StatisticController@index');
    });

    Route::group(['prefix'=>'report'],function(){
        Route::get('/', 'StatisticController@report');
    });


    //-------------------------------------------Evaluation------------------------------------------
	Route::group(['prefix'=>'evaluation'],function(){

		Route::get('/',['as'=>'admin.evaluation.getList','uses'=>'EvaluationController@getList']);
		Route::get('list',['as'=>'admin.evaluation.getList','uses'=>'EvaluationController@getList']);
		Route::get('add',['as'=>'admin.evaluation.add','uses'=>'EvaluationController@getAdd']);
		Route::post('add',['as'=>'admin.evaluation.postAdd','uses'=>'EvaluationController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.evaluation.delete','uses'=>'EvaluationController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.evaluation.edit','uses'=>'EvaluationController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.evaluation.postEdit','uses'=>'EvaluationController@postEdit']);
		Route::post('edit/{id}',['as'=>'admin.evaluation.postEdit','uses'=>'EvaluationController@postEdit']);
	});
});

