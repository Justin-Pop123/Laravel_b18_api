<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // for admin
      $user = new User;
      $user->name = "Admin";
      $user->email = "admin@gmail.com";
      $user->password = Hash::make('password');
      $user->save();

      $user->assignRole('admin');
    }
}
