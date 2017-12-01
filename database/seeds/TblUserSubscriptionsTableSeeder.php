<?php

use Illuminate\Database\Seeder;

class TblUserSubscriptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_user_subscriptions')->delete();
        
        \DB::table('tbl_user_subscriptions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 114,
                'subscription_key' => 'ch_17XXmCGRkPrD91eZjHZiXyIE',
                'subscription_type' => 'Stripe',
                'type' => 'Charge',
                'created' => '0000-00-00 00:00:00',
                'created_by' => NULL,
                'modified_by' => NULL,
                'modified' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 114,
                'subscription_key' => 'sub_7n98eKeO3zUOlC',
                'subscription_type' => 'Stripe',
                'type' => 'Subscription',
                'created' => '0000-00-00 00:00:00',
                'created_by' => NULL,
                'modified_by' => NULL,
                'modified' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 114,
                'subscription_key' => 'ch_17ZaaHGRkPrD91eZw1I9Zhqu',
                'subscription_type' => 'Stripe',
                'type' => 'Charge',
                'created' => '2016-02-01 06:02:43',
                'created_by' => NULL,
                'modified_by' => NULL,
                'modified' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 114,
                'subscription_key' => 'sub_7pF8ybcXzLeYeK',
                'subscription_type' => 'Stripe',
                'type' => 'Subscription',
                'created' => '2016-02-01 06:02:08',
                'created_by' => NULL,
                'modified_by' => NULL,
                'modified' => NULL,
            ),
        ));
        
        
    }
}