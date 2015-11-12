<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('prodId');
			$table->string('pname');
			$table->string('descr');
			$table->string('category');
			$table->string('location');
			$table->string('purl');
			$table->string('price');
			$table->string('pvat');
			$table->string('sales');
			$table->string('svat');
			$table->string('quantity');
			$table->string('swarn');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product');
	}

}
