<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUzCitynamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uz_citynames', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned();
			$table->char('locale', 5)->index('locale');
			$table->string('name', 60);
			$table->string('fullname', 60);
			$table->unique(['ID','locale'], 'ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('uz_citynames');
	}

}
