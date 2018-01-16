<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('index');
	}
	public function doLogin()
	{

		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);
		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);
		// 		echo 'dsgasdg';
		// exit;
		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			// return Redirect::to('signIn')
			// 	->withErrors($validator) // send back all errors to the login form
			// 	->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
			echo 'validator';
			exit;
		} else {
			// create our user data for the authentication
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password'),
			);
			// echo '<pre>';
			// print_r($userdata);
			// exit;
			// attempt to do the login
			if (Auth::attempt($userdata,true)) {
				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password'),
				'confirmed' => 1
				);
				if (Auth::attempt($userdata,true)) {
				return Redirect::intended('/dashboard');
			}
			else
			{
				$msg = 'The account email address is not yet verified.';
				return Redirect::to('/')->with('nick', $msg);
			}
			} else {
				
				$msg = 'Username or Password is incorrect.';
				return Redirect::to('/')->with('nick', $msg);
			}
		}
	}

	public function doLogout()
	{
	    Auth::logout(); // log the user out of our application
	    return Redirect::to('/'); // redirect the user to the login screen
	}


	public function postPc()
	{
		$send_to 	= Input::get('send_to');
		$amount 	= Input::get('amount');
		$description 	= Input::get('description');
		$id = Auth::id();
		$user = User::find($id);
		$receive_user = User::where('wallet_id', '=', $send_to)->first();

		if($user->wallet_amount >= $amount)
		{
			if(($receive_user)&&($receive_user->id != $user->id))
			{
				$user->wallet_amount = $user->wallet_amount-$amount;
				
				$receive_user->wallet_amount = $receive_user->wallet_amount + $amount;
				
				if(($user->update())&&($receive_user->update()))
				{
					$pc_send = new SendPc;
					$pc_send->sender_id = $id;
					$pc_send->receiver_id = $receive_user->id;
					$pc_send->amount = $amount;
					$pc_send->description = $description;
					if($pc_send->save())
					{
						$msg= 'Successfully sent..';
						return Redirect::to('pc-send')->with('success', $msg);
					}
				}
				

			}
			else
				{
					$msg= "Invalid sender's address";
					return Redirect::to('pc-send')->with('failure', $msg);
				}
		}
		else
		{
			$msg= "Insufficient wallet amount..";
			return Redirect::to('pc-send')->with('failure', $msg);
		}
		// echo '<pre>';
		// print_r(Input::All());
		// exit;

	}

}
