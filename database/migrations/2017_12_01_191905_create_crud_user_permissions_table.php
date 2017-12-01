<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrudUserPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crud_user_permissions', function(Blueprint $table)
		{
			$table->bigInteger('user_id');
			$table->bigInteger('com_id');
			$table->boolean('permission_type');
			$table->primary(['user_id','com_id','permission_type']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crud_user_permissions');
	}

}
