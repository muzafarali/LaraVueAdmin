<?php

use Illuminate\Database\Seeder;

class CrudHistoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('crud_histories')->delete();
        
        \DB::table('crud_histories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-02-17 11:02:40',
                'history_table_name' => 'crud_components',
                'history_data' => '{"component_name":"Countries","component_table":"uz_countries","id":"3"}',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-02-17 11:17:17',
                'history_table_name' => 'crud_group_components',
                'history_data' => '{"name":"Location Manager","description":"<p>Location Manager<\\/p>\\r\\n"}',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-02-17 11:17:46',
                'history_table_name' => 'crud_components',
                'history_data' => '{"component_name":"Countries","group_id":"10","component_table":"uz_countries","id":"3"}',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-02-17 11:18:15',
                'history_table_name' => 'crud_components',
                'history_data' => '{"component_name":"States","group_id":"10","component_table":"uz_regions"}',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-02-17 11:26:16',
                'history_table_name' => 'crud_components',
                'history_data' => '{"component_name":"States","group_id":"10","component_table":"uz_regions","id":"4"}',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-02-17 11:31:54',
                'history_table_name' => 'crud_components',
                'history_data' => '{"component_name":"City Manager","group_id":"10","component_table":"uz_cities"}',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-02-17 11:32:05',
                'history_table_name' => 'crud_components',
                'history_data' => '{"component_name":"States Manager","group_id":"10","component_table":"uz_regions","id":"4"}',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-02-17 11:32:18',
                'history_table_name' => 'crud_components',
                'history_data' => '{"component_name":"Countries Manager","group_id":"10","component_table":"uz_countries","id":"3"}',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-02-17 15:08:48',
                'history_table_name' => 'tbl_user',
                'history_data' => '{"user_name":"admin","user_password":"7c4a8d09ca3762af61e59520943dc26494f8941b","group_id":"1","user_email":"admin@admin.com","user_first_name":"Muzafar","user_last_name":"Ali","user_status":"1","user_info":"<p>Admin user<\\/p>\\r\\n"}',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-02-17 17:58:12',
                'history_table_name' => 'crud_components',
                'history_data' => '{"component_name":"User Subscription","component_table":"tbl_user_subscriptions"}',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-02-27 22:12:15',
                'history_table_name' => 'crud_components',
                'history_data' => '{"component_name":"Events","component_table":"events"}',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-02-27 22:47:01',
                'history_table_name' => 'events',
                'history_data' => '{"title":"Activities","category":"1","location":"120 Farnborough Rd, Farnborough, Hampshire GU14 7JH, UK","recurend":"2016-02-22","recurdays":"0","overlap":"true","rendering":"","url":"","end":"2016-01-24 00:00:00","start":"2016-01-24 00:00:00","description":"Sporting activities","textColor":"#ffffff","borderColor":"#ffffff","backgroundColor":"#0335db","modified_by":null,"modified":"2016-02-27 22:47:01","eid":"159"}',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-02-28 12:16:53',
                'history_table_name' => 'crud_group_components',
                'history_data' => '{"name":"Events","description":""}',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-02-28 12:17:13',
                'history_table_name' => 'crud_components',
                'history_data' => '{"component_name":"Events","group_id":"11","component_table":"events","id":"7"}',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-03-18 10:33:10',
                'history_table_name' => 'tbl_user',
                'history_data' => '{"user_name":"muzafarali","user_password":"7c4a8d09ca3762af61e59520943dc26494f8941b","group_id":"3","user_email":"muzafarali@swibank.com","user_first_name":"Muzafar","user_last_name":"Ali","user_status":"1","user_info":"<p>tst<\\/p>\\r\\n"}',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-03-28 09:42:41',
                'history_table_name' => 'crud_components',
                'history_data' => '{"component_name":"Advertisement","component_table":"advertisement"}',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-03-28 09:51:48',
                'history_table_name' => 'crud_components',
                'history_data' => '{"component_name":"Advertisement","component_table":"advertisement","id":"8"}',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-03-28 09:54:38',
                'history_table_name' => 'advertisement',
                'history_data' => '{"ad_name":"Adv. Banner","ad_file":"1459151667-Screen Shot 2016-01-08 at 22.20.47.png","ad_type":"2","ad_status":"1","created_by":null,"created":"2016-03-28 09:54:38"}',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-03-28 09:57:05',
                'history_table_name' => 'advertisement',
                'history_data' => '{"ad_name":"Adv. Banners","ad_file":"1459151811-originallogos2015Jul98676717775.jpg","ad_type":"2","ad_status":"1","created_by":null,"created":"2016-03-28 09:57:05"}',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-03-28 12:11:59',
                'history_table_name' => 'advertisement',
                'history_data' => '{"ad_name":"Adv. Banner","ad_file":"1459151667-Screen Shot 2016-01-08 at 22.20.47.png","ad_type":"2","ad_possition":"2","ad_status":"1","modified_by":null,"modified":"2016-03-28 12:11:59","id":"1"}',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-03-28 12:12:13',
                'history_table_name' => 'advertisement',
                'history_data' => '{"ad_name":"Adv. Banner","ad_file":"1459151667-Screen Shot 2016-01-08 at 22.20.47.png","ad_type":"2","ad_possition":"2","ad_status":"1","modified_by":null,"modified":"2016-03-28 12:12:13","id":"1"}',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-03-28 12:12:59',
                'history_table_name' => 'advertisement',
                'history_data' => '{"ad_name":"Adv. Bannerss","ad_file":"1459159975-Screen Shot 2015-12-02 at 23.26.47.png","ad_type":"3","ad_possition":"2","ad_status":"1","created_by":null,"created":"2016-03-28 12:12:59"}',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-04-01 08:22:02',
                'history_table_name' => 'crud_components',
                'history_data' => '{"component_name":"Artist Manger","component_table":"artist"}',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-04-01 09:07:41',
                'history_table_name' => 'artist',
            'history_data' => '{"artist_name":"Arianna Ohlsson","artist_des":"Singer Songwriter ","artist_pic":"1459494289-11163766_457812597700697_7270754152439476797_n.jpg","music_file":"1459494454-234 - Ji Jaun - Fall In Love Again - Farhan Saeed (ApniISP.Com).mp3","created_by":null,"created":"2016-04-01 09:07:41"}',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-04-01 09:09:50',
                'history_table_name' => 'artist',
                'history_data' => '{"artist_name":"Jai Fears","artist_des":"Pop \\/ R&B","artist_pic":"1459494583-Screen Shot 2015-12-02 at 23.26.47.png","music_file":"1459494583-Maulana Sayad Ataulla Shah Bukhari 1of2.mp3","created_by":null,"created":"2016-04-01 09:09:50"}',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-04-01 11:46:59',
                'history_table_name' => 'crud_components',
                'history_data' => '{"component_name":"Partners Manger","component_table":"partners"}',
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-04-01 11:53:50',
                'history_table_name' => 'partners',
                'history_data' => '{"name":"Post Girl","url":"http:\\/\\/poshgirl.us","file":"1459504347-originallogos2015Jul98676717775.jpg","created_by":null,"created":"2016-04-01 11:53:50"}',
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-04-01 11:55:25',
                'history_table_name' => 'partners',
                'history_data' => '{"name":"tShop","url":"http:\\/\\/tshop.com","file":"1459504520-1.gif","created_by":null,"created":"2016-04-01 11:55:25"}',
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-04-01 11:55:54',
                'history_table_name' => 'partners',
                'history_data' => '{"name":"Hakomat","url":"http:\\/\\/hakomat.com","file":"1459504550-2.png","created_by":null,"created":"2016-04-01 11:55:54"}',
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-04-01 11:56:35',
                'history_table_name' => 'partners',
                'history_data' => '{"name":"tShop","url":"http:\\/\\/tshop.com","file":"1459504573-6.png","created_by":null,"created":"2016-04-01 11:56:35"}',
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-04-01 11:56:52',
                'history_table_name' => 'partners',
                'history_data' => '{"name":"tShop","url":"http:\\/\\/tshop.com","file":"1459504609-7.png","created_by":null,"created":"2016-04-01 11:56:52"}',
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-04-01 11:57:17',
                'history_table_name' => 'partners',
                'history_data' => '{"name":"tShop","url":"http:\\/\\/tshop.com","file":"1459504632-4.png","created_by":null,"created":"2016-04-01 11:57:17"}',
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-04-01 11:57:41',
                'history_table_name' => 'partners',
                'history_data' => '{"name":"tShop","url":"http:\\/\\/tshop.com","file":"1459504658-8.png","created_by":null,"created":"2016-04-01 11:57:41"}',
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-04-01 12:01:06',
                'history_table_name' => 'partners',
                'history_data' => '{"name":"tShop","url":"http:\\/\\/tshop.com","file":"1459504864-5.png","created_by":null,"created":"2016-04-01 12:01:06"}',
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-04-01 13:16:03',
                'history_table_name' => 'artist',
            'history_data' => '{"artist_name":"Arianna Ohlsson","artist_des":"Singer Songwriter ","artist_pic":"1459494289-11163766_457812597700697_7270754152439476797_n.jpg","music_file":"1459494454-234 - Ji Jaun - Fall In Love Again - Farhan Saeed (ApniISP.Com).mp3","is_featured":"2","modified_by":null,"modified":"2016-04-01 13:16:03","id":"1"}',
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-04-01 14:53:56',
                'history_table_name' => 'advertisement',
                'history_data' => '{"ad_key":"one","ad_content":"<script type=\\"text\\/javascript\\"><!--\\r\\ngoogle_adtest = \\"on\\";         \\/\\/ new line\\r\\ngoogle_ad_client = \\"pub-0000000000000000\\";\\r\\ngoogle_alternate_color = \\"ffffff\\";\\r\\ngoogle_ad_width = 468;\\r\\ngoogle_ad_height = 60;\\r\\ngoogle_ad_format = \\"468x60_as\\";\\r\\ngoogle_ad_type = \\"text_image\\";\\r\\ngoogle_ad_channel = \\"0000000000\\";\\r\\n\\/\\/--><\\/script>\\r\\n<script type=\\"text\\/javascript\\"\\r\\n  src=\\"http:\\/\\/pagead2.googlesyndication.com\\/pagead\\/show_ads.js\\">\\r\\n<\\/script>","ad_size":"2","ad_possition":"1","modified_by":null,"modified":"2016-04-01 14:53:56","id":"1"}',
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-04-01 14:54:15',
                'history_table_name' => 'advertisement',
                'history_data' => '{"ad_key":"one","ad_content":"<script type=\\"text\\/javascript\\"><!--\\r\\ngoogle_adtest = \\"on\\";         \\/\\/ new line\\r\\ngoogle_ad_client = \\"pub-0000000000000000\\";\\r\\ngoogle_alternate_color = \\"ffffff\\";\\r\\ngoogle_ad_width = 468;\\r\\ngoogle_ad_height = 60;\\r\\ngoogle_ad_format = \\"468x60_as\\";\\r\\ngoogle_ad_type = \\"text_image\\";\\r\\ngoogle_ad_channel = \\"0000000000\\";\\r\\n\\/\\/--><\\/script>\\r\\n<script type=\\"text\\/javascript\\"\\r\\n  src=\\"http:\\/\\/pagead2.googlesyndication.com\\/pagead\\/show_ads.js\\">\\r\\n<\\/script>","ad_size":"2","ad_possition":"1","modified_by":null,"modified":"2016-04-01 14:54:15","id":"1"}',
            ),
            37 => 
            array (
                'id' => 38,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-04-01 14:58:16',
                'history_table_name' => 'advertisement',
                'history_data' => '{"ad_key":"one","ad_content":"<script type=\\"text\\/javascript\\"><!--\\r\\ngoogle_adtest = \\"on\\";         \\/\\/ new line\\r\\ngoogle_ad_client = \\"pub-0000000000000000\\";\\r\\ngoogle_alternate_color = \\"ffffff\\";\\r\\ngoogle_ad_width = 468;\\r\\ngoogle_ad_height = 60;\\r\\ngoogle_ad_format = \\"468x60_as\\";\\r\\ngoogle_ad_type = \\"text_image\\";\\r\\ngoogle_ad_channel = \\"0000000000\\";\\r\\n\\/\\/--><\\/script>\\r\\n<script type=\\"text\\/javascript\\"\\r\\n  src=\\"http:\\/\\/pagead2.googlesyndication.com\\/pagead\\/show_ads.js\\">\\r\\n<\\/script>","ad_size":"2","ad_possition":"2","modified_by":null,"modified":"2016-04-01 14:58:16","id":"1"}',
            ),
            38 => 
            array (
                'id' => 39,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-04-01 15:01:27',
                'history_table_name' => 'advertisement',
                'history_data' => '{"ad_size":"14","ad_key":"center","ad_content":"<script type=\\"text\\/javascript\\"><!--\\r\\ngoogle_adtest = \\"on\\";         \\/\\/ new line\\r\\ngoogle_ad_client = \\"pub-0000000000000000\\";\\r\\ngoogle_alternate_color = \\"ffffff\\";\\r\\ngoogle_ad_width = 728;\\r\\ngoogle_ad_height = 60;\\r\\ngoogle_ad_format = \\"728x60_as\\";\\r\\ngoogle_ad_type = \\"text_image\\";\\r\\ngoogle_ad_channel = \\"0000000000\\";\\r\\n\\/\\/--><\\/script>\\r\\n<script type=\\"text\\/javascript\\"\\r\\n  src=\\"http:\\/\\/pagead2.googlesyndication.com\\/pagead\\/show_ads.js\\">\\r\\n<\\/script>","ad_possition":"5","modified_by":null,"modified":"2016-04-01 15:01:27","id":"2"}',
            ),
            39 => 
            array (
                'id' => 40,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-04-01 15:01:55',
                'history_table_name' => 'advertisement',
                'history_data' => '{"ad_size":"3","ad_key":"three","ad_content":"<script type=\\"text\\/javascript\\"><!--\\r\\ngoogle_adtest = \\"on\\";         \\/\\/ new line\\r\\ngoogle_ad_client = \\"pub-0000000000000000\\";\\r\\ngoogle_alternate_color = \\"ffffff\\";\\r\\ngoogle_ad_width = 468;\\r\\ngoogle_ad_height = 60;\\r\\ngoogle_ad_format = \\"468x60_as\\";\\r\\ngoogle_ad_type = \\"text_image\\";\\r\\ngoogle_ad_channel = \\"0000000000\\";\\r\\n\\/\\/--><\\/script>\\r\\n<script type=\\"text\\/javascript\\"\\r\\n  src=\\"http:\\/\\/pagead2.googlesyndication.com\\/pagead\\/show_ads.js\\">\\r\\n<\\/script>","ad_possition":"5","modified_by":null,"modified":"2016-04-01 15:01:55","id":"3"}',
            ),
            40 => 
            array (
                'id' => 41,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-04-01 15:11:42',
                'history_table_name' => 'advertisement',
                'history_data' => '{"ad_size":"2","ad_key":"fourth","ad_content":"<script type=\\"text\\/javascript\\"><!--\\r\\ngoogle_adtest = \\"on\\";         \\/\\/ new line\\r\\ngoogle_ad_client = \\"pub-0000000000000000\\";\\r\\ngoogle_alternate_color = \\"ffffff\\";\\r\\ngoogle_ad_width = 300;\\r\\ngoogle_ad_height = 250;\\r\\ngoogle_ad_format = \\"300x250_as\\";\\r\\ngoogle_ad_type = \\"text_image\\";\\r\\ngoogle_ad_channel = \\"0000000000\\";\\r\\n\\/\\/--><\\/script>\\r\\n<script type=\\"text\\/javascript\\"\\r\\n  src=\\"http:\\/\\/pagead2.googlesyndication.com\\/pagead\\/show_ads.js\\">\\r\\n<\\/script>","ad_possition":"2","created_by":null,"created":"2016-04-01 15:11:42"}',
            ),
            41 => 
            array (
                'id' => 42,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-04-01 15:12:04',
                'history_table_name' => 'advertisement',
                'history_data' => '{"ad_size":"2","ad_key":"fourth_top","ad_content":"<script type=\\"text\\/javascript\\"><!--\\r\\ngoogle_adtest = \\"on\\";         \\/\\/ new line\\r\\ngoogle_ad_client = \\"pub-0000000000000000\\";\\r\\ngoogle_alternate_color = \\"ffffff\\";\\r\\ngoogle_ad_width = 300;\\r\\ngoogle_ad_height = 250;\\r\\ngoogle_ad_format = \\"300x250_as\\";\\r\\ngoogle_ad_type = \\"text_image\\";\\r\\ngoogle_ad_channel = \\"0000000000\\";\\r\\n\\/\\/--><\\/script>\\r\\n<script type=\\"text\\/javascript\\"\\r\\n  src=\\"http:\\/\\/pagead2.googlesyndication.com\\/pagead\\/show_ads.js\\">\\r\\n<\\/script>","ad_possition":"2","modified_by":null,"modified":"2016-04-01 15:12:04","id":"4"}',
            ),
            42 => 
            array (
                'id' => 43,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-04-01 15:12:32',
                'history_table_name' => 'advertisement',
                'history_data' => '{"ad_size":"2","ad_key":"fivth_bottom","ad_content":"<script type=\\"text\\/javascript\\"><!--\\r\\ngoogle_adtest = \\"on\\";         \\/\\/ new line\\r\\ngoogle_ad_client = \\"pub-0000000000000000\\";\\r\\ngoogle_alternate_color = \\"ffffff\\";\\r\\ngoogle_ad_width = 300;\\r\\ngoogle_ad_height = 250;\\r\\ngoogle_ad_format = \\"300x250_as\\";\\r\\ngoogle_ad_type = \\"text_image\\";\\r\\ngoogle_ad_channel = \\"0000000000\\";\\r\\n\\/\\/--><\\/script>\\r\\n<script type=\\"text\\/javascript\\"\\r\\n  src=\\"http:\\/\\/pagead2.googlesyndication.com\\/pagead\\/show_ads.js\\">\\r\\n<\\/script>","ad_possition":"2","created_by":null,"created":"2016-04-01 15:12:32"}',
            ),
            43 => 
            array (
                'id' => 44,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-04-01 15:19:08',
                'history_table_name' => 'advertisement',
                'history_data' => '{"ad_size":"3","ad_key":"two_top","ad_content":"<script type=\\"text\\/javascript\\"><!--\\r\\ngoogle_adtest = \\"on\\";         \\/\\/ new line\\r\\ngoogle_ad_client = \\"pub-0000000000000000\\";\\r\\ngoogle_alternate_color = \\"ffffff\\";\\r\\ngoogle_ad_width = 468;\\r\\ngoogle_ad_height = 60;\\r\\ngoogle_ad_format = \\"468x60_as\\";\\r\\ngoogle_ad_type = \\"text_image\\";\\r\\ngoogle_ad_channel = \\"0000000000\\";\\r\\n\\/\\/--><\\/script>\\r\\n<script type=\\"text\\/javascript\\"\\r\\n  src=\\"http:\\/\\/pagead2.googlesyndication.com\\/pagead\\/show_ads.js\\">\\r\\n<\\/script>","ad_possition":"3","modified_by":null,"modified":"2016-04-01 15:19:08","id":"2"}',
            ),
            44 => 
            array (
                'id' => 45,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-04-02 09:41:49',
                'history_table_name' => 'advertisement',
            'history_data' => '{"ad_size":"9","ad_key":"blew_menu","ad_content":"<script>\\r\\n  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){\\r\\n  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),\\r\\n  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)\\r\\n  })(window,document,\'script\',\'\\/\\/www.google-analytics.com\\/analytics.js\',\'ga\');\\r\\n  ga(\'create\', \'UA-75891812-1\', \'auto\');\\r\\n  ga(\'send\', \'pageview\');\\r\\n<\\/script>","ad_possition":"3","created_by":null,"created":"2016-04-02 09:41:49"}',
            ),
            45 => 
            array (
                'id' => 46,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-04-02 11:03:02',
                'history_table_name' => 'artist',
                'history_data' => '{"artist_name":"Jai Fears","artist_des":"Pop \\/ R&B","artist_pic":"1459494583-Screen Shot 2015-12-02 at 23.26.47.png","music_file":"1459494583-Maulana Sayad Ataulla Shah Bukhari 1of2.mp3","url":"","is_featured":"1","is_promoted":"1","modified_by":null,"modified":"2016-04-02 11:03:02","id":"2"}',
            ),
            46 => 
            array (
                'id' => 47,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-04-02 11:03:20',
                'history_table_name' => 'artist',
                'history_data' => '{"artist_name":"Jai Fears","artist_des":"Pop \\/ R&B","artist_pic":"1459494583-Screen Shot 2015-12-02 at 23.26.47.png","music_file":"1459494583-Maulana Sayad Ataulla Shah Bukhari 1of2.mp3","url":"","is_featured":"1","is_promoted":"2","modified_by":null,"modified":"2016-04-02 11:03:20","id":"2"}',
            ),
            47 => 
            array (
                'id' => 48,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-04-19 19:20:15',
                'history_table_name' => 'crud_groups',
                'history_data' => '{"group_name":"Celebrity","group_description":"<p>This Group for Celebrity users<\\/p>\\r\\n"}',
            ),
            48 => 
            array (
                'id' => 49,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-07-04 19:13:53',
                'history_table_name' => 'partners',
                'history_data' => '{"name":"Post Girl","url":"http:\\/\\/poshgirl.us","tier":"1","file":"1459504347-originallogos2015Jul98676717775.jpg","modified_by":null,"modified":"2016-07-04 19:13:53","id":"1"}',
            ),
            49 => 
            array (
                'id' => 50,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-07-04 19:15:45',
                'history_table_name' => 'partners',
                'history_data' => '{"name":"tShop","url":"http:\\/\\/tshop.com","tier":"1","file":"1459504520-1.gif","modified_by":null,"modified":"2016-07-04 19:15:45","id":"2"}',
            ),
            50 => 
            array (
                'id' => 51,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-07-04 19:16:26',
                'history_table_name' => 'partners',
                'history_data' => '{"name":"Post Girl","url":"http:\\/\\/poshgirl.us","tier":"1","file":"1459504347-originallogos2015Jul98676717775.jpg","modified_by":null,"modified":"2016-07-04 19:16:26","id":"1"}',
            ),
            51 => 
            array (
                'id' => 52,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-07-04 19:16:54',
                'history_table_name' => 'partners',
                'history_data' => '{"name":"tShop","url":"http:\\/\\/tshop.com","tier":"2","file":"1459504520-1.gif","modified_by":null,"modified":"2016-07-04 19:16:54","id":"2"}',
            ),
            52 => 
            array (
                'id' => 53,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-07-04 19:17:24',
                'history_table_name' => 'partners',
                'history_data' => '{"name":"Hakomat","url":"http:\\/\\/hakomat.com","tier":"3","file":"1459504550-2.png","modified_by":null,"modified":"2016-07-04 19:17:24","id":"3"}',
            ),
            53 => 
            array (
                'id' => 54,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'update',
                'history_date_time' => '2016-07-04 19:18:09',
                'history_table_name' => 'partners',
                'history_data' => '{"name":"tShop","url":"http:\\/\\/tshop.com","tier":"2","file":"1459504573-6.png","modified_by":null,"modified":"2016-07-04 19:18:09","id":"4"}',
            ),
            54 => 
            array (
                'id' => 55,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'add',
                'history_date_time' => '2016-08-15 09:43:49',
                'history_table_name' => 'crud_components',
                'history_data' => '{"component_name":"Listing","component_table":"celebrity_followers"}',
            ),
            55 => 
            array (
                'id' => 56,
                'user_id' => 0,
                'user_name' => 'admin',
                'history_action' => 'delete',
                'history_date_time' => '2016-08-15 09:46:33',
                'history_table_name' => 'crud_components',
                'history_data' => '{"id":"11","group_id":null,"component_name":"Listing","component_table":"celebrity_followers"}',
            ),
        ));
        
        
    }
}