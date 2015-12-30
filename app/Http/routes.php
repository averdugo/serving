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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('admin/owners/option', 'Admin\OwnerController@option');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::group(['prefix'=>'admin','namespace'=>'Admin'], function(){
	Route::resource('users','UsersController');
	Route::resource('allowances','AllowanceController');
	Route::resource('cars','CarController');
	Route::resource('groups','GroupController');
	Route::resource('indicators','IndicatorController');
	Route::resource('owners','OwnerController');
	Route::resource('reports','ReportController');
	Route::resource('requesters','RequesterController');
	Route::resource('sites','SiteController');
});