<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Register extends Eloquent {
		protected $guarded = array();
        protected $table = 'users'; // table name
        public $timestamps = 'true' ; // to disable default timestamp fields
 
        // model function to store form data to database
        public static function saveFormData($data)
        {
            DB::table('users')->insert($data);
        }
}