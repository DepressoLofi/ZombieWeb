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
        $user->role = 1;
        $user->save();

        $user1 = new User;
        $user1->username = "User1";
        $user1->email = "userone@gmail.com";
        $user1->password = Hash::make('zombie');
        $user1->role = 0;
        $user1->save();


        $user2 = new User;
        $user2->username = "User2";
        $user2->email = "usertwo@gmail.com";
        $user2->password = Hash::make('zombie');
        $user2->role = 0;
        $user2->save();
    }
}
