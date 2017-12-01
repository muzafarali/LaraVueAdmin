<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('article_title')->nullable();
			$table->bigInteger('category_id')->nullable();
			$table->date('article_date')->nullable();
			$table->text('article_summary', 65535)->nullable();
			$table->text('article_content', 16777215)->nullable();
			$table->bigInteger('is_featured')->default(0);
			$table->bigInteger('is_main_featured')->nullable()->default(1);
			$table->bigInteger('created_by')->nullable();
			$table->dateTime('created')->nullable();
			$table->bigInteger('modified_by')->nullable();
			$table->dateTime('modified')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}
