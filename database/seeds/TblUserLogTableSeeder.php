<?php

use Illuminate\Database\Seeder;

class TblUserLogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_user_log')->delete();
        
        \DB::table('tbl_user_log')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 114,
                'model_name' => 'Stripe Charge',
                'description' => 'Stripe Charge created',
                'amount' => '$50',
                'created' => '2016-01-30 16:08:19',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 114,
                'model_name' => 'Stripe Subscription',
                'description' => 'Stripe Subscription created',
                'amount' => '$50',
                'created' => '2016-01-30 16:08:11',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 114,
                'model_name' => 'Stripe Charge',
                'description' => 'Stripe Charge created',
                'amount' => '$50',
                'created' => '2016-02-01 06:02:43',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 114,
                'model_name' => 'Stripe Subscription',
                'description' => 'Stripe Subscription created',
                'amount' => '$50',
                'created' => '2016-02-01 06:02:08',
            ),
        ));
        
        
    }
}