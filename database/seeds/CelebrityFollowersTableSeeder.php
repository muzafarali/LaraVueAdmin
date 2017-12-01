<?php

use Illuminate\Database\Seeder;

class CelebrityFollowersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('celebrity_followers')->delete();
        
        \DB::table('celebrity_followers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'celebrity_id' => 2,
                'user_id' => 114,
                'type' => 'unfollow',
                'created_on' => '2016-09-01 12:44:08',
                'created_by' => NULL,
                'created' => NULL,
                'modified_by' => NULL,
                'modified' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'celebrity_id' => 3,
                'user_id' => 114,
                'type' => 'follow',
                'created_on' => '2016-09-01 09:44:02',
                'created_by' => NULL,
                'created' => NULL,
                'modified_by' => NULL,
                'modified' => NULL,
            ),
        ));
        
        
    }
}