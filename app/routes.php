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

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/signIn', function()
{
	return View::make('sign-in');
});

Route::get('/sc-send', function()
{
	return View::make('sc-send');
});

Route::post('/login', array('uses' => 'HomeController@doLogin'));


Route::resource('user', 'UserController');
