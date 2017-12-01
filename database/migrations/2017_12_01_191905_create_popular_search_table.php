<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePopularSearchTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('popular_search', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('search_title')->nullable();
			$table->string('search_url')->nullable();
			$table->bigInteger('search_sort')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('popular_search');
	}

}
