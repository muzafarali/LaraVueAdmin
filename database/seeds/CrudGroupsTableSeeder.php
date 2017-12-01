<?php

use Illuminate\Database\Seeder;

class CrudGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('crud_groups')->delete();
        
        \DB::table('crud_groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'group_name' => 'Administrators',
                'group_description' => NULL,
                'group_manage_flag' => 3,
                'group_setting_management' => 1,
                'group_global_access' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'group_name' => 'Manager',
                'group_description' => '',
                'group_manage_flag' => 0,
                'group_setting_management' => 1,
                'group_global_access' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'group_name' => 'Users',
                'group_description' => NULL,
                'group_manage_flag' => 0,
                'group_setting_management' => 0,
                'group_global_access' => 0,
            ),
            3 => 
            array (
                'id' => 5,
                'group_name' => 'Celebrity',
                'group_description' => '<p>This Group for Celebrity users</p>
',
                'group_manage_flag' => 0,
                'group_setting_management' => 1,
                'group_global_access' => 0,
            ),
        ));
        
        
    }
}