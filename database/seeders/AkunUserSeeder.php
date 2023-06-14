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
                'name' => 'Kasir',
                'email' => 'kasir@gmail.com',
                'level' => 'kasir',
                'password' => bcrypt('kasir123@')
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
