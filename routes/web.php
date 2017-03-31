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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('profile/{id}', 'UserController@show');

Route::get('/employee', 'UserController@getList');

Route::post('/employee/delete', 'UserController@postDelete');

Route::post('/employee/update', 'UserController@postUpdate');

Route::get('/employee/add', 'UserController@getAdd');
Route::post('/employee/add', 'UserController@postAdd');
