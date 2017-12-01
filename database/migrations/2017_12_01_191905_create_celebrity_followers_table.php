<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCelebrityFollowersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('celebrity_followers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('celebrity_id');
			$table->integer('user_id');
			$table->enum('type', array('follow','unfollow','like','unlike','heart','unheart'))->nullable();
			$table->dateTime('created_on')->default('0000-00-00 00:00:00');
			$table->bigInteger('created_by')->nullable();
			$table->dateTime('created')->nullable();
			$table->bigInteger('modified_by')->nullable();
			$table->dateTime('modified')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('celebrity_followers');
	}

}
