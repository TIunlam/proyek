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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('welcome');
});

Route::get('berita', 'BeritaController@daftar_berita');



// Authentication routes...
Route::get('login',
		['as'=>'getLogin',
		 'uses'=>'Auth\AuthController@getLogin']);
Route::post('login',
		['as'=>'postLogin',
		 'uses'=> 'Auth\AuthController@postLogin']);
Route::get('logout',
		['as'=>'getLogout',
		 'uses'=> 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('register',
		['as'=>'getRegister',
		 'uses'=>'Auth\AuthController@getRegister']);
Route::post('register', 
		['as'=>'postRegister',
		 'uses'=>'Auth\AuthController@postRegister']);



Route::get('dashboard',
		['as'=>'dashboardview',
		 'uses'=>'DashboardController@index']);

Route::get('dashboard/berita',
		['as'=>'admin.berita',
		 'uses'=>'DashboardController@beritaview']);

Route::get('dashboard/berita/tambah',
		['as'=>'beritatambah',
		 'uses'=>'DashboardController@beritatambah']);

