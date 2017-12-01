<?php

use Illuminate\Database\Seeder;

class CrudUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('crud_users')->delete();
        
        \DB::table('crud_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'group_id' => 1,
                'user_name' => 'admin',
                'user_password' => '7c4a8d09ca3762af61e59520943dc26494f8941b',
                'user_email' => 'admin@demo.com',
                'user_first_name' => 'Demo',
                'user_las_name' => 'Admin ',
                'user_info' => '',
                'user_code' => NULL,
                'user_status' => 1,
                'user_manage_flag' => 0,
                'user_setting_management' => 0,
                'user_global_access' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'group_id' => 2,
                'user_name' => 'manager',
                'user_password' => '7c4a8d09ca3762af61e59520943dc26494f8941b',
                'user_email' => 'manager@demo.com',
                'user_first_name' => 'Demo',
                'user_las_name' => 'Manager',
                'user_info' => '',
                'user_code' => NULL,
                'user_status' => 1,
                'user_manage_flag' => 0,
                'user_setting_management' => 0,
                'user_global_access' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'group_id' => 3,
                'user_name' => 'user',
                'user_password' => '7c4a8d09ca3762af61e59520943dc26494f8941b',
                'user_email' => 'user@demo.com',
                'user_first_name' => 'Demo',
                'user_las_name' => 'User',
                'user_info' => '',
                'user_code' => NULL,
                'user_status' => 1,
                'user_manage_flag' => NULL,
                'user_setting_management' => NULL,
                'user_global_access' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'group_id' => 0,
                'user_name' => 'user2',
                'user_password' => '7c4a8d09ca3762af61e59520943dc26494f8941b',
                'user_email' => 'user2@demo.com',
                'user_first_name' => 'Demo',
                'user_las_name' => 'User 2',
                'user_info' => '',
                'user_code' => NULL,
                'user_status' => 1,
                'user_manage_flag' => 0,
                'user_setting_management' => 0,
                'user_global_access' => 0,
            ),
        ));
        
        
    }
}