<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            "username"=>"admin",
            "email"=>"admin@gmail.com",
            "password" => 123456,
        ]);

        $admin->assignRole(1);

        $seller = User::create([
            "username" => "seller",
            "email" => "seller@gmail.com",
            "password" => "seller123"
        ]);

        $seller->assignRole(2);

        $users = User::factory(10)->create();
        foreach($users as $user){
            $user->assignRole(3);
        }
    }
}
