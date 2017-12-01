<?php

use Illuminate\Database\Seeder;

class EventsqueuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('eventsqueues')->delete();
        
        \DB::table('eventsqueues')->insert(array (
            0 => 
            array (
                'eid' => 1,
                'gid' => 0,
                'id' => 173,
                'category' => 0,
                'username' => 'admin',
                'title' => 'Hourss',
                'backgroundColor' => '#05b0dc',
                'borderColor' => '#ffffff',
                'textColor' => '#ffffff',
                'description' => 'Daily hours',
                'start' => '2016-01-22 08:00:00',
                'end' => '2016-01-22 18:00:00',
                'url' => '',
                'allDay' => 'false',
                'rendering' => '',
                'overlap' => 'true',
                'recurdays' => 0,
                'recurend' => '0000-00-00',
                'location' => '2518 Jackson St, Hollywood, FL 33020, USA',
                'latitude' => 26.008039491000538,
                'longitude' => -80.15774034692396,
                'filename' => '',
                'pubDate' => '2016-02-28 21:26:24',
            ),
        ));
        
        
    }
}