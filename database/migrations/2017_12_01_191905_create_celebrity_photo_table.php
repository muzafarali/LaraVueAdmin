<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCelebrityPhotoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('celebrity_photo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('celebrity_id');
			$table->string('photo_location');
			$table->string('photo_title')->nullable();
			$table->text('photo_description', 65535)->nullable();
			$table->string('photo_file')->nullable();
			$table->string('imgclass')->nullable();
			$table->string('sort')->nullable();
			$table->dateTime('created_on')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('celebrity_photo');
	}

}
