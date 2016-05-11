<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        ['name' => 'admin', 'display_name' => 'Administrator'],
        ['name' => 'elite', 'display_name' => 'Elite'],
        ['name' => 'mod', 'display_name' => 'Moderator'],
        ['name' => 'member', 'display_name' => 'Member'],
      ];
      foreach($data as $d){
        DB::table('roles')->insert([
          'name' => $d['name'],
          'display_name' => $d['display_name'],
        ]);
      }
    }
}
