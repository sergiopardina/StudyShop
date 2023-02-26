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
                'name' => 'Dmytro Huba',
                'email' => 'huba@admin.com',
                'password' => Hash::make('password'),
                'phone' => '+1234567890',
                'admin' => true,
            ],
            [
                'name' => 'Pavlo Birsan',
                'email' => 'birsan@admin.com',
                'password' => Hash::make('password'),
                'phone' => '+0987654321',
                'admin' => true,
            ],
            [
                'name' => 'Serkhio Pardina',
                'email' => 'pardina@admin.com',
                'password' => Hash::make('password'),
                'phone' => '+0987633221',
                'admin' => true,
            ],
            [
                'name' => 'Vladyslav Nikitin',
                'email' => 'nikitin@admin.com',
                'password' => Hash::make('password'),
                'phone' => '+0987633221',
                'admin' => true,
            ],
        ]);
    }
}
