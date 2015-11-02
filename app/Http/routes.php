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
//视图路由
Route::get('/', function () {
    return view('welcome');
});
Route::get('/signin',function(){
	return view ('signin');
});

Route::get('/signup',function(){
	return view ('signup');
});
//数据路由
Route::post('/signinAction','LoginController@signinAction');
Route::post('/signupAction','LoginController@signupAction');