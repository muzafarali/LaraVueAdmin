<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblUserSubscriptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_user_subscriptions', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->nullable();
			$table->string('subscription_key')->nullable();
			$table->enum('subscription_type', array('Stripe','PayPal'))->nullable();
			$table->enum('type', array('Subscription','Charge'))->nullable();
			$table->dateTime('created')->nullable();
			$table->bigInteger('created_by')->nullable();
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
		Schema::drop('tbl_user_subscriptions');
	}

}
