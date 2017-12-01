<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArtistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artist', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('artist_name', 250)->nullable();
			$table->string('artist_des', 250)->nullable();
			$table->string('music_file', 250)->nullable();
			$table->string('artist_pic', 250)->nullable();
			$table->string('url', 250)->nullable();
			$table->bigInteger('is_featured')->default(1);
			$table->bigInteger('is_promoted')->default(1);
			$table->bigInteger('is_promoted2')->default(1);
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
		Schema::drop('artist');
	}

}
