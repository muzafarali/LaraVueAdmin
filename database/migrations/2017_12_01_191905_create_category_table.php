<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category', function(Blueprint $table)
		{
			$table->integer('category_id', true);
			$table->string('username', 11);
			$table->string('category_name', 50);
			$table->text('category_desc', 65535);
			$table->string('backgroundColor', 11);
			$table->string('borderColor', 11);
			$table->string('textColor', 11);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('category');
	}

}
