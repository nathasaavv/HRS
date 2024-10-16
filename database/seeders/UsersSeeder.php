<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Manager',
                'email' => 'manager@gmail.com',
                'password' => bcrypt(1234567),
                'role' => 'manager',
            ],
            [
                'name' => 'Admin',
                'email' => 'Admin@gmail.com',
                'password' => bcrypt(123123),
                'role' => 'admin',
            ],
            [
                'name' => 'User',
                'email' => 'User@gmail.com',
                'password' => bcrypt(222222),
                'role' => 'user',
            ],

        ]);
    }
}
