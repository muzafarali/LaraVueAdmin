<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblConfigurationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_configuration', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('user', 50);
			$table->text('pass');
			$table->enum('alert_email', array('Y','N'))->default('N');
			$table->enum('add_url', array('Y','N'))->default('N');
			$table->enum('add_capcha', array('Y','N'))->default('N');
			$table->string('color', 10);
			$table->string('hover_color', 10);
			$table->string('color_line', 10);
			$table->string('color_back', 10);
			$table->string('color_text', 10);
			$table->string('color_inside_comment', 10);
			$table->string('icon', 50);
			$table->string('send_email', 50);
			$table->string('alias_email', 50);
			$table->enum('response_notification', array('Y','N'))->default('N');
			$table->enum('active_comments', array('Y','N'))->default('N');
			$table->enum('active_facebook', array('Y','N'))->default('N');
			$table->string('language', 10);
			$table->string('timezone', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_configuration');
	}

}
