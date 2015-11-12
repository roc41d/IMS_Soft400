<?php

class LoginController extends BaseController {


	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showLogin(){

		//show the form
		return View::make('/login/login');
	}

	public function doLogin(){

		//validate the info, create rules for the inputs
		$rules = array(
			'email' => 'required|email', //make sure the email is an actual mail
			'password' => 'required|alphaNum|min:5' //make password can only be and has to be great than 10 characters
			);

		//run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		//if the validate fails, redirect back to the form
		if($validator->fails()){
			return Redirect::to('/back_end/login')
				->withErrors($validator) //send back all errors to the login form
				->withInput(Input::except('password')); //send back the input (not the password) so that we can repopulate the form
		}
		else {

			//create our user data for the authentication
			$userdata = array(
					'email' => Input::get('email'),
					'password' => Input::get('password')
				);

			//attempt to do login
			if(Auth::attempt($userdata)){

				//validation successful!
				$email = Input::get('email');

				$fname = DB::select("SELECT fname FROM created_users WHERE email = '$email'");
				$lname = DB::select("SELECT lname FROM created_users WHERE email = '$email'");
				$email = DB::select("SELECT email FROM created_users WHERE email = '$email'");

				return View::make('/back_end/userDashboard')->with('success', true)->
				with('email', $email)->with('fname', $fname)->with('lname', $lname);
				//return Redirect::to('user');
				echo 'SUCCESS!';
			}
			else {

				//validation not sucessful, send back to form
				return Redirect::to('/login/login');
			}
		}
		
	}

	public function dashboard(){	

				$email = Input::get('email');
				$fname = DB::select("SELECT fname FROM created_users WHERE email = '$email'");
				$lname = DB::select("SELECT lname FROM created_users WHERE email = '$email'");
				$email = DB::select("SELECT email FROM created_users WHERE email = '$email'");

				return View::make('/back_end/userDashboard')->with('email', $email)
				->with('success', true)->with('fname', $fname)->with('lname', $lname);
	}

	public function doLogout(){

		Auth::logout(); //log the user out
		Session::flush();

		return Redirect::to('/login/login')->with('message', 'You Logged Out of the System'); //redirect to home
	}

}