<?php

use Illuminate\Database\Seeder;

class EventsourcesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('eventsources')->delete();
        
        \DB::table('eventsources')->insert(array (
            0 => 
            array (
                'source_id' => 7,
                'username' => 'user',
                'source_name' => 'Canadian Holidays',
                'source_url' => 'http://www.google.com/calendar/feeds/canadian__en@holiday.calendar.google.com/public/basic',
            ),
            1 => 
            array (
                'source_id' => 8,
                'username' => 'admin',
                'source_name' => 'JM Holidays',
                'source_url' => 'http://www.google.com/calendar/feeds/jm__en@holiday.calendar.google.com/public/basic',
            ),
            2 => 
            array (
                'source_id' => 9,
                'username' => 'admin',
                'source_name' => 'user profile',
                'source_url' => 'http://www.cifullcalendar.com/v3/home/ujson/user',
            ),
            3 => 
            array (
                'source_id' => 10,
                'username' => 'user',
                'source_name' => 'Jamaican Holidays',
                'source_url' => 'jm__en@holiday.calendar.google.com',
            ),
            4 => 
            array (
                'source_id' => 11,
                'username' => 'user',
                'source_name' => 'Shared GCal',
                'source_url' => 'necb6q98eqdql2oa0qnl6delig@group.calendar.google.com',
            ),
        ));
        
        
    }
}