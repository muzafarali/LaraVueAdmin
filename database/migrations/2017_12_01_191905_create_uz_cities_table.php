<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUzCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uz_cities', function(Blueprint $table)
		{
			$table->increments('ID');
			$table->char('country', 2);
			$table->char('region', 3);
			$table->string('url', 50);
			$table->string('name', 50);
			$table->float('latitude', 10, 0);
			$table->float('longitude', 10, 0);
			$table->bigInteger('created_by')->nullable();
			$table->dateTime('created')->nullable();
			$table->bigInteger('modified_by')->nullable();
			$table->dateTime('modified')->nullable();
			$table->unique(['country','name','region'], 'country');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('uz_cities');
	}

}
