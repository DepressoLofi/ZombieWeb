<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->username = "Admin";
        $user->email = "adminz@gmail.com";
        $user->password = Hash::make('zombie');
        $user->is_admin = "admin";
        $user->save();
    }
}
