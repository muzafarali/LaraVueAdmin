<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'uname' => 'admin',
                'title' => 'About us',
                'seo' => 'about-us',
            'content' => '<p><span>&nbsp;</span><span style="color: rgb(85, 85, 85); font-family: \'PT Sans\', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 30px;">CIFullCalendar+ is a server-side dynamic web application that is responsive to any layout of a viewing screen. The “Super Saiyan Fusion” power of CIFullCalendar allows users to organize, plan and share events to everyone. Simply, install it to your server and become a member then use the wonderful features by easily manipulating your events by dragging, dropping, resizing, clicking, touching, categorizing, linking and importing/exporting.</span></p>',
                'meta_keywords' => 'ci2fullcalendar2, ci2fc2, calendar, about us',
                'meta_description' => 'CIFullCalendar v2 gives you the Super Saiyan Fusion power of organizing, controlling and sharing your events',
                'access' => 0,
                'pubdates' => '2015-09-25 17:03:33',
            ),
        ));
        
        
    }
}