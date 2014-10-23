<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('users',function()
{
	return View::make('users');
});

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/', 'BaseController@home');
Route::get('/mountbike', 'BaseController@mountbike');
Route::get('/development', 'BaseController@development');
Route::get('/resume', 'BaseController@resume');
Route::get('/test', 'BaseController@test');
Route::get('/ajax/mbike_pics', 'BaseController@ajaxMbikePics');

