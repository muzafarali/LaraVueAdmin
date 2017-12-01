<?php

use Illuminate\Database\Seeder;

class CrudLanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('crud_languages')->delete();
        
        \DB::table('crud_languages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'language_code' => 'en_US',
            'language_name' => 'English (United States)',
                'created_by' => 1,
                'created' => '2013-04-24 07:16:13',
                'modified_by' => 1,
                'modified' => '2013-04-30 06:34:48',
            ),
        ));
        
        
    }
}