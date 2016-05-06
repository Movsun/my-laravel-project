<?php

use Illuminate\Database\Seeder;

class LicensesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          'Attribution',
          'Attribution-NoDerivs',
          'Attribution-NonCommercial-ShareAlike',
          'Attribution-ShareAlike',
          'Attribution-NonCommercial',
          'Attribution-NonCommercial-NoDerivs'
        ];
        foreach ($data as $d) {
          DB::table('licenses')->insert([
            'name' => $d,
          ]);
        }
    }
}
