<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCommentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_comment', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('father');
			$table->timestamp('create_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('username', 50);
			$table->string('email_user', 50);
			$table->string('picture_user', 100);
			$table->string('web', 50)->nullable();
			$table->text('comment', 65535);
			$table->integer('page');
			$table->integer('replies');
			$table->enum('active', array('Y','N'))->default('N');
			$table->enum('notification', array('Y','N'))->default('N');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_comment');
	}

}
