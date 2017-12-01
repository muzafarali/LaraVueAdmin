<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrudGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crud_groups', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('group_name')->nullable();
			$table->text('group_description', 65535)->nullable();
			$table->boolean('group_manage_flag')->nullable();
			$table->boolean('group_setting_management')->nullable();
			$table->boolean('group_global_access')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crud_groups');
	}

}
