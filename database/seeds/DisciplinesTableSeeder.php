<?php

use Illuminate\Database\Seeder;

class DisciplinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        'Agriculture',
        'Biology',
        'Business',
        'Chemistry',
        'Communication Sciences and Disorders',
        'Criminal Justice',
        'Engineering',
        'English',
        'Health Science',
        'History',
        'Information Technology',
        'Mathematics',
        'Music',
        'Physics',
        'Psychology',
        'Sociology',
        'Statistics',
        'Teacher Education',
        'World Languages',
      ];
      foreach ($data as $d) {
        DB::table('discipline')->insert([
          'name' => $d,
        ]);
      }
    }
}
