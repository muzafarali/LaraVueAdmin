<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('uname', 25);
			$table->string('title', 150);
			$table->string('seo', 150);
			$table->text('content', 65535);
			$table->string('meta_keywords', 150);
			$table->string('meta_description', 150);
			$table->integer('access');
			$table->timestamp('pubdates')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pages');
	}

}
