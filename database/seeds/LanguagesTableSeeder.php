<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          'Khmer', 'English', 'France',
        ];
        foreach ($data as $d) {
          DB::table('languages')->insert([
            'name' => $d,
          ]);
        }
    }
}
