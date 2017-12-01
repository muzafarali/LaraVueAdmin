<?php

use Illuminate\Database\Seeder;

class CrudComponentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('crud_components')->delete();
        
        \DB::table('crud_components')->insert(array (
            0 => 
            array (
                'id' => 1,
                'group_id' => 3,
                'component_name' => 'Categories',
                'component_table' => 'categories',
            ),
            1 => 
            array (
                'id' => 2,
                'group_id' => 3,
                'component_name' => 'Articles',
                'component_table' => 'articles',
            ),
            2 => 
            array (
                'id' => 3,
                'group_id' => 10,
                'component_name' => 'Countries Manager',
                'component_table' => 'uz_countries',
            ),
            3 => 
            array (
                'id' => 4,
                'group_id' => 10,
                'component_name' => 'States Manager',
                'component_table' => 'uz_regions',
            ),
            4 => 
            array (
                'id' => 5,
                'group_id' => 10,
                'component_name' => 'City Manager',
                'component_table' => 'uz_cities',
            ),
            5 => 
            array (
                'id' => 6,
                'group_id' => NULL,
                'component_name' => 'User Subscription',
                'component_table' => 'tbl_user_subscriptions',
            ),
            6 => 
            array (
                'id' => 7,
                'group_id' => 11,
                'component_name' => 'Events',
                'component_table' => 'events',
            ),
            7 => 
            array (
                'id' => 8,
                'group_id' => NULL,
                'component_name' => 'Advertisement',
                'component_table' => 'advertisement',
            ),
            8 => 
            array (
                'id' => 9,
                'group_id' => NULL,
                'component_name' => 'Artist Manger',
                'component_table' => 'artist',
            ),
            9 => 
            array (
                'id' => 10,
                'group_id' => NULL,
                'component_name' => 'Partners Manger',
                'component_table' => 'partners',
            ),
        ));
        
        
    }
}