<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreatedUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('created_users', function($newTable){
			$newTable->increments('id');
			$newTable->string('company');
			$newTable->string('fname');
			$newTable->string('lname');
			$newTable->string('email')->unique();
			$newTable->string('password', 128);
			$newTable->string('cpassword', 128);
			$newTable->string('bpassword');
			$newTable->string('phone');
			$newTable->string('confirmation_code')->nullable();
			$newTable->string('remember_token', 100);
			$newTable->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('created_users');
	}

}
