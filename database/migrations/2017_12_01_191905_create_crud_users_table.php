<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrudUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crud_users', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('group_id')->nullable();
			$table->string('user_name')->nullable();
			$table->string('user_password', 100)->nullable();
			$table->string('user_email')->nullable();
			$table->string('user_first_name')->nullable();
			$table->string('user_las_name')->nullable();
			$table->text('user_info', 65535)->nullable();
			$table->string('user_code')->nullable();
			$table->boolean('user_status')->nullable()->default(0);
			$table->boolean('user_manage_flag')->nullable();
			$table->boolean('user_setting_management')->nullable();
			$table->boolean('user_global_access')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crud_users');
	}

}
