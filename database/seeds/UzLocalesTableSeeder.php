<?php

use Illuminate\Database\Seeder;

class UzLocalesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('uz_locales')->delete();
        
        \DB::table('uz_locales')->insert(array (
            0 => 
            array (
                'locale' => 'ar_SA',
                'name' => 'Arabic',
                'fullname' => '',
            ),
            1 => 
            array (
                'locale' => 'bg_BG',
                'name' => 'Bulgarian',
                'fullname' => '',
            ),
            2 => 
            array (
                'locale' => 'cs_CZ',
                'name' => 'Czech',
                'fullname' => '',
            ),
            3 => 
            array (
                'locale' => 'da_DK',
                'name' => 'Danish',
                'fullname' => '',
            ),
            4 => 
            array (
                'locale' => 'de_DE',
                'name' => 'German',
                'fullname' => '',
            ),
            5 => 
            array (
                'locale' => 'el_GR',
                'name' => 'Greek',
                'fullname' => '',
            ),
            6 => 
            array (
                'locale' => 'en_GB',
            'name' => 'English (United Kingdom)',
                'fullname' => '',
            ),
            7 => 
            array (
                'locale' => 'en_US',
            'name' => 'English (United States)',
                'fullname' => '',
            ),
            8 => 
            array (
                'locale' => 'es_ES',
                'name' => 'Spanish',
                'fullname' => '',
            ),
            9 => 
            array (
                'locale' => 'fi_FI',
                'name' => 'Finnish',
                'fullname' => '',
            ),
            10 => 
            array (
                'locale' => 'fr_FR',
                'name' => 'French',
                'fullname' => '',
            ),
            11 => 
            array (
                'locale' => 'hr_HR',
                'name' => 'Croatian',
                'fullname' => '',
            ),
            12 => 
            array (
                'locale' => 'hu_HU',
                'name' => 'Hungarian',
                'fullname' => '',
            ),
            13 => 
            array (
                'locale' => 'it_IT',
                'name' => 'Italian',
                'fullname' => '',
            ),
            14 => 
            array (
                'locale' => 'iw_IL',
                'name' => 'Hebrew',
                'fullname' => '',
            ),
            15 => 
            array (
                'locale' => 'ja_JP',
                'name' => 'Japanese',
                'fullname' => '',
            ),
            16 => 
            array (
                'locale' => 'ko_KR',
                'name' => 'Korean',
                'fullname' => '',
            ),
            17 => 
            array (
                'locale' => 'nl_NL',
                'name' => 'Dutch',
                'fullname' => '',
            ),
            18 => 
            array (
                'locale' => 'nn_NO',
                'name' => 'Norwegian',
                'fullname' => '',
            ),
            19 => 
            array (
                'locale' => 'pl_PL',
                'name' => 'Polish',
                'fullname' => '',
            ),
            20 => 
            array (
                'locale' => 'pt_BR',
            'name' => 'Portuguese (Brazil)',
                'fullname' => '',
            ),
            21 => 
            array (
                'locale' => 'pt_PT',
                'name' => 'Portuguese',
                'fullname' => '',
            ),
            22 => 
            array (
                'locale' => 'ro_RO',
                'name' => 'Romanian',
                'fullname' => '',
            ),
            23 => 
            array (
                'locale' => 'ru_RU',
                'name' => 'Russian',
                'fullname' => '',
            ),
            24 => 
            array (
                'locale' => 'sk_SK',
                'name' => 'Slovak',
                'fullname' => '',
            ),
            25 => 
            array (
                'locale' => 'sv_SE',
                'name' => 'Swedish',
                'fullname' => '',
            ),
            26 => 
            array (
                'locale' => 'tr_TR',
                'name' => 'Turkish',
                'fullname' => '',
            ),
            27 => 
            array (
                'locale' => 'zh_CN',
            'name' => 'Chinese (China)',
                'fullname' => '',
            ),
            28 => 
            array (
                'locale' => 'zh_TW',
            'name' => 'Chinese (Taiwan)',
                'fullname' => '',
            ),
        ));
        
        
    }
}