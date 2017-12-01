<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
        $this->call(AdvertisementTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(ArtistTableSeeder::class);
        $this->call(CaptchaTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(CelebritiesTableSeeder::class);
        $this->call(CelebrityChildrenTableSeeder::class);
        $this->call(CelebrityFeaturedProjectTableSeeder::class);
        $this->call(CelebrityFollowersTableSeeder::class);
        $this->call(CelebrityNewsTableSeeder::class);
        $this->call(CelebrityPhotoTableSeeder::class);
        $this->call(CelebrityRelationTableSeeder::class);
        $this->call(CelebritySpouseTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CrudComponentsTableSeeder::class);
        $this->call(CrudGroupComponentsTableSeeder::class);
        $this->call(CrudGroupsTableSeeder::class);
        $this->call(CrudHistoriesTableSeeder::class);
        $this->call(CrudLanguagesTableSeeder::class);
        $this->call(CrudPermissionsTableSeeder::class);
        $this->call(CrudSettingsTableSeeder::class);
        $this->call(CrudUserPermissionsTableSeeder::class);
        $this->call(CrudUsersTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(EventsourcesTableSeeder::class);
        $this->call(EventsqueuesTableSeeder::class);
        $this->call(MarkersTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PartnersTableSeeder::class);
        $this->call(PopularSearchTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(SubCelebritiesTableSeeder::class);
        $this->call(SubEventsTableSeeder::class);
        $this->call(TblCitiesTableSeeder::class);
        $this->call(TblCommentTableSeeder::class);
        $this->call(TblConfigurationTableSeeder::class);
        $this->call(TblCountriesTableSeeder::class);
        $this->call(TblPageTableSeeder::class);
        $this->call(TblStatesTableSeeder::class);
        $this->call(TblUserTableSeeder::class);
        $this->call(TblUserLogTableSeeder::class);
        $this->call(TblUserPaymentMethodsTableSeeder::class);
        $this->call(TblUserSubscriptionsTableSeeder::class);
        $this->call(TemplatesTableSeeder::class);
        $this->call(TrandsTableSeeder::class);
        $this->call(UzCitiesTableSeeder::class);
        $this->call(UzCitynamesTableSeeder::class);
        $this->call(UzCountriesTableSeeder::class);
        $this->call(UzCountrynamesTableSeeder::class);
        $this->call(UzLocalesTableSeeder::class);
        $this->call(UzRegionnamesTableSeeder::class);
        $this->call(UzRegionsTableSeeder::class);
    }
}
