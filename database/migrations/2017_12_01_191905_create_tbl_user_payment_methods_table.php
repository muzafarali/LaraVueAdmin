<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblUserPaymentMethodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_user_payment_methods', function(Blueprint $table)
		{
			$table->integer('card_id', true);
			$table->integer('fk_user_id')->nullable();
			$table->integer('fk_country_id')->nullable();
			$table->integer('fk_country_state_id')->nullable();
			$table->integer('fk_country_state_city_id')->nullable();
			$table->string('set_as', 45)->nullable();
			$table->string('card_stripe_id')->nullable();
			$table->string('card_type', 110)->nullable();
			$table->string('card_name')->nullable();
			$table->string('card_number', 55)->nullable();
			$table->string('exp_month', 45)->nullable();
			$table->string('exp_year', 45)->nullable();
			$table->string('card_cvv', 15)->nullable();
			$table->string('user_address1')->nullable();
			$table->string('user_address2')->nullable();
			$table->string('user_zipcode', 55)->nullable();
			$table->string('user_phone_number', 45)->nullable();
			$table->string('payment_type', 45)->nullable();
			$table->string('paypal_email')->nullable();
			$table->string('paypal_name')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_user_payment_methods');
	}

}
