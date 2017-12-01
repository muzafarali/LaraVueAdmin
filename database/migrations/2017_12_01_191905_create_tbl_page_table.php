<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblPageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_page', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->timestamp('create_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('name_page', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_page');
	}

}
