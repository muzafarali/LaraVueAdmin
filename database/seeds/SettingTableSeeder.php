<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('setting')->delete();
        
        \DB::table('setting')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'site_name',
                'value' => 'Event Calendar',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'site_logo',
                'value' => 'logo.png',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'site_email',
                'value' => 'info@mycelebwatch.com',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'site_timezone',
                'value' => 'America/Jamaica',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'site_language',
                'value' => 'en',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'site_latitude',
                'value' => '18.473790323586805',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'site_longitude',
                'value' => '-77.92278243655392',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'meta_description',
                'value' => 'CIFullCalendar v2 is a server-side dynamic web application that is responsive to any layout of a viewing screen. The “Super Saiyan Fusion” power of CIFullCalendar allows users to organize, plan and share events to everyone.',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'meta_keywords',
                'value' => 'cifullcalendar, agenda, meeting, personal organizer, fullcalendar, codeigniter, jquery, scheduler, cms, maps, location',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'current_theme',
                'value' => 'bootlaces',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'captcha_verification',
                'value' => '1',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'debug',
                'value' => '1',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'profile_max_upload_width',
                'value' => '1200',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'profile_max_upload_height',
                'value' => '1200',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'profile_max_upload_filesize',
                'value' => '25000',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'profile_allowed_extensions',
                'value' => 'gif|jpg|png',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'attach_max_size',
                'value' => '150096',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'attach_allowed_extension',
                'value' => 'gif|jpg|png|docx|pptx|ppt|xls|accdb|psd|txt|pdf|zip|ics',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'sync_max_size',
                'value' => '4096',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'sync_allowed_extension',
                'value' => 'ics|ical',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'sync_path_location',
                'value' => './assets/ics/',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'cal_defaultview',
                'value' => 'month',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'cal_header_left',
                'value' => 'month,agendaWeek,agendaDay,list',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'cal_header_center',
                'value' => 'title',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'cal_header_right',
                'value' => 'prev,next,today',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'cal_editable',
                'value' => 'true',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'cal_isrtl',
                'value' => 'false',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'cal_weeknumbers',
                'value' => 'false',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'cal_eventlimit',
                'value' => 'true',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'cal_alldayslot',
                'value' => 'true',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'cal_hiddendays',
                'value' => '',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'cal_slotduration',
                'value' => '00:30:00',
            ),
            32 => 
            array (
                'id' => 34,
                'name' => 'cal_firstday',
                'value' => '1',
            ),
            33 => 
            array (
                'id' => 36,
                'name' => 'cal_businessdays',
                'value' => '1,2,3,4,5',
            ),
            34 => 
            array (
                'id' => 37,
                'name' => 'cal_businessstart',
                'value' => '09:50',
            ),
            35 => 
            array (
                'id' => 38,
                'name' => 'cal_businessend',
                'value' => '17:30',
            ),
            36 => 
            array (
                'id' => 39,
                'name' => 'cal_aspectratio',
                'value' => '1.35',
            ),
            37 => 
            array (
                'id' => 40,
                'name' => 'cal_slotlabeling',
                'value' => 'true',
            ),
            38 => 
            array (
                'id' => 41,
                'name' => 'current_version',
                'value' => '2.5.6.8',
            ),
        ));
        
        
    }
}