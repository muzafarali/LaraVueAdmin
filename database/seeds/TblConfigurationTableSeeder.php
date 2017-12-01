<?php

use Illuminate\Database\Seeder;

class TblConfigurationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_configuration')->delete();
        
        \DB::table('tbl_configuration')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user' => 'muzafar.ibrahim@gmail.com',
                'pass' => '$2a$08$WJ3bgAykW7kq3mR7qphd5uRVGBFw77dlfE8K73sS0S2DcUqWJDD.C',
                'alert_email' => 'Y',
                'add_url' => 'Y',
                'add_capcha' => 'Y',
                'color' => 'F84545',
                'hover_color' => 'F96A6A',
                'color_line' => 'AAA',
                'color_back' => 'FFF',
                'color_text' => '000',
                'color_inside_comment' => 'FFF',
                'icon' => 'N',
                'send_email' => 'muzafar.ibrahim@gmail.com',
                'alias_email' => 'Cool comment',
                'response_notification' => 'Y',
                'active_comments' => 'N',
                'active_facebook' => 'Y',
                'language' => 'en',
                'timezone' => 'Europe/Berlin',
            ),
        ));
        
        
    }
}