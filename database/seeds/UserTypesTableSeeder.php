<?php

use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          'admin', 'peer reviewer', 'stuff', 'moderator', 'member'
        ];
        foreach($data as $d){
          DB::table('user_types')->insert([
            'name' => $d,
          ]);
        }
    }
}
