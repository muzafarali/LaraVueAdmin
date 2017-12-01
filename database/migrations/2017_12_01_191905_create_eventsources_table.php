<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsourcesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eventsources', function(Blueprint $table)
		{
			$table->integer('source_id', true);
			$table->string('username', 20);
			$table->string('source_name', 90);
			$table->string('source_url');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('eventsources');
	}

}
