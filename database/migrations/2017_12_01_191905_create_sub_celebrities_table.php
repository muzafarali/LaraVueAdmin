<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubCelebritiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sub_celebrities', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('username', 250);
			$table->string('password', 250)->nullable();
			$table->string('email', 250)->nullable();
			$table->string('user_first_name', 250)->nullable();
			$table->string('user_last_name', 250)->nullable();
			$table->string('name', 250);
			$table->string('nicknames')->nullable();
			$table->string('birth_name')->nullable();
			$table->string('relation', 50)->nullable();
			$table->string('industry', 50)->nullable();
			$table->string('birth_place', 250)->nullable();
			$table->text('bio', 65535);
			$table->text('trade_mark', 65535)->nullable();
			$table->text('details_trivia', 65535)->nullable();
			$table->text('personal_quotes', 65535)->nullable();
			$table->string('profile_pic', 250);
			$table->date('dob');
			$table->enum('gender', array('Female','Male','Other'));
			$table->string('occupation', 250);
			$table->text('rss', 65535);
			$table->string('height', 50)->nullable();
			$table->string('salary', 50)->nullable();
			$table->text('popular_searches', 65535)->nullable();
			$table->string('website', 244);
			$table->text('featured_video', 65535)->nullable();
			$table->integer('is_feature')->nullable()->default(0);
			$table->string('feature_subtitle')->nullable();
			$table->string('user_phone_number', 250)->nullable();
			$table->string('user_home_number', 250)->nullable();
			$table->string('user_address1', 250)->nullable();
			$table->string('user_url_id', 250)->nullable();
			$table->boolean('user_status')->nullable()->default(1);
			$table->timestamp('created_on')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sub_celebrities');
	}

}
