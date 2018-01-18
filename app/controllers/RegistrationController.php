<?php

class RegistrationController extends \BaseController {

    public function store()
    {
        $rules = [
            'email' => 'required|email|unique:users',
            'contact_no' => 'required|digits:10|unique:users',
            'password' => 'required|confirmed|min:6'
        ];

        $input = Input::only(
            'email',
            'contact_no',
            'password',
            'password_confirmation'
        );

        $validator = Validator::make($input, $rules);

        if($validator->fails())
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $confirmation_code = str_random(30);
        $wallet_id = Hash::make(str_random(30));
        $user = User::create([
            'contact_no' => Input::get('contact_no'),
            'email' => Input::get('email'),
            'password' => Hash::make(Input::get('password')),
            'confirmation_code' => $confirmation_code,
            'wallet_id' => $wallet_id
        ]);


      Mail::send('emails.verify', array('confirmation_code'=>$confirmation_code),function($message) {
            $message->to(Input::get('email'),'')
                ->subject('Verify your email address');
        });


        $msg = 'Thanks for signing up! Please check your email.';
        return Redirect::to('/register')->with('nick', $msg);


    }



    public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            //throw new InvalidConfirmationCodeException;
             return Redirect::to('/login');
        }

        $user = User::where('confirmation_code', '=', $confirmation_code)->first();

        if ( ! $user)
        {
            //throw new InvalidConfirmationCodeException;
             return Redirect::to('/login');
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        $msg = 'Thanks for signing up! Please check your email.';
        return Redirect::to('/login')->with('vick', $msg);


    }
}