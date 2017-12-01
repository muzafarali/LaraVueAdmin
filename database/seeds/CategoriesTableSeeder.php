<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_name' => 'General',
                'category_description' => 'Description here<br>',
                'created_by' => NULL,
                'created' => NULL,
                'modified_by' => NULL,
                'modified' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_name' => 'News',
                'category_description' => 'Description here<br>',
                'created_by' => NULL,
                'created' => NULL,
                'modified_by' => NULL,
                'modified' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'category_name' => 'Business',
                'category_description' => 'Description here<br>',
                'created_by' => NULL,
                'created' => NULL,
                'modified_by' => NULL,
                'modified' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'category_name' => 'Sport',
                'category_description' => 'Description here<br><br>',
                'created_by' => NULL,
                'created' => NULL,
                'modified_by' => NULL,
                'modified' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'category_name' => 'Entertainment',
                'category_description' => 'Description here<br>',
                'created_by' => NULL,
                'created' => NULL,
                'modified_by' => NULL,
                'modified' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'category_name' => 'Technology',
                'category_description' => 'Description here<br>',
                'created_by' => NULL,
                'created' => NULL,
                'modified_by' => NULL,
                'modified' => NULL,
            ),
        ));
        
        
    }
}