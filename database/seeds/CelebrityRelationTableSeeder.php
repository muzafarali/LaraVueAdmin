<?php

use Illuminate\Database\Seeder;

class CelebrityRelationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('celebrity_relation')->delete();
        
        \DB::table('celebrity_relation')->insert(array (
            0 => 
            array (
                'id' => 1,
                'celebrity_id' => 8,
                'company_name' => NULL,
                'relation' => 'Celebrity Relation',
                'name' => '1f888f670eff319122873b370feabdd8',
                'email_address' => 'adminss@demo.com',
                'job_title' => NULL,
                'website' => NULL,
                'phone_number' => '03224187786',
                'second_number' => '03224187786',
                'location' => 'Lahore, Punjab Pakistan',
            ),
            1 => 
            array (
                'id' => 2,
                'celebrity_id' => 9,
                'company_name' => NULL,
                'relation' => 'Celebrity Management',
                'name' => '1f888f670eff319122873b370feabdd8',
                'email_address' => 'justinbieber@gmail.com',
                'job_title' => NULL,
                'website' => NULL,
                'phone_number' => '03224187786',
                'second_number' => '03224187786',
                'location' => 'Lahore, Punjab Pakistan',
            ),
        ));
        
        
    }
}