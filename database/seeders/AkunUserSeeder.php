<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkunUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'level' => 'admin',
                'password' => bcrypt('Admin123@')
            ],

            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'level' => 'user',
                'password' => bcrypt('User123@')
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
