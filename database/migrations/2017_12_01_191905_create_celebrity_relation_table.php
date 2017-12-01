<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCelebrityRelationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('celebrity_relation', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('celebrity_id')->nullable();
			$table->string('company_name', 250)->nullable();
			$table->string('relation', 50)->nullable();
			$table->string('name', 150)->nullable();
			$table->string('email_address', 250)->nullable();
			$table->string('job_title', 250)->nullable();
			$table->string('website', 250)->nullable();
			$table->string('phone_number', 100)->nullable();
			$table->string('second_number', 100)->nullable();
			$table->string('location', 250)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('celebrity_relation');
	}

}
