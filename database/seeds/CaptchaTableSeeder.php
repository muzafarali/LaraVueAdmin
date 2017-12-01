<?php

use Illuminate\Database\Seeder;

class CaptchaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('captcha')->delete();
        
        \DB::table('captcha')->insert(array (
            0 => 
            array (
                'captcha_id' => 8,
                'captcha_time' => 1443196718,
                'ip_address' => '::1',
                'word' => '57336274',
            ),
            1 => 
            array (
                'captcha_id' => 9,
                'captcha_time' => 1443196744,
                'ip_address' => '::1',
                'word' => '94258592',
            ),
            2 => 
            array (
                'captcha_id' => 10,
                'captcha_time' => 1443466130,
                'ip_address' => '::1',
                'word' => '57936550',
            ),
            3 => 
            array (
                'captcha_id' => 11,
                'captcha_time' => 1452487481,
                'ip_address' => '::1',
                'word' => '98090308',
            ),
            4 => 
            array (
                'captcha_id' => 12,
                'captcha_time' => 1455239716,
                'ip_address' => '::1',
                'word' => '08394920',
            ),
        ));
        
        
    }
}