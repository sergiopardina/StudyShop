<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
                'phone' => '+1234567890',
                'admin' => true,
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'vello@gmail.com',
                'password' => Hash::make('password'),
                'phone' => '+0987654321',
                'admin' => true,
            ],
            [
                'name' => 'Dima',
                'email' => 'dima@gmail.com',
                'password' => Hash::make('password'),
                'phone' => '+0987633221',
                'admin' => false,
            ],
        ]);
    }
}