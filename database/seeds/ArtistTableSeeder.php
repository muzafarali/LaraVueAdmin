<?php

use Illuminate\Database\Seeder;

class ArtistTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('artist')->delete();
        
        \DB::table('artist')->insert(array (
            0 => 
            array (
                'id' => 1,
                'artist_name' => 'Arianna Ohlsson',
                'artist_des' => 'Singer Songwriter ',
            'music_file' => '1459494454-234 - Ji Jaun - Fall In Love Again - Farhan Saeed (ApniISP.Com).mp3',
                'artist_pic' => '1459494289-11163766_457812597700697_7270754152439476797_n.jpg',
                'url' => NULL,
                'is_featured' => 2,
                'is_promoted' => 1,
                'is_promoted2' => 1,
                'created_by' => NULL,
                'created' => '2016-04-01 09:07:41',
                'modified_by' => NULL,
                'modified' => '2016-04-01 13:16:03',
            ),
            1 => 
            array (
                'id' => 2,
                'artist_name' => 'Jai Fears',
                'artist_des' => 'Pop / R&B',
                'music_file' => '1459494583-Maulana Sayad Ataulla Shah Bukhari 1of2.mp3',
                'artist_pic' => '1459494583-Screen Shot 2015-12-02 at 23.26.47.png',
                'url' => '',
                'is_featured' => 1,
                'is_promoted' => 2,
                'is_promoted2' => 1,
                'created_by' => NULL,
                'created' => '2016-04-01 09:09:50',
                'modified_by' => NULL,
                'modified' => '2016-04-02 11:03:20',
            ),
        ));
        
        
    }
}