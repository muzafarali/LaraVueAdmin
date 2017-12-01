<?php

use Illuminate\Database\Seeder;

class TblCommentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_comment')->delete();
        
        \DB::table('tbl_comment')->insert(array (
            0 => 
            array (
                'id' => 1,
                'father' => 0,
                'create_date' => '2016-09-25 17:18:57',
                'username' => 'Muzafar Ali',
                'email_user' => 'justinbieber@gmail.com',
                'picture_user' => 'admin-comment/images/user.jpg',
                'web' => 'http://www.k.com',
                'comment' => 'here',
                'page' => 0,
                'replies' => 0,
                'active' => 'N',
                'notification' => 'N',
            ),
            1 => 
            array (
                'id' => 2,
                'father' => 0,
                'create_date' => '2016-09-25 17:23:18',
                'username' => 'Muzafar Ali',
                'email_user' => 'justinbieberss@gmail.com',
                'picture_user' => 'admin-comment/images/user.jpg',
                'web' => '',
                'comment' => 'fffffffffff',
                'page' => 0,
                'replies' => 0,
                'active' => 'N',
                'notification' => 'N',
            ),
            2 => 
            array (
                'id' => 3,
                'father' => 0,
                'create_date' => '2016-09-25 17:26:31',
                'username' => 'Muzafar Ali',
                'email_user' => 'justinbieberss@gmail.com',
                'picture_user' => 'admin-comment/images/user.jpg',
                'web' => '',
                'comment' => 'fffffffffff',
                'page' => 0,
                'replies' => 0,
                'active' => 'N',
                'notification' => 'N',
            ),
            3 => 
            array (
                'id' => 4,
                'father' => 2,
                'create_date' => '2016-09-25 17:27:09',
                'username' => 'Ali',
                'email_user' => 'ali@ali.com',
                'picture_user' => 'admin-comment/images/user.jpg',
                'web' => '',
                'comment' => 'hhhhh',
                'page' => 0,
                'replies' => 0,
                'active' => 'N',
                'notification' => 'N',
            ),
        ));
        
        
    }
}