<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category')->delete();
        
        \DB::table('category')->insert(array (
            0 => 
            array (
                'category_id' => 16,
                'username' => 'user',
                'category_name' => 'Sports',
                'category_desc' => 'Sporting activities',
                'backgroundColor' => '#db044f',
                'borderColor' => '#ffffff',
                'textColor' => '#ffffff',
            ),
            1 => 
            array (
                'category_id' => 17,
                'username' => 'admin',
                'category_name' => 'Meeting',
                'category_desc' => 'All my business meeting',
                'backgroundColor' => '#73db04',
                'borderColor' => '#ffffff',
                'textColor' => '#ffffff',
            ),
            2 => 
            array (
                'category_id' => 28,
                'username' => 'admin',
                'category_name' => 'Hours',
                'category_desc' => 'Daily hours',
                'backgroundColor' => '#05b0dc',
                'borderColor' => '#ffffff',
                'textColor' => '#ffffff',
            ),
            3 => 
            array (
                'category_id' => 31,
                'username' => 'admin',
                'category_name' => 'Activities',
                'category_desc' => 'Sporting activities',
                'backgroundColor' => '#0335db',
                'borderColor' => '#ffffff',
                'textColor' => '#ffffff',
            ),
            4 => 
            array (
                'category_id' => 34,
                'username' => 'user',
                'category_name' => 'Meeting',
                'category_desc' => 'Business Meeting',
                'backgroundColor' => '#2fdb04',
                'borderColor' => '#ffffff',
                'textColor' => '#ffffff',
            ),
            5 => 
            array (
                'category_id' => 35,
                'username' => 'user',
                'category_name' => 'Installations',
                'category_desc' => 'Building installations',
                'backgroundColor' => '#dba204',
                'borderColor' => '#ff0000',
                'textColor' => '#ffffff',
            ),
        ));
        
        
    }
}