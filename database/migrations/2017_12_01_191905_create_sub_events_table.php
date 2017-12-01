<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sub_events', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('celebrity_id')->nullable();
			$table->string('event_name')->nullable();
			$table->text('event_detail', 65535)->nullable();
			$table->date('event_date')->nullable();
			$table->dateTime('start_date')->nullable();
			$table->dateTime('end_date')->nullable();
			$table->string('location')->nullable();
			$table->string('website', 244)->nullable();
			$table->string('link')->nullable();
			$table->string('event_file', 244)->nullable();
			$table->dateTime('created')->nullable();
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
		Schema::drop('sub_events');
	}

}
