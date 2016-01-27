<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('dosen', 'DosenController');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
 */

Route::group(['middleware' => ['web']], function () {
    //
});

// start here
// Route::get('testdosen', 'DosenController@testdosen');
//
Route::get('dosen/create', 'DosenController@create');
Route::post('dosen/create', 'DosenController@store');
Route::get('dosen', 'DosenController@index');
Route::get('dosen/update/{id}', 'DosenController@update');
Route::post('dosen/update/{id}', 'DosenController@patch');
Route::get('dosen/delete/{id}', 'DosenController@delete');
