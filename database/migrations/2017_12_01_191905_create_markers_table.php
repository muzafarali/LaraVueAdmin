<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMarkersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('markers', function(Blueprint $table)
		{
			$table->integer('markers_id', true);
			$table->integer('markers_category_id');
			$table->integer('event_id')->unique('event_id');
			$table->string('username', 25);
			$table->string('markers_name', 45);
			$table->string('markers_logo', 80);
			$table->string('markers_address');
			$table->float('markers_lat', 10, 0);
			$table->float('markers_lng', 10, 0);
			$table->string('markers_url', 110);
			$table->text('markers_desc', 65535);
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
		Schema::drop('markers');
	}

}
