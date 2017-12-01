<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrudComponentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crud_components', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('group_id')->nullable();
			$table->string('component_name')->nullable();
			$table->string('component_table')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crud_components');
	}

}
