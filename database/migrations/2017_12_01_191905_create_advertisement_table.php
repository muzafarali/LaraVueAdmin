<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdvertisementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('advertisement', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('ad_size', 50);
			$table->text('ad_content', 65535);
			$table->string('ad_key', 250)->default('0');
			$table->enum('ad_possition', array('Left','Right','Top','Bottom','Center','Header','Fotter'))->default('Right');
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
		Schema::drop('advertisement');
	}

}
