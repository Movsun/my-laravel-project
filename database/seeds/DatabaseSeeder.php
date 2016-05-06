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
        // $this->call(UsersTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(LicensesTableSeeder::class);
        $this->call(MaterialCategoriesTableSeeder::class);
        $this->call(MaterialTypesTableSeeder::class);
        $this->call(MaterialFormatsTableSeeder::class);
        $this->call(UserTypesTableSeeder::class);
        $this->call(AuthorizationsTableSeeder::class);

    }
}
