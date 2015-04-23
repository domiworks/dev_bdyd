<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParokiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paroki', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_paroki');
			$table->string('nama_dekanat'); 
			$table->integer('quota'); 

			$table->dateTime('created_at');
			$table->dateTime('updated_at');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('paroki');
	}

}
