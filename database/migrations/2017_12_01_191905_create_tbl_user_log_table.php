<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblUserLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_user_log', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->nullable();
			$table->string('model_name')->nullable();
			$table->string('description')->nullable();
			$table->string('amount', 100)->nullable();
			$table->dateTime('created')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_user_log');
	}

}
