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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Client Record
Route::get('/', 'ClientRecordController@index')->name('welcome');
Route::post('/', 'ClientRecordController@submit')->name('welcome.submit');
Route::post('clientrecord', 'ClientRecordController@clientrecord')->name('clientrecord');

// Session Routs
Route::get('user/login', 'SessionController@index')->name('login');
Route::post('user/login', 'SessionController@login')->name('user.login');
Route::get('user/logout', 'SessionController@logout')->name('logout');


//Admin Routs
Route::group(['as'=>'admin.', 'prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth', 'admin']], function(){

	//Route::get('dashboard', 'DashboardController@index')->name('dashboard');
	Route::get('user/all', 'UserController@index')->name('users');
	Route::get('user/create', 'UserController@create')->name('user.create');
	Route::post('user/create', 'UserController@store')->name('user.store');

});



//Editor
Route::group(['as'=>'editor.', 'prefix'=>'editor', 'namespace'=>'Editor', 'middleware'=>['auth', 'editor']], function(){

	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
	Route::get('{id}/show', 'DashboardController@show')->name('show');
	Route::get('{id}/edit', 'DashboardController@edit')->name('edit');

});

//Viewer
Route::group(['as'=>'viewer.', 'prefix'=>'viewer', 'namespace'=>'Viewer', 'middleware'=>['auth', 'viewer']], function(){

	Route::get('dashboard', 'DashboardController@index')->name('dashboard');


});


//Employee
Route::group(['as'=>'employee.', 'prefix'=>'employee', 'namespace'=>'Employee', 'middleware'=>['auth', 'admin']], function(){

	Route::get('all', 'EmployeeController@index')->name('all');
	Route::get('create', 'EmployeeController@create')->name('create');
	Route::post('create', 'EmployeeController@store')->name('store');
	Route::get('{id}/show', 'EmployeeController@show')->name('show');
	Route::get('{id}/edit', 'EmployeeController@edit')->name('edit');
	Route::post('{id}/edit', 'EmployeeController@update')->name('update');
	Route::get('{id}/destroy', 'EmployeeController@destroy')->name('destroy');

});

