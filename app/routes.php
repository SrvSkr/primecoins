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
Route::get('/check_users', function()
{
		$users= User::all();
		echo '<pre>';
		print_r($users);
});


Route::get('/del_user', function()
{
		$users= User::find(7);
		$user1= User::find(8);
		$users->delete();
		$user1->delete();

});


Route::group(array('before' => 'auth'), function()
{
Route::get('/dashboard', function()
{
	return View::make('index');
	// $password = Hash::make(12345);
	// echo $password;
	// exit;
});



Route::get('/pc-send', function()
{
	return View::make('pc-send');
});
Route::get('/pc-receive', function()
{
	return View::make('pc-receive');
});

Route::get('/transactions', function()
{
	return View::make('transactions');
});

Route::get('/settings', function()
{
	return View::make('settings');
});

Route::resource('user', 'UserController');
Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::post('/postPc', array('uses' => 'HomeController@postPc'));

Route::post('/chPasswordPost', array('uses' => 'HomeController@chPasswordPost'));

Route::post('/chEmailPost', array('uses' => 'HomeController@chEmailPost'));

});

Route::get('/', function()
{
	return View::make('sign-in');
});
Route::get('/login', function()
{
	return View::make('sign-in');
});
Route::get('/register', function()
{
	return View::make('signUp');
});

Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'RegistrationController@confirm'
]);

Route::post('/postRegister', array('uses' => 'RegistrationController@store'));

Route::post('/postLogin', array('uses' => 'HomeController@doLogin'));



