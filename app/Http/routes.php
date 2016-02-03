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
Route::get('admin/users/groupsOption/{id}', 'Admin\UsersController@groupsOption');
Route::get('admin/ots/form/{type}', 'Admin\OtController@form');
Route::get('admin/ots/listA/{type}', 'Admin\OtController@listA');
Route::get('admin/ots/gantt/{type}', 'Admin\OtController@gantt');
Route::get('admin/ots/data/{type}', 'Admin\OtController@data');
Route::get('admin/allowance/listA', 'Admin\AllowanceController@listA');
Route::get('admin/sites/nemonico', 'Admin\SiteController@nemonico');
Route::get('admin/sites/csv', 'Admin\SiteController@csv');
Route::get('admin/users/letterSeach/{name}', 'Admin\UsersController@letterSeach');

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
	Route::resource('ots','OtController');
	Route::resource('otDetails','OtDetailController');
});