<?php

/*==========================================================*/
//This is a model to finally register a user into the database
//by creating he or she account on the platform 

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class RegisterUser extends Eloquent {
		protected $guarded = array();
        protected $table = 'created_users'; // table name
        public $timestamps = 'true' ; // to disable default timestamp fields
 
        // model function to store form data to database
        public static function saveUserData($data)
        {
            DB::table('created_users')->insert($data);
        }
}