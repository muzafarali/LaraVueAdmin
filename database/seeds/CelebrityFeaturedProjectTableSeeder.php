<?php

use Illuminate\Database\Seeder;

class CelebrityFeaturedProjectTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('celebrity_featured_project')->delete();
        
        \DB::table('celebrity_featured_project')->insert(array (
            0 => 
            array (
                'id' => 1,
                'celebrity_id' => 2,
                'project_title' => 'Five littel Ducks',
                'project_description' => 'Five littel Ducks Five littel Ducks',
                'project_file' => NULL,
                'img_url' => NULL,
                'project_video' => '<iframe width="853" height="480" src="https://www.youtube.com/embed/tFoUuFq3vHw" frameborder="0" allowfullscreen></iframe>',
                'project_type' => 'video',
                'project_active' => 1,
                'created_on' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'id' => 3,
                'celebrity_id' => 3,
                'project_title' => 'Five littel Ducks',
                'project_description' => 'Five littel Ducks Five littel Ducks',
                'project_file' => 'uploads/gallery/3/1470909488.png',
                'img_url' => NULL,
                'project_video' => NULL,
                'project_type' => 'image',
                'project_active' => 1,
                'created_on' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}