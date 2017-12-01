<?php

use Illuminate\Database\Seeder;

class MarkersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('markers')->delete();
        
        \DB::table('markers')->insert(array (
            0 => 
            array (
                'markers_id' => 17,
                'markers_category_id' => 31,
                'event_id' => 3315756,
                'username' => 'admin',
                'markers_name' => 'Activities',
                'markers_logo' => 'pin3.png',
                'markers_address' => '2 Allée Clemenceau, 33260 La Teste-de-Buch, France',
                'markers_lat' => 44.631077,
                'markers_lng' => -1.1482240000000274,
                'markers_url' => 'http://www.sirdre.com',
                'markers_desc' => 'Sporting activities',
                'pubDate' => '2016-01-30 08:58:54',
            ),
            1 => 
            array (
                'markers_id' => 18,
                'markers_category_id' => 31,
                'event_id' => 9896065,
                'username' => 'admin',
                'markers_name' => 'Activities',
                'markers_logo' => 'pin3.png',
                'markers_address' => '120 Farnborough Rd, Farnborough, Hampshire GU14 7JH, UK',
                'markers_lat' => 51.2868939,
                'markers_lng' => -0.7526149999999916,
                'markers_url' => '',
                'markers_desc' => 'Sporting activities',
                'pubDate' => '2016-01-30 08:57:42',
            ),
            2 => 
            array (
                'markers_id' => 19,
                'markers_category_id' => 35,
                'event_id' => 6658387,
                'username' => 'user',
                'markers_name' => 'Installations',
                'markers_logo' => 'pin3.png',
                'markers_address' => '3501-3599 N 18th St, Tampa, FL 33605, USA',
                'markers_lat' => 27.975754219134895,
                'markers_lng' => -82.43860506250007,
                'markers_url' => '',
                'markers_desc' => 'Building installations',
                'pubDate' => '2016-01-19 02:17:26',
            ),
            3 => 
            array (
                'markers_id' => 20,
                'markers_category_id' => 34,
                'event_id' => 3272545,
                'username' => 'user',
                'markers_name' => 'Meeting',
                'markers_logo' => 'pin3.png',
                'markers_address' => '3000 N 29th Ct, Hollywood, FL 33020, USA',
                'markers_lat' => 26.037040108888945,
                'markers_lng' => -80.16701006127943,
                'markers_url' => '',
                'markers_desc' => 'Business Meeting',
                'pubDate' => '2016-01-19 02:16:14',
            ),
            4 => 
            array (
                'markers_id' => 21,
                'markers_category_id' => 16,
                'event_id' => 8746338,
                'username' => 'user',
                'markers_name' => 'Sports',
                'markers_logo' => 'pin3.png',
                'markers_address' => '',
                'markers_lat' => 0.0,
                'markers_lng' => 0.0,
                'markers_url' => '',
                'markers_desc' => 'Sporting activities',
                'pubDate' => '2016-01-19 02:16:39',
            ),
            5 => 
            array (
                'markers_id' => 22,
                'markers_category_id' => 28,
                'event_id' => 431942,
                'username' => 'admin',
                'markers_name' => 'Hours',
                'markers_logo' => 'pin3.png',
                'markers_address' => '2518 Jackson St, Hollywood, FL 33020, USA',
                'markers_lat' => 26.008039491000538,
                'markers_lng' => -80.15774034692396,
                'markers_url' => '',
                'markers_desc' => 'Daily hours',
                'pubDate' => '2016-01-30 08:57:08',
            ),
            6 => 
            array (
                'markers_id' => 23,
                'markers_category_id' => 17,
                'event_id' => 862839,
                'username' => 'admin',
                'markers_name' => 'Meeting',
                'markers_logo' => 'pin3.png',
                'markers_address' => 'Romsey Rd, Stockbridge, Hampshire SO20 6PT, UK',
                'markers_lat' => 51.06784487972957,
                'markers_lng' => -1.50237924999999,
                'markers_url' => '',
                'markers_desc' => 'All my business meeting',
                'pubDate' => '2016-01-30 08:57:56',
            ),
            7 => 
            array (
                'markers_id' => 25,
                'markers_category_id' => 28,
                'event_id' => 7259236,
                'username' => 'admin',
                'markers_name' => 'Hours',
                'markers_logo' => 'pin3.png',
                'markers_address' => 'New York City Hall, New York, NY 10007, USA',
                'markers_lat' => 40.7127837,
                'markers_lng' => -74.00594130000002,
                'markers_url' => 'http://sirdre.com',
                'markers_desc' => 'Daily hours',
                'pubDate' => '2016-02-12 05:06:15',
            ),
            8 => 
            array (
                'markers_id' => 26,
                'markers_category_id' => 0,
                'event_id' => 173,
                'username' => 'admin',
                'markers_name' => 'Hourss',
                'markers_logo' => 'pin3.png',
                'markers_address' => '2518 Jackson St, Hollywood, FL 33020, USA',
                'markers_lat' => 26.008039491000538,
                'markers_lng' => -80.15774034692396,
                'markers_url' => '',
                'markers_desc' => 'Daily hours',
                'pubDate' => '2016-02-28 21:26:24',
            ),
            9 => 
            array (
                'markers_id' => 29,
                'markers_category_id' => 34,
                'event_id' => 32981064,
                'username' => 'admin',
                'markers_name' => 'Entrega de Practicas Testing',
                'markers_logo' => 'pin2.png',
                'markers_address' => '132 Allama Iqbal Rd, Lahore, Pakistan',
                'markers_lat' => 31.55460609999999,
                'markers_lng' => 74.35715809999999,
                'markers_url' => 'http://hakomat.com',
                'markers_desc' => 'Entrega de Practicas Testing',
                'pubDate' => '2016-03-03 17:53:27',
            ),
            10 => 
            array (
                'markers_id' => 31,
                'markers_category_id' => 16,
                'event_id' => 4513826,
                'username' => 'admin',
                'markers_name' => 'Entrega de Practicas Testing',
                'markers_logo' => 'pin2.png',
                'markers_address' => '132 Allama Iqbal Rd, Lahore, Pakistan',
                'markers_lat' => 31.55460609999999,
                'markers_lng' => 74.35715809999999,
                'markers_url' => 'http://hakomat.com',
                'markers_desc' => 'Entrega de Practicas Testing',
                'pubDate' => '2016-03-03 17:58:24',
            ),
            11 => 
            array (
                'markers_id' => 35,
                'markers_category_id' => 17,
                'event_id' => 9813547,
                'username' => 'admin',
                'markers_name' => 'Sports',
                'markers_logo' => 'pin2.png',
                'markers_address' => '132 Allama Iqbal Rd, Lahore, Pakistan',
                'markers_lat' => 31.55460609999999,
                'markers_lng' => 74.35715809999999,
                'markers_url' => 'http://hakomat.com',
                'markers_desc' => 'dfsa',
                'pubDate' => '2016-03-03 22:25:08',
            ),
            12 => 
            array (
                'markers_id' => 36,
                'markers_category_id' => 16,
                'event_id' => 3258964,
                'username' => 'admin',
                'markers_name' => 'Meeting',
                'markers_logo' => 'pin3.png',
                'markers_address' => '132 Allama Iqbal Rd, Lahore, Pakistan',
                'markers_lat' => 31.55460609999999,
                'markers_lng' => 74.35715809999999,
                'markers_url' => 'http://hakomat.com',
                'markers_desc' => 'All my business meeting',
                'pubDate' => '2016-03-04 12:14:44',
            ),
            13 => 
            array (
                'markers_id' => 37,
                'markers_category_id' => 16,
                'event_id' => 3459176,
                'username' => 'admin',
                'markers_name' => 'Sports',
                'markers_logo' => 'pin3.png',
                'markers_address' => '',
                'markers_lat' => 0.0,
                'markers_lng' => 0.0,
                'markers_url' => '',
                'markers_desc' => 'Sporting activities',
                'pubDate' => '2016-03-04 12:35:00',
            ),
            14 => 
            array (
                'markers_id' => 38,
                'markers_category_id' => 16,
                'event_id' => 3178490,
                'username' => 'admin',
                'markers_name' => 'Sports',
                'markers_logo' => 'pin3.png',
                'markers_address' => '',
                'markers_lat' => 0.0,
                'markers_lng' => 0.0,
                'markers_url' => 'http://hakomat.com',
                'markers_desc' => 'Sporting activities',
                'pubDate' => '2016-03-09 18:00:28',
            ),
            15 => 
            array (
                'markers_id' => 39,
                'markers_category_id' => 34,
                'event_id' => 2043867,
                'username' => 'admin',
                'markers_name' => 'Meeting',
                'markers_logo' => 'pin3.png',
                'markers_address' => '',
                'markers_lat' => 0.0,
                'markers_lng' => 0.0,
                'markers_url' => 'http://hakomat.com',
                'markers_desc' => 'Business Meeting',
                'pubDate' => '2016-03-09 18:00:49',
            ),
            16 => 
            array (
                'markers_id' => 40,
                'markers_category_id' => 16,
                'event_id' => 6132495,
                'username' => 'admin',
                'markers_name' => 'Sports',
                'markers_logo' => 'pin3.png',
                'markers_address' => '132 Allama Iqbal Rd, Lahore, Pakistan',
                'markers_lat' => 31.55460609999999,
                'markers_lng' => 74.35715809999999,
                'markers_url' => 'http://hakomat.com',
                'markers_desc' => 'Sporting activities',
                'pubDate' => '2016-06-17 14:47:34',
            ),
            17 => 
            array (
                'markers_id' => 41,
                'markers_category_id' => 16,
                'event_id' => 45280716,
                'username' => 'admin',
                'markers_name' => 'Jennifer lopez',
                'markers_logo' => 'pin2.png',
                'markers_address' => 'Lahore Bypass, Kala Shah Kaku, Pakistan',
                'markers_lat' => 31.69831069999999,
                'markers_lng' => 74.27232300000003,
                'markers_url' => 'http://hakomat.com',
                'markers_desc' => 'Jennifer lopezJennifer lopezJennifer lopezJennifer lopezJennifer lopezJennifer lopezJennifer lopezJennifer lopezJennifer lopez',
                'pubDate' => '2016-06-17 15:02:02',
            ),
            18 => 
            array (
                'markers_id' => 42,
                'markers_category_id' => 16,
                'event_id' => 8596723,
                'username' => 'admin',
                'markers_name' => 'Sports',
                'markers_logo' => 'pin2.png',
                'markers_address' => '204-582 LA-1182, Plaucheville, LA 71362, USA',
                'markers_lat' => 30.9842977,
                'markers_lng' => -91.96233269999999,
                'markers_url' => 'http://hakomat.com',
                'markers_desc' => 'SportsSportsSportsSportsSportsSportsSports',
                'pubDate' => '2016-06-17 15:04:00',
            ),
            19 => 
            array (
                'markers_id' => 43,
                'markers_category_id' => 16,
                'event_id' => 61085379,
                'username' => 'admin',
                'markers_name' => 'Jennifer lopezs',
                'markers_logo' => 'pin2.png',
                'markers_address' => '424-522 World Way, Los Angeles, CA 90045, USA',
                'markers_lat' => 33.9415889,
                'markers_lng' => -118.40852999999998,
                'markers_url' => 'http://hakomat.com',
                'markers_desc' => 'Jennifer lopezs Jennifer lopezs Jennifer lopezs Jennifer lopezs Jennifer lopezs Jennifer lopezs Jennifer lopezs Jennifer lopezs Jennifer lopezs Jennifer lopezs Jennifer lopezs Jennifer lopezs Jennifer lopezs Jennifer lopezs Jennifer lopezs Jennifer lopezs Jennifer lopezs',
                'pubDate' => '2016-06-17 15:07:39',
            ),
        ));
        
        
    }
}