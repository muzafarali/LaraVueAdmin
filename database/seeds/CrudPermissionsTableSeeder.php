<?php

use Illuminate\Database\Seeder;

class CrudPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('crud_permissions')->delete();
        
        \DB::table('crud_permissions')->insert(array (
            0 => 
            array (
                'group_id' => 1,
                'com_id' => 1,
                'permission_type' => 1,
            ),
            1 => 
            array (
                'group_id' => 1,
                'com_id' => 1,
                'permission_type' => 2,
            ),
            2 => 
            array (
                'group_id' => 1,
                'com_id' => 1,
                'permission_type' => 3,
            ),
            3 => 
            array (
                'group_id' => 1,
                'com_id' => 1,
                'permission_type' => 4,
            ),
            4 => 
            array (
                'group_id' => 1,
                'com_id' => 1,
                'permission_type' => 5,
            ),
            5 => 
            array (
                'group_id' => 1,
                'com_id' => 2,
                'permission_type' => 1,
            ),
            6 => 
            array (
                'group_id' => 1,
                'com_id' => 2,
                'permission_type' => 2,
            ),
            7 => 
            array (
                'group_id' => 1,
                'com_id' => 2,
                'permission_type' => 3,
            ),
            8 => 
            array (
                'group_id' => 1,
                'com_id' => 2,
                'permission_type' => 4,
            ),
            9 => 
            array (
                'group_id' => 1,
                'com_id' => 2,
                'permission_type' => 5,
            ),
            10 => 
            array (
                'group_id' => 1,
                'com_id' => 3,
                'permission_type' => 1,
            ),
            11 => 
            array (
                'group_id' => 1,
                'com_id' => 3,
                'permission_type' => 2,
            ),
            12 => 
            array (
                'group_id' => 1,
                'com_id' => 3,
                'permission_type' => 3,
            ),
            13 => 
            array (
                'group_id' => 1,
                'com_id' => 3,
                'permission_type' => 4,
            ),
            14 => 
            array (
                'group_id' => 1,
                'com_id' => 3,
                'permission_type' => 5,
            ),
            15 => 
            array (
                'group_id' => 1,
                'com_id' => 4,
                'permission_type' => 1,
            ),
            16 => 
            array (
                'group_id' => 1,
                'com_id' => 4,
                'permission_type' => 2,
            ),
            17 => 
            array (
                'group_id' => 1,
                'com_id' => 4,
                'permission_type' => 3,
            ),
            18 => 
            array (
                'group_id' => 1,
                'com_id' => 4,
                'permission_type' => 4,
            ),
            19 => 
            array (
                'group_id' => 1,
                'com_id' => 4,
                'permission_type' => 5,
            ),
            20 => 
            array (
                'group_id' => 1,
                'com_id' => 5,
                'permission_type' => 1,
            ),
            21 => 
            array (
                'group_id' => 1,
                'com_id' => 5,
                'permission_type' => 2,
            ),
            22 => 
            array (
                'group_id' => 1,
                'com_id' => 5,
                'permission_type' => 3,
            ),
            23 => 
            array (
                'group_id' => 1,
                'com_id' => 5,
                'permission_type' => 4,
            ),
            24 => 
            array (
                'group_id' => 1,
                'com_id' => 5,
                'permission_type' => 5,
            ),
            25 => 
            array (
                'group_id' => 1,
                'com_id' => 6,
                'permission_type' => 1,
            ),
            26 => 
            array (
                'group_id' => 1,
                'com_id' => 6,
                'permission_type' => 2,
            ),
            27 => 
            array (
                'group_id' => 1,
                'com_id' => 6,
                'permission_type' => 3,
            ),
            28 => 
            array (
                'group_id' => 1,
                'com_id' => 6,
                'permission_type' => 4,
            ),
            29 => 
            array (
                'group_id' => 1,
                'com_id' => 6,
                'permission_type' => 5,
            ),
            30 => 
            array (
                'group_id' => 1,
                'com_id' => 7,
                'permission_type' => 1,
            ),
            31 => 
            array (
                'group_id' => 1,
                'com_id' => 7,
                'permission_type' => 2,
            ),
            32 => 
            array (
                'group_id' => 1,
                'com_id' => 7,
                'permission_type' => 3,
            ),
            33 => 
            array (
                'group_id' => 1,
                'com_id' => 7,
                'permission_type' => 4,
            ),
            34 => 
            array (
                'group_id' => 1,
                'com_id' => 7,
                'permission_type' => 5,
            ),
            35 => 
            array (
                'group_id' => 1,
                'com_id' => 8,
                'permission_type' => 1,
            ),
            36 => 
            array (
                'group_id' => 1,
                'com_id' => 8,
                'permission_type' => 2,
            ),
            37 => 
            array (
                'group_id' => 1,
                'com_id' => 8,
                'permission_type' => 3,
            ),
            38 => 
            array (
                'group_id' => 1,
                'com_id' => 8,
                'permission_type' => 4,
            ),
            39 => 
            array (
                'group_id' => 1,
                'com_id' => 8,
                'permission_type' => 5,
            ),
            40 => 
            array (
                'group_id' => 1,
                'com_id' => 9,
                'permission_type' => 1,
            ),
            41 => 
            array (
                'group_id' => 1,
                'com_id' => 9,
                'permission_type' => 2,
            ),
            42 => 
            array (
                'group_id' => 1,
                'com_id' => 9,
                'permission_type' => 3,
            ),
            43 => 
            array (
                'group_id' => 1,
                'com_id' => 9,
                'permission_type' => 4,
            ),
            44 => 
            array (
                'group_id' => 1,
                'com_id' => 9,
                'permission_type' => 5,
            ),
            45 => 
            array (
                'group_id' => 1,
                'com_id' => 10,
                'permission_type' => 1,
            ),
            46 => 
            array (
                'group_id' => 1,
                'com_id' => 10,
                'permission_type' => 2,
            ),
            47 => 
            array (
                'group_id' => 1,
                'com_id' => 10,
                'permission_type' => 3,
            ),
            48 => 
            array (
                'group_id' => 1,
                'com_id' => 10,
                'permission_type' => 4,
            ),
            49 => 
            array (
                'group_id' => 1,
                'com_id' => 10,
                'permission_type' => 5,
            ),
            50 => 
            array (
                'group_id' => 1,
                'com_id' => 11,
                'permission_type' => 1,
            ),
            51 => 
            array (
                'group_id' => 1,
                'com_id' => 11,
                'permission_type' => 2,
            ),
            52 => 
            array (
                'group_id' => 1,
                'com_id' => 11,
                'permission_type' => 3,
            ),
            53 => 
            array (
                'group_id' => 1,
                'com_id' => 11,
                'permission_type' => 4,
            ),
            54 => 
            array (
                'group_id' => 1,
                'com_id' => 11,
                'permission_type' => 5,
            ),
            55 => 
            array (
                'group_id' => 2,
                'com_id' => 1,
                'permission_type' => 1,
            ),
            56 => 
            array (
                'group_id' => 2,
                'com_id' => 1,
                'permission_type' => 2,
            ),
            57 => 
            array (
                'group_id' => 2,
                'com_id' => 1,
                'permission_type' => 3,
            ),
            58 => 
            array (
                'group_id' => 2,
                'com_id' => 1,
                'permission_type' => 4,
            ),
            59 => 
            array (
                'group_id' => 2,
                'com_id' => 1,
                'permission_type' => 5,
            ),
            60 => 
            array (
                'group_id' => 2,
                'com_id' => 2,
                'permission_type' => 1,
            ),
            61 => 
            array (
                'group_id' => 2,
                'com_id' => 2,
                'permission_type' => 2,
            ),
            62 => 
            array (
                'group_id' => 2,
                'com_id' => 2,
                'permission_type' => 3,
            ),
            63 => 
            array (
                'group_id' => 2,
                'com_id' => 2,
                'permission_type' => 4,
            ),
            64 => 
            array (
                'group_id' => 2,
                'com_id' => 2,
                'permission_type' => 5,
            ),
            65 => 
            array (
                'group_id' => 2,
                'com_id' => 3,
                'permission_type' => 1,
            ),
            66 => 
            array (
                'group_id' => 2,
                'com_id' => 3,
                'permission_type' => 2,
            ),
            67 => 
            array (
                'group_id' => 2,
                'com_id' => 3,
                'permission_type' => 3,
            ),
            68 => 
            array (
                'group_id' => 2,
                'com_id' => 3,
                'permission_type' => 4,
            ),
            69 => 
            array (
                'group_id' => 2,
                'com_id' => 3,
                'permission_type' => 5,
            ),
            70 => 
            array (
                'group_id' => 2,
                'com_id' => 4,
                'permission_type' => 1,
            ),
            71 => 
            array (
                'group_id' => 2,
                'com_id' => 4,
                'permission_type' => 2,
            ),
            72 => 
            array (
                'group_id' => 2,
                'com_id' => 4,
                'permission_type' => 3,
            ),
            73 => 
            array (
                'group_id' => 2,
                'com_id' => 4,
                'permission_type' => 4,
            ),
            74 => 
            array (
                'group_id' => 2,
                'com_id' => 4,
                'permission_type' => 5,
            ),
            75 => 
            array (
                'group_id' => 2,
                'com_id' => 5,
                'permission_type' => 1,
            ),
            76 => 
            array (
                'group_id' => 2,
                'com_id' => 5,
                'permission_type' => 2,
            ),
            77 => 
            array (
                'group_id' => 2,
                'com_id' => 5,
                'permission_type' => 3,
            ),
            78 => 
            array (
                'group_id' => 2,
                'com_id' => 5,
                'permission_type' => 4,
            ),
            79 => 
            array (
                'group_id' => 2,
                'com_id' => 5,
                'permission_type' => 5,
            ),
            80 => 
            array (
                'group_id' => 3,
                'com_id' => 1,
                'permission_type' => 4,
            ),
            81 => 
            array (
                'group_id' => 3,
                'com_id' => 1,
                'permission_type' => 5,
            ),
            82 => 
            array (
                'group_id' => 3,
                'com_id' => 2,
                'permission_type' => 4,
            ),
            83 => 
            array (
                'group_id' => 3,
                'com_id' => 2,
                'permission_type' => 5,
            ),
        ));
        
        
    }
}