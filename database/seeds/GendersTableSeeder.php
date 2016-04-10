<?php

use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([
          'name' => 'female',
        ]);
        DB::table('genders')->insert([
          'name' => 'male',
        ]);
        DB::table('genders')->insert([
          'name' => 'other',
        ]);
        DB::table('user_types')->insert([
          'name' => 'member',
        ]);
        DB::table('user_types')->insert([
          'name' => 'staff',
        ]);
        DB::table('languages')->insert([
          'name' => 'English',
        ]);
        DB::table('licenses')->insert([
          'name' => 'CC',
          'description' => 'Creative Commons',
        ]);
        DB::table('material_types')->insert([
          'name' => 'eBook',
        ]);
        DB::table('material_formats')->insert([
          'name' => 'PDF',
        ]);
        DB::table('material_categories')->insert([
          'name' => 'Arts',
        ]);
        DB::table('material_status')->insert([
          'name' => 'Pending',
        ]);
        DB::table('users')->insert([
          'email' =>'kuymovsun@gmail.com',
          'password' => bcrypt('123456'),
          'verified' => true,
        ]);
        DB::table('user_profiles')->insert([
          'user_id' => 1,
          'first_name' => 'Movsun',
          'last_name' => 'kuy',
        ]);
        DB::table('audiences')->insert([
          'name' => 'University',
        ]);
        DB::table('materials')->insert([
          'name' => 'DNA from beginning',
          'description' => 'A biology course',
          'user_id' => 1,
          'license_id' => 1,
          'language_id' => 1,
          'material_status_id' => 1,
          'material_type_id' => 1,
          'material_format_id' => 1,
          'link' => 'https://google.com',
          'is_sumitter_author' => true,
        ]);
    }
}
