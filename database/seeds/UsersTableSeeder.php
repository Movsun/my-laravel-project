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
        // $user = new App\User();
        // $user->email = 'kuymovsun@gmail.com';


        $userProfile = new App\UserProfile();
        $userProfile->first_name = 'Movsun';
        $userProfile->last_name = 'Kuy';

        $adminRole = App\Role::where('name', 'admin')->first();
        $memberRole = App\Role::where('name', 'member')->first();
        $user = App\User::where('email', 'kuymovsun@gmail.com')->first();
        $user->userProfile()->save($userProfile);
        $user->attachRoles([$adminRole, $memberRole]);

        // $user->attachRole();
    }
}
