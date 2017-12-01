<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartnersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partners', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 250)->nullable();
			$table->string('file', 250)->nullable();
			$table->string('url', 250)->nullable();
			$table->integer('tier')->nullable();
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
		Schema::drop('partners');
	}

}
