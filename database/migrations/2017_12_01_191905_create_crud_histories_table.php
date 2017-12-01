<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrudHistoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crud_histories', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('user_id');
			$table->string('user_name');
			$table->string('history_action')->nullable();
			$table->dateTime('history_date_time')->nullable();
			$table->string('history_table_name')->nullable();
			$table->text('history_data', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crud_histories');
	}

}
