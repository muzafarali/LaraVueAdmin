<?php

use Illuminate\Database\Seeder;

class AdvertisementTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('advertisement')->delete();
        
        \DB::table('advertisement')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ad_size' => '2',
                'ad_content' => '<script type="text/javascript"><!--
google_adtest = "on";         // new line
google_ad_client = "pub-0000000000000000";
google_alternate_color = "ffffff";
google_ad_width = 468;
google_ad_height = 60;
google_ad_format = "468x60_as";
google_ad_type = "text_image";
google_ad_channel = "0000000000";
//--></script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>',
                'ad_key' => 'one',
                'ad_possition' => 'Right',
                'created_by' => NULL,
                'created' => '2016-03-28 09:54:38',
                'modified_by' => NULL,
                'modified' => '2016-04-01 14:58:16',
            ),
            1 => 
            array (
                'id' => 2,
                'ad_size' => '3',
                'ad_content' => '<script type="text/javascript"><!--
google_adtest = "on";         // new line
google_ad_client = "pub-0000000000000000";
google_alternate_color = "ffffff";
google_ad_width = 468;
google_ad_height = 60;
google_ad_format = "468x60_as";
google_ad_type = "text_image";
google_ad_channel = "0000000000";
//--></script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>',
                'ad_key' => 'two_top',
                'ad_possition' => 'Top',
                'created_by' => NULL,
                'created' => '2016-03-28 09:57:05',
                'modified_by' => NULL,
                'modified' => '2016-04-01 15:19:08',
            ),
            2 => 
            array (
                'id' => 3,
                'ad_size' => '3',
                'ad_content' => '<script type="text/javascript"><!--
google_adtest = "on";         // new line
google_ad_client = "pub-0000000000000000";
google_alternate_color = "ffffff";
google_ad_width = 468;
google_ad_height = 60;
google_ad_format = "468x60_as";
google_ad_type = "text_image";
google_ad_channel = "0000000000";
//--></script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>',
                'ad_key' => 'three',
                'ad_possition' => 'Center',
                'created_by' => NULL,
                'created' => '2016-03-28 12:12:59',
                'modified_by' => NULL,
                'modified' => '2016-04-01 15:01:55',
            ),
            3 => 
            array (
                'id' => 4,
                'ad_size' => '2',
                'ad_content' => '<script type="text/javascript"><!--
google_adtest = "on";         // new line
google_ad_client = "pub-0000000000000000";
google_alternate_color = "ffffff";
google_ad_width = 300;
google_ad_height = 250;
google_ad_format = "300x250_as";
google_ad_type = "text_image";
google_ad_channel = "0000000000";
//--></script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>',
                'ad_key' => 'fourth_top',
                'ad_possition' => 'Right',
                'created_by' => NULL,
                'created' => '2016-04-01 15:11:42',
                'modified_by' => NULL,
                'modified' => '2016-04-01 15:12:04',
            ),
            4 => 
            array (
                'id' => 5,
                'ad_size' => '2',
                'ad_content' => '<script type="text/javascript"><!--
google_adtest = "on";         // new line
google_ad_client = "pub-0000000000000000";
google_alternate_color = "ffffff";
google_ad_width = 300;
google_ad_height = 250;
google_ad_format = "300x250_as";
google_ad_type = "text_image";
google_ad_channel = "0000000000";
//--></script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>',
                'ad_key' => 'fivth_bottom',
                'ad_possition' => 'Right',
                'created_by' => NULL,
                'created' => '2016-04-01 15:12:32',
                'modified_by' => NULL,
                'modified' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'ad_size' => '9',
                'ad_content' => '<script>
(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');
ga(\'create\', \'UA-75891812-1\', \'auto\');
ga(\'send\', \'pageview\');
</script>',
                'ad_key' => 'blew_menu',
                'ad_possition' => 'Top',
                'created_by' => NULL,
                'created' => '2016-04-02 09:41:49',
                'modified_by' => NULL,
                'modified' => NULL,
            ),
        ));
        
        
    }
}