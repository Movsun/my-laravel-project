<?php

use Illuminate\Database\Seeder;

class UserStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          'activate',
          'banned',
          'deactivate',
        ];
        foreach ($data as $d) {
          DB::table('user_status')->insert([
            'name' => $d,
          ]);
        }
    }
}
