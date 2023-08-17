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
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => 'User ',
                'email' => 'user@example.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('123456'),
                'is_admin' => true,
            ],
        ]);
    }
}