<?php

use Illuminate\Database\Seeder;

class TblUserPaymentMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_user_payment_methods')->delete();
        
        \DB::table('tbl_user_payment_methods')->insert(array (
            0 => 
            array (
                'card_id' => 1,
                'fk_user_id' => 114,
                'fk_country_id' => 166,
                'fk_country_state_id' => 2728,
                'fk_country_state_city_id' => 31439,
                'set_as' => 'Backup',
                'card_stripe_id' => NULL,
                'card_type' => 'Visa',
                'card_name' => 'Muzafar Ali',
                'card_number' => '4242424242424242',
                'exp_month' => '1',
                'exp_year' => '2017',
                'card_cvv' => '458',
                'user_address1' => 'pakparks',
                'user_address2' => 'marghzar',
                'user_zipcode' => '54000',
                'user_phone_number' => '+923224187786',
                'payment_type' => 'card',
                'paypal_email' => NULL,
                'paypal_name' => NULL,
            ),
            1 => 
            array (
                'card_id' => 2,
                'fk_user_id' => 114,
                'fk_country_id' => 166,
                'fk_country_state_id' => 2728,
                'fk_country_state_city_id' => 31439,
                'set_as' => 'Backup',
                'card_stripe_id' => NULL,
                'card_type' => 'Master card',
                'card_name' => 'Ezan',
                'card_number' => '123456789125478',
                'exp_month' => '2',
                'exp_year' => '2017',
                'card_cvv' => '4866',
                'user_address1' => 'pakpark',
                'user_address2' => 'marghzar',
                'user_zipcode' => '54000',
                'user_phone_number' => '+923224187786',
                'payment_type' => 'card',
                'paypal_email' => NULL,
                'paypal_name' => NULL,
            ),
            2 => 
            array (
                'card_id' => 3,
                'fk_user_id' => 114,
                'fk_country_id' => 166,
                'fk_country_state_id' => 2728,
                'fk_country_state_city_id' => 31439,
                'set_as' => 'Backup',
                'card_stripe_id' => NULL,
                'card_type' => NULL,
                'card_name' => NULL,
                'card_number' => NULL,
                'exp_month' => NULL,
                'exp_year' => NULL,
                'card_cvv' => NULL,
                'user_address1' => 'pakpark',
                'user_address2' => 'marghzar',
                'user_zipcode' => '54000',
                'user_phone_number' => '+923224187786',
                'payment_type' => 'paypal',
                'paypal_email' => 'muzafar.ibrahim@gmail.com',
                'paypal_name' => 'Muzafar Ali',
            ),
            3 => 
            array (
                'card_id' => 4,
                'fk_user_id' => 114,
                'fk_country_id' => 166,
                'fk_country_state_id' => 2728,
                'fk_country_state_city_id' => 31439,
                'set_as' => 'Backup',
                'card_stripe_id' => NULL,
                'card_type' => 'Master card',
                'card_name' => 'Muzafar Ali',
                'card_number' => '5555555555554444',
                'exp_month' => '5',
                'exp_year' => '2017',
                'card_cvv' => '546',
                'user_address1' => 'pakpark',
                'user_address2' => 'marghzar',
                'user_zipcode' => '54000',
                'user_phone_number' => '+923224187786',
                'payment_type' => 'card',
                'paypal_email' => NULL,
                'paypal_name' => NULL,
            ),
            4 => 
            array (
                'card_id' => 5,
                'fk_user_id' => 114,
                'fk_country_id' => 166,
                'fk_country_state_id' => 2728,
                'fk_country_state_city_id' => 31439,
                'set_as' => 'Backup',
                'card_stripe_id' => 'card_17XGnTGRkPrD91eZgomakdUz',
                'card_type' => 'Master card',
                'card_name' => 'Muzafar Ali',
                'card_number' => '371449635398431',
                'exp_month' => '2',
                'exp_year' => '2017',
                'card_cvv' => '258',
                'user_address1' => 'pakpark',
                'user_address2' => 'marghzar',
                'user_zipcode' => '54000',
                'user_phone_number' => '+923224187786',
                'payment_type' => 'card',
                'paypal_email' => NULL,
                'paypal_name' => NULL,
            ),
            5 => 
            array (
                'card_id' => 6,
                'fk_user_id' => 114,
                'fk_country_id' => 166,
                'fk_country_state_id' => 2728,
                'fk_country_state_city_id' => 31439,
                'set_as' => 'Backup',
                'card_stripe_id' => 'card_17aWShGRkPrD91eZiWLCUnHq',
                'card_type' => 'Master card',
                'card_name' => 'Muzafar Ali',
                'card_number' => '4012888888881881',
                'exp_month' => '1',
                'exp_year' => '2018',
                'card_cvv' => '487',
                'user_address1' => 'pakpark',
                'user_address2' => 'marghzar',
                'user_zipcode' => '54000',
                'user_phone_number' => '+923224187786',
                'payment_type' => 'card',
                'paypal_email' => NULL,
                'paypal_name' => NULL,
            ),
            6 => 
            array (
                'card_id' => 7,
                'fk_user_id' => 114,
                'fk_country_id' => 166,
                'fk_country_state_id' => 2728,
                'fk_country_state_city_id' => 31439,
                'set_as' => 'Primary',
                'card_stripe_id' => 'card_17aWa1GRkPrD91eZKR0jX37q',
                'card_type' => 'Discover Card',
                'card_name' => 'Muzafar Ali',
                'card_number' => '6011111111111117',
                'exp_month' => '2',
                'exp_year' => '2017',
                'card_cvv' => '457',
                'user_address1' => 'pakpark',
                'user_address2' => 'marghzar',
                'user_zipcode' => '54000',
                'user_phone_number' => '+923224187786',
                'payment_type' => 'card',
                'paypal_email' => NULL,
                'paypal_name' => NULL,
            ),
        ));
        
        
    }
}