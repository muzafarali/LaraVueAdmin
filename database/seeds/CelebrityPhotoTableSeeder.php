<?php

use Illuminate\Database\Seeder;

class CelebrityPhotoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('celebrity_photo')->delete();
        
        \DB::table('celebrity_photo')->insert(array (
            0 => 
            array (
                'id' => 6,
                'celebrity_id' => 4,
                'photo_location' => 'Lahore, Punjab Pakistan',
                'photo_title' => 'Contact Page',
                'photo_description' => 'hmmmmm',
                'photo_file' => 'uploads/gallery/4/1466343279.jpg',
                'imgclass' => 'mega-entry cat-all cat-two cat-one',
                'sort' => '1',
                'created_on' => '2016-06-19 18:41:15',
            ),
            1 => 
            array (
                'id' => 7,
                'celebrity_id' => 4,
                'photo_location' => 'Lahore, Punjab Pakistan',
                'photo_title' => 'Category Empty Collection',
                'photo_description' => 'hmmmmm',
                'photo_file' => 'uploads/gallery/4/1466343299.jpg',
                'imgclass' => 'mega-entry cat-all cat-three cat-two',
                'sort' => '2',
                'created_on' => '2016-06-19 18:41:38',
            ),
            2 => 
            array (
                'id' => 8,
                'celebrity_id' => 4,
                'photo_location' => 'Lahore, Punjab Pakistan',
                'photo_title' => 'Customer Service',
                'photo_description' => 'hmmmmm',
                'photo_file' => 'uploads/gallery/4/1466343333.jpg',
                'imgclass' => 'mega-entry cat-all cat-four cat-three',
                'sort' => '3',
                'created_on' => '2016-06-19 18:42:04',
            ),
            3 => 
            array (
                'id' => 9,
                'celebrity_id' => 4,
                'photo_location' => 'Lahore, Punjab Pakistan',
                'photo_title' => 'Exit Intent Pop-up',
                'photo_description' => 'hmmmmm',
                'photo_file' => 'uploads/gallery/4/1466343350.jpg',
                'imgclass' => 'mega-entry cat-all cat-one cat-four',
                'sort' => '4',
                'created_on' => '2016-06-19 18:42:33',
            ),
            4 => 
            array (
                'id' => 10,
                'celebrity_id' => 4,
                'photo_location' => 'Lahore, Punjab Pakistan',
                'photo_title' => 'Cookie restriction notice',
                'photo_description' => 'hmmmmm',
                'photo_file' => 'uploads/gallery/4/1466343369.jpg',
                'imgclass' => 'mega-entry cat-all cat-two cat-three',
                'sort' => '5',
                'created_on' => '2016-06-19 18:43:07',
            ),
            5 => 
            array (
                'id' => 11,
                'celebrity_id' => 4,
                'photo_location' => 'Lahore, Punjab Pakistan',
                'photo_title' => 'Customer Service',
                'photo_description' => 'hmmmmm',
                'photo_file' => 'uploads/gallery/4/1466343403.jpg',
                'imgclass' => 'mega-entry cat-all cat-three cat-two',
                'sort' => '6',
                'created_on' => '2016-06-19 18:43:50',
            ),
            6 => 
            array (
                'id' => 12,
                'celebrity_id' => 4,
                'photo_location' => 'Lahore, Punjab Pakistan',
                'photo_title' => 'Main Menu Custom Dropdown Block',
                'photo_description' => 'hmmmmm',
                'photo_file' => 'uploads/gallery/4/1466343426.jpg',
                'imgclass' => 'mega-entry cat-all cat-four cat-one',
                'sort' => '7',
                'created_on' => '2016-06-19 18:43:54',
            ),
            7 => 
            array (
                'id' => 13,
                'celebrity_id' => 2,
                'photo_location' => 'Lahore, Punjab Pakistan',
                'photo_title' => 'Contact Page',
                'photo_description' => 'hmmmmm',
                'photo_file' => 'uploads/gallery/2/1466343631.jpg',
                'imgclass' => 'mega-entry cat-all cat-one cat-four',
                'sort' => '0',
                'created_on' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'id' => 14,
                'celebrity_id' => 2,
                'photo_location' => 'Lahore, Punjab Pakistan',
                'photo_title' => 'Customer Service',
                'photo_description' => 'hmmmmm',
                'photo_file' => 'uploads/gallery/2/1466343663.jpg',
                'imgclass' => 'mega-entry cat-all cat-two cat-one',
                'sort' => '1',
                'created_on' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'id' => 15,
                'celebrity_id' => 2,
                'photo_location' => 'Lahore, Punjab Pakistan',
                'photo_title' => 'Category Empty Collection',
                'photo_description' => 'hmmmmm',
                'photo_file' => 'uploads/gallery/2/1466343690.jpg',
                'imgclass' => 'mega-entry cat-all cat-three cat-two',
                'sort' => '2',
                'created_on' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'id' => 16,
                'celebrity_id' => 2,
                'photo_location' => 'Lahore, Punjab Pakistan',
                'photo_title' => 'Cookie restriction notice',
                'photo_description' => 'hmmmmm',
                'photo_file' => 'uploads/gallery/2/1466343714.jpg',
                'imgclass' => 'mega-entry cat-all cat-four cat-three',
                'sort' => '3',
                'created_on' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'id' => 17,
                'celebrity_id' => 2,
                'photo_location' => 'Lahore, Punjab Pakistan',
                'photo_title' => 'Careshop',
                'photo_description' => 'hmmmmm',
                'photo_file' => 'uploads/gallery/2/1466343742.jpg',
                'imgclass' => 'mega-entry cat-all cat-one cat-four',
                'sort' => '4',
                'created_on' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'id' => 18,
                'celebrity_id' => 2,
                'photo_location' => 'Lahore, Punjab Pakistan',
                'photo_title' => 'Exit Intent Pop-up',
                'photo_description' => 'hmmmmm',
                'photo_file' => 'uploads/gallery/2/1466343777.jpg',
                'imgclass' => 'mega-entry cat-all cat-two cat-three',
                'sort' => '5',
                'created_on' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'id' => 19,
                'celebrity_id' => 2,
                'photo_location' => 'Lahore, Punjab Pakistan',
                'photo_title' => 'Allgemeine Geschäfsbedingungen und Datenschutzgarantie',
                'photo_description' => 'hmmmmm',
                'photo_file' => 'uploads/gallery/2/1466343805.jpg',
                'imgclass' => 'mega-entry cat-all cat-three cat-two',
                'sort' => '6',
                'created_on' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'id' => 20,
                'celebrity_id' => 2,
                'photo_location' => 'Lahore, Punjab Pakistan',
                'photo_title' => 'Entdecken Sie die schönsten Touren',
                'photo_description' => 'hmmmmm',
                'photo_file' => 'uploads/gallery/2/1466343823.jpg',
                'imgclass' => 'mega-entry cat-all cat-four cat-one',
                'sort' => '7',
                'created_on' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'id' => 25,
                'celebrity_id' => 4,
                'photo_location' => 'Lahore, Punjab Pakistan',
                'photo_title' => 'Contact Page',
                'photo_description' => 'hmmmmm',
                'photo_file' => 'uploads/gallery/4/1466601305.jpg',
                'imgclass' => 'mega-entry cat-all cat-one cat-four',
                'sort' => '0',
                'created_on' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}