<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $memberPerms = [
          ['name' => 'submit-material', 'display_name' => 'Submit Material'],
          ['name' => 'profile-comment', 'display_name' => 'Comment on User Profile'],
          ['name' => 'material-comment', 'display_name' => 'Comment on Material'],
          ['name' => 'material-rating', 'display_name' => 'Rate Material'],
        ];
        $modPerms = [
          ['name' => 'edit-material-comment', 'display_name' => 'Edit Comment on Material'],
          ['name' => 'ban-user', 'display_name' => 'Ban User'],
        ];
        $elitePerms = [
          ['name' => 'peer-review-material', 'display_name' => 'Peer Review Material'],
        ];
        $adminPerms = [
          ['name' => 'edit-user', 'display_name' => 'Edit User'],
        ];

        $member = App\Role::where('name', 'member')->first();
        $mod = App\Role::where('name', 'mod')->first();
        $elite = App\Role::where('name', 'elite')->first();
        $admin = App\Role::where('name', 'admin')->first();

        foreach ($memberPerms as $p) {
          $perm = new App\permission();
          $perm->name = $p['name'];
          $perm->display_name = $p['display_name'];
          $perm->save();

          $member->attachPermission($perm);
          // $mod->attachPermission($perm);
          // $elite->attachPermission($perm);
          // $admin->attachPermission($perm);
        }

        foreach ($modPerms as $p) {
          $perm = new App\permission();
          $perm->name = $p['name'];
          $perm->display_name = $p['display_name'];
          $perm->save();

          $mod->attachPermission($perm);
          // $admin->attachPermission($perm);
        }

        foreach ($elitePerms as $p) {
          $perm = new App\permission();
          $perm->name = $p['name'];
          $perm->display_name = $p['display_name'];
          $perm->save();

          $elite->attachPermission($perm);
        }

        foreach ($adminPerms as $p) {
          $perm = new App\permission();
          $perm->name = $p['name'];
          $perm->display_name = $p['display_name'];
          $perm->save();

          $admin->attachPermission($perm);
        }



      // foreach ($data as $d) {
      //   foreach ($d as $p) {
      //     DB::table('permissions')->insert([
      //       'name' => $p['name'],
      //       'display_name' => $p['display_name'],
      //     ]);
      //   }
      // }

    }
}
