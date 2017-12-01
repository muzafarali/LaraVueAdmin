<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCelebritiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('celebrities', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id');
			$table->string('name', 250);
			$table->string('nicknames')->nullable();
			$table->string('birth_name')->nullable();
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
			$table->text('featured_video', 65535)->nullable();
			$table->text('ads_block_1', 65535)->nullable();
			$table->text('ads_block_2', 65535)->nullable();
			$table->text('ads_block_3', 65535)->nullable();
			$table->text('ads_block_4', 65535)->nullable();
			$table->integer('ads1_banner_type')->nullable();
			$table->integer('ads2_banner_type')->nullable();
			$table->integer('ads3_banner_type')->nullable();
			$table->integer('ads4_banner_type')->nullable();
			$table->string('ads1_userfile', 250)->nullable();
			$table->string('ads2_userfile', 250)->nullable();
			$table->string('ads3_userfile', 250)->nullable();
			$table->string('ads4_userfile', 250)->nullable();
			$table->string('ads_banner_link_1')->nullable();
			$table->string('ads_banner_link_2')->nullable();
			$table->string('ads_banner_link_3')->nullable();
			$table->string('ads_banner_link_4')->nullable();
			$table->integer('is_feature')->nullable()->default(0);
			$table->string('feature_subtitle')->nullable();
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
		Schema::drop('celebrities');
	}

}
