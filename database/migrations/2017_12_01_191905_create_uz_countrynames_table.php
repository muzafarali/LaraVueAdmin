<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUzCountrynamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uz_countrynames', function(Blueprint $table)
		{
			$table->char('code', 2);
			$table->char('locale', 5)->index('locale');
			$table->string('name', 60);
			$table->string('fullname', 60);
			$table->unique(['code','locale'], 'code');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('uz_countrynames');
	}

}
