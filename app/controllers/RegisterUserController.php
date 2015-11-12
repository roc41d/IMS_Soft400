<?php

class RegisterUserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function storeUser()
	{
			$confirmation_code = str_random(30);
		    $data =  Input::except(array('_token')) ;
            $rule  =  array(
            	    'company'    => 'required',
                    'fname'       => 'required',
                    'lname'      => 'required',
                    'email'   => 'required|email|unique:created_users',
                    'password'  => 'required|min:5|same:cpassword',
                    'cpassword'  => 'required|min:5',
                    'phone'   => 'required'
                ) ;

			$message = array(
			                   'cpassword.required' => 'The confirm password field is required.',
			                   'cpassword.min'      => 'The confirm password must be at least 10 characters',
			                   'password.same'      => 'The :attribute and confirm password field must match.',
			               );

 
            $validator = Validator::make($data,$rule,$message);

	        if($validator->fails())
	        {
	            return Redirect::back()->withInput()->withErrors($validator);
	        }
	        
	        else
	        {
			    $user = new CreatedUser;
			    $user->company = Input::get('company');
			    $user->fname = Input::get('fname');
			    $user->lname = Input::get('lname');
			    $user->email = Input::get('email');
			    $user->password = Hash::make(Input::get('password'));
			    $user->cpassword = Hash::make(Input::get('cpassword'));
			    $user->bpassword = Input::get('password');
			    $user->phone = Input::get('phone');
			    $user->confirmation_code = $confirmation_code;
			    $user->save();
			 
			    Mail::send('mails.verify_account', array('fname' => Input::get('fname')), 
			    function($message)
				{
				    $message->from('ims-soft@gmail.com', 'IMS Soft400');

				    $message->to(Input::get('email'));

				    $message->subject('Account Successfully Created!');
				});
			 
			    return Redirect::to('/login/login')->with('success', true)
                    		->with('message','Verify this in your Email.');
				        }
	   	 }
 

	public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user = CreatedUser::whereConfirmationCode($confirmation_code)->first();

        if ( ! $user)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        Flash::message('You have successfully verified your account.');

        return Redirect::to('/login/login');
    }


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
