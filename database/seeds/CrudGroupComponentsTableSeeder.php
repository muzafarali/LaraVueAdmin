<?php

use Illuminate\Database\Seeder;

class CrudGroupComponentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('crud_group_components')->delete();
        
        \DB::table('crud_group_components')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Article Manager',
                'description' => '<p>Article Manager</p>
',
            ),
            1 => 
            array (
                'id' => 10,
                'name' => 'Location Manager',
                'description' => '<p>Location Manager</p>
',
            ),
            2 => 
            array (
                'id' => 11,
                'name' => 'Events',
                'description' => '',
            ),
        ));
        
        
    }
}