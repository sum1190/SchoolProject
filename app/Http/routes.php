<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



//Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


//Route::get('/', 'Auth\AuthController@login');
Route::get('/', 'PcdatasController@index');
Route::patch('pc_mants/{slug}/edit','PcmantsController@edit');

Route::resource('pc_datas', 'PcdatasController');
//Route::resource('pc_specs', 'PcspecsController');
//Route::resource('pc_mants', 'PcmantsController');

Route::resource('pc_datas.pc_specs', 'PcspecsController');
Route::resource('pc_datas.pc_mants', 'PcmantsController');

Route::model('pc_datas', 'Pc_data');
Route::model('pc_specs', 'Pc_specs');
Route::model('pc_mants', 'Pc_mants');

Route::bind('pc_datas', function($value, $route) {
	return App\Pc_data::whereSlug($value)->first();
});
Route::bind('pc_specs', function($value, $route) {
	return App\Pc_specs::wherePcid($value)->first();
});

Route::bind('pc_mants', function($value, $route) {
	$r=$route->getUri();

	if(substr($r, -4)=="edit")
		return App\Pc_mants::find($value)->first();
	else
		return App\Pc_mants::wherePcid($value)->get();
});
