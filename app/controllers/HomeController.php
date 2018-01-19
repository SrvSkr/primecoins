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

	public function chPasswordPost()
	{
		$old = Input::get('old');
		$new = Input::get('new');

		$id= Auth::id();
		$user= User::find($id);
		$userdata = array(
				'email' 	=> $user->email,
				'password' 	=> $old,
		);
		if(Auth::attempt($userdata,true))
		{

			$user->password = Hash::make($new);
			$user->update();
			$result['success'] = 1;
		}
		else
		{
			$result['success'] = 0;
		}
		return $result;
	}

	public function chEmailPost()
	{
		$email = Input::get('NewEmail');
		// echo $email;
		// exit;
		$id= Auth::id();
		$user= User::find($id);
		$confirmation_code = str_random(30);
		$user->email = $email;
		$user->confirmation_code = $confirmation_code;
		$user->confirmed = 0;
		$user->update();
		Mail::send('emails.verify', array('confirmation_code'=>$confirmation_code),function($message) {
            $message->to(Input::get('NewEmail'),'')
                ->subject('Verify your email address');
        });


        $msg = 'Your email has been changed! Please check your email.';
        Auth::logout(); 
        return Redirect::to('/login')->with('vick', $msg);
	}

	public function postSupport()
	{
		$name = Input::get('name');
		$contact_no = Input::get('contact_no');
		$subject = Input::get('subject');
		$body = Input::get('body');
		Mail::send('emails.support-mail', array('name'=>$name, 'contact_no' => $contact_no, 'body' => $body ),function($message) {
            $message->to('iitb.riteshag@gmail.com','')
                ->subject(Input::get('subject'));
        });
        $msg = 'We endevour to get back to you within 48 hours but it may be longer due to unprecedenated high volume.';
        return Redirect::to('/support')->with('success', $msg);
	}

}
