<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrudPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crud_permissions', function(Blueprint $table)
		{
			$table->bigInteger('group_id');
			$table->bigInteger('com_id');
			$table->boolean('permission_type');
			$table->primary(['group_id','com_id','permission_type']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crud_permissions');
	}

}
