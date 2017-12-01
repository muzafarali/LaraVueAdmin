<?php

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('partners')->delete();
        
        \DB::table('partners')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Post Girl',
                'file' => '1459504347-originallogos2015Jul98676717775.jpg',
                'url' => 'http://poshgirl.us',
                'tier' => 1,
                'created_by' => NULL,
                'created' => '2016-04-01 11:53:50',
                'modified_by' => NULL,
                'modified' => '2016-07-04 19:16:26',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'tShop',
                'file' => '1459504520-1.gif',
                'url' => 'http://tshop.com',
                'tier' => 2,
                'created_by' => NULL,
                'created' => '2016-04-01 11:55:25',
                'modified_by' => NULL,
                'modified' => '2016-07-04 19:16:54',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Hakomat',
                'file' => '1459504550-2.png',
                'url' => 'http://hakomat.com',
                'tier' => 3,
                'created_by' => NULL,
                'created' => '2016-04-01 11:55:54',
                'modified_by' => NULL,
                'modified' => '2016-07-04 19:17:24',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'tShop',
                'file' => '1459504573-6.png',
                'url' => 'http://tshop.com',
                'tier' => 2,
                'created_by' => NULL,
                'created' => '2016-04-01 11:56:35',
                'modified_by' => NULL,
                'modified' => '2016-07-04 19:18:09',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'tShop',
                'file' => '1459504609-7.png',
                'url' => 'http://tshop.com',
                'tier' => NULL,
                'created_by' => NULL,
                'created' => '2016-04-01 11:56:52',
                'modified_by' => NULL,
                'modified' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'tShop',
                'file' => '1459504632-4.png',
                'url' => 'http://tshop.com',
                'tier' => NULL,
                'created_by' => NULL,
                'created' => '2016-04-01 11:57:17',
                'modified_by' => NULL,
                'modified' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'tShop',
                'file' => '1459504658-8.png',
                'url' => 'http://tshop.com',
                'tier' => NULL,
                'created_by' => NULL,
                'created' => '2016-04-01 11:57:41',
                'modified_by' => NULL,
                'modified' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'tShop',
                'file' => '1459504864-5.png',
                'url' => 'http://tshop.com',
                'tier' => NULL,
                'created_by' => NULL,
                'created' => '2016-04-01 12:01:06',
                'modified_by' => NULL,
                'modified' => NULL,
            ),
        ));
        
        
    }
}