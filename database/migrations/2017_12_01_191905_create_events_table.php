<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->integer('eid', true);
			$table->integer('gid');
			$table->integer('id');
			$table->integer('category');
			$table->integer('user_id')->nullable();
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
			$table->string('price', 50)->default('0');
			$table->string('social', 250);
			$table->timestamp('pubDate')->default(DB::raw('CURRENT_TIMESTAMP'));
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
		Schema::drop('events');
	}

}
