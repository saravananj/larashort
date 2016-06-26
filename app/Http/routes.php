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

Route::get('/', "URLController@index");

Route::post('/createURL', "URLController@createURL");

Route::post('login', "Auth\AuthController@postLogin");
Route::get('logout', 'Auth\AuthController@getLogout');
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');



//Always to be at the last
Route::get('/{shortenedURL}', "URLController@redirectURL");

// 	Route::get('/', function () {
// 		return view('welcome');
// 	});
