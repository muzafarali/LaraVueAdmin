<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCelebrityChildrenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('celebrity_children', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('celebrity_id');
			$table->string('children_name')->nullable();
			$table->date('children_dob')->nullable();
			$table->integer('children_celebrity_id')->nullable();
			$table->string('children_gender', 11)->nullable();
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
		Schema::drop('celebrity_children');
	}

}
