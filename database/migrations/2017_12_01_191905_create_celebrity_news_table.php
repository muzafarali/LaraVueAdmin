<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCelebrityNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('celebrity_news', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('celebrity_id');
			$table->string('news_location');
			$table->string('news_title')->nullable();
			$table->text('news_description', 65535)->nullable();
			$table->string('news_photo')->nullable();
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
		Schema::drop('celebrity_news');
	}

}
