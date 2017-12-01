<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCelebritySpouseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('celebrity_spouse', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('celebrity_id');
			$table->string('spouse_name')->nullable();
			$table->string('spouse_relation')->nullable();
			$table->integer('spouse_celebrity_id')->nullable();
			$table->integer('spouse_children')->nullable();
			$table->date('spouse_from')->nullable();
			$table->date('spouse_to')->nullable();
			$table->dateTime('created_on')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('celebrity_spouse');
	}

}
