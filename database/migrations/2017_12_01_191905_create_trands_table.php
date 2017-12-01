<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrandsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trands', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('trands_title')->nullable();
			$table->string('trands_url')->nullable();
			$table->string('trands_views')->nullable();
			$table->bigInteger('is_promoted')->nullable()->default(1);
			$table->string('promoted_by')->nullable();
			$table->bigInteger('trands_sort')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trands');
	}

}
