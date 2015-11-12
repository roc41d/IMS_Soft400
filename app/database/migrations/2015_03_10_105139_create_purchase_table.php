<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
Schema::create('purchase', function(Blueprint $newTable){	

			$newTable->increments('id');
            $newTable->string('custname');
            $newTable->string('custemail');
            $newTable->string('tel_num');
            $newTable->string('prodId');
            $newTable->string('prodname');
            $newTable->string('stockunit');
            $newTable->string('status');
			$newTable->string('category');
			$newTable->string('price');
			
		});


		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('purchase');
	}

}
