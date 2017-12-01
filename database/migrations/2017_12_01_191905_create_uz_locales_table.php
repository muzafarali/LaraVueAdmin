<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUzLocalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uz_locales', function(Blueprint $table)
		{
			$table->char('locale', 5)->primary();
			$table->string('name', 60);
			$table->string('fullname', 60);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('uz_locales');
	}

}
