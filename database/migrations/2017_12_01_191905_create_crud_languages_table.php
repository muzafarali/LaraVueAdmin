<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrudLanguagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crud_languages', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('language_code')->nullable();
			$table->string('language_name')->nullable();
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
		Schema::drop('crud_languages');
	}

}
