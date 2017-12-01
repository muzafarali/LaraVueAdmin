<?php

use Illuminate\Database\Seeder;

class SubEventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sub_events')->delete();
        
        \DB::table('sub_events')->insert(array (
            0 => 
            array (
                'id' => 1,
                'celebrity_id' => 9,
                'event_name' => 'Muzafar Ali',
                'event_detail' => '$postData',
                'event_date' => '2017-01-04',
                'start_date' => '2017-01-04 05:01:00',
                'end_date' => '2017-01-04 07:01:00',
                'location' => 'Lahore, Punjab Pakistan',
                'website' => 'http://www.hakomat.com',
                'link' => 'abc901156b57082c486be23896c0f566',
                'event_file' => 'uploads/events/01-2017/1483532231.pdf',
                'created' => '0000-00-00 00:00:00',
                'modified' => NULL,
            ),
        ));
        
        
    }
}