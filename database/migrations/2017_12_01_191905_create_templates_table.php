<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('templates', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('types', 150);
			$table->string('subject')->nullable();
			$table->text('body', 65535);
			$table->timestamp('pubdate')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('templates');
	}

}
