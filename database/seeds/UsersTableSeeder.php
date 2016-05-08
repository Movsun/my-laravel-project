<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'email' => 'kuymovsun@gmail.com',
          'password' => bcrypt('123456'),
          'verified' => true,
          'status' => 1,
        ]);
    }
}
