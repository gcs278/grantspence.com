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

Route::get('/', 'BaseController@home');
Route::get('/blog', 'BaseController@blog');
Route::get('/dev/{name}','BaseController@post');
Route::get('/hacks/{name}','BaseController@hacks');
Route::get('/hacks/{name}/{k}','BaseController@hacks');
Route::get('/development', 'BaseController@development');
Route::get('/resume', 'BaseController@resume');

