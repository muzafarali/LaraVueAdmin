<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUzCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uz_countries', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->char('code', 2);
			$table->string('url', 50)->index('url');
			$table->string('name', 50)->unique('name');
			$table->float('latitude', 10, 0);
			$table->float('longitude', 10, 0);
			$table->integer('regions');
			$table->bigInteger('created_by')->nullable();
			$table->dateTime('created')->nullable();
			$table->bigInteger('modified_by')->nullable();
			$table->dateTime('modified')->nullable();
			$table->primary(['id','code']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('uz_countries');
	}

}
