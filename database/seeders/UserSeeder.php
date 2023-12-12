<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'username' => 'user1',
                    'name' => 'user1',
                    'email' => 'user1@gmail.com',
                    // password pakai Hash
                    'password' => Hash::make('12345678'),
                ],
                [
                    
                    'username' => 'user2',
                    'name' => 'user2',
                    'email' => 'user2@gmail.com',
                    'password' => Hash::make('12345678'),
                ]
            ]
        );
    }
}