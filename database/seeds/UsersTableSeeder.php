<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $adminRole = Role::where('name', 'admin')->first();
        $moderatorRole = Role::where('name', 'moderator')->first();
        $guestRole = Role::where('name', 'guest')->first();

        $admin = User::create([
          'name'=>'Admin1',
          'email'=>'admin1@froot.kz',
          'password'=>bcrypt('admin')
        ]);

        $moderator = User::create([
          'name'=>'Moder1',
          'email'=>'moder1@froot.kz',
          'password'=>bcrypt('moderator')
        ]);

        $guest = User::create([
          'name'=>'Guest1',
          'email'=>'guest1@froot.kz',
          'password'=>bcrypt('guest')
        ]);

        $admin->roles()->attach($adminRole);
        $moderator->roles()->attach($moderatorRole);
        $guest->roles()->attach($guestRole);
    }
}
