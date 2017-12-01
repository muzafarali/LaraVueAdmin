<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsqueuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eventsqueues', function(Blueprint $table)
		{
			$table->integer('eid', true);
			$table->integer('gid');
			$table->integer('id');
			$table->integer('category');
			$table->string('username', 12)->nullable();
			$table->text('title', 65535)->nullable();
			$table->string('backgroundColor', 11);
			$table->string('borderColor', 11);
			$table->string('textColor', 11);
			$table->text('description', 65535)->nullable();
			$table->dateTime('start');
			$table->dateTime('end');
			$table->string('url');
			$table->enum('allDay', array('true','false'))->default('true');
			$table->string('rendering', 10);
			$table->enum('overlap', array('true','false'))->default('true');
			$table->integer('recurdays');
			$table->date('recurend');
			$table->string('location');
			$table->float('latitude', 10, 0);
			$table->float('longitude', 10, 0);
			$table->string('filename', 250);
			$table->timestamp('pubDate')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('eventsqueues');
	}

}
