<?php

use Illuminate\Database\Seeder;

class CrudUserPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('crud_user_permissions')->delete();
        
        \DB::table('crud_user_permissions')->insert(array (
            0 => 
            array (
                'user_id' => 4,
                'com_id' => 3,
                'permission_type' => 1,
            ),
            1 => 
            array (
                'user_id' => 4,
                'com_id' => 3,
                'permission_type' => 2,
            ),
            2 => 
            array (
                'user_id' => 4,
                'com_id' => 3,
                'permission_type' => 3,
            ),
            3 => 
            array (
                'user_id' => 4,
                'com_id' => 3,
                'permission_type' => 4,
            ),
        ));
        
        
    }
}