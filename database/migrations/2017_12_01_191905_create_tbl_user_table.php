<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_user', function(Blueprint $table)
		{
			$table->integer('user_id', true);
			$table->bigInteger('group_id')->nullable();
			$table->string('user_stripe')->nullable();
			$table->string('user_phone_number', 45)->nullable();
			$table->date('user_date_of_birth')->nullable();
			$table->string('user_gender', 45)->nullable();
			$table->text('user_hear_about_site', 65535)->nullable();
			$table->string('user_profile_picture')->nullable();
			$table->text('user_favourite_celebrity', 65535)->nullable();
			$table->text('user_favourite_artist', 65535)->nullable();
			$table->text('user_favourite_movie', 65535)->nullable();
			$table->text('user_favourite_tv_show', 65535)->nullable();
			$table->text('user_anything_else_wants_to_share', 65535)->nullable();
			$table->dateTime('user_created_date_time')->nullable();
			$table->string('user_first_name', 100)->nullable();
			$table->string('user_last_name', 100)->nullable();
			$table->string('user_name', 200);
			$table->string('user_email')->nullable();
			$table->string('user_password')->nullable();
			$table->text('user_info', 65535)->nullable();
			$table->string('user_code')->nullable();
			$table->boolean('user_status')->nullable()->default(0);
			$table->string('fk_country_id', 11)->nullable();
			$table->string('fk_country_state_id', 11)->nullable();
			$table->integer('fk_country_state_city_id')->nullable();
			$table->string('user_url_id')->nullable();
			$table->string('user_language', 45)->nullable();
			$table->string('user_address1')->nullable();
			$table->string('user_address2')->nullable();
			$table->string('user_home_number', 100)->nullable();
			$table->string('user_zipcode', 45)->nullable();
			$table->boolean('user_manage_flag')->nullable();
			$table->boolean('user_setting_management')->nullable();
			$table->boolean('user_global_access')->nullable();
			$table->string('cal_timezone', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_user');
	}

}
