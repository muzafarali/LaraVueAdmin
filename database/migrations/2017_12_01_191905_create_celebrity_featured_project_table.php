<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCelebrityFeaturedProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('celebrity_featured_project', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('celebrity_id');
			$table->string('project_title')->nullable();
			$table->text('project_description', 65535)->nullable();
			$table->string('project_file')->nullable();
			$table->string('img_url')->nullable();
			$table->text('project_video', 65535)->nullable();
			$table->enum('project_type', array('image','video'))->nullable()->default('image');
			$table->bigInteger('project_active')->nullable()->default(0);
			$table->dateTime('created_on')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('celebrity_featured_project');
	}

}
