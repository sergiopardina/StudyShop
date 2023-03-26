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
                'name' => 'Anton Seryapov',
                'email' => 'seryapov@admin.com',
                'password' => Hash::make('password'),
                'phone' => '+1234567890',
                'admin' => true,
                'telegram' => '',
            ],
            [
                'name' => 'Dmytro Huba',
                'email' => 'huba@admin.com',
                'password' => Hash::make('password'),
                'phone' => '+1234567890',
                'admin' => true,
                'telegram' => 'Eger_023',
            ],
            [
                'name' => 'Pavlo Birsan',
                'email' => 'birsan@admin.com',
                'password' => Hash::make('password'),
                'phone' => '+0987654321',
                'admin' => true,
                'telegram' => 'Cropit',
            ],
            [
                'name' => 'Serkhio Pardina',
                'email' => 'pardina@admin.com',
                'password' => Hash::make('password'),
                'phone' => '+0987633221',
                'admin' => true,
                'telegram' => 's_albertovich',
            ],
            [
                'name' => 'Vladyslav Nikitin',
                'email' => 'nikitin@admin.com',
                'password' => Hash::make('password'),
                'phone' => '+0987633221',
                'admin' => true,
                'telegram' => 'vladnikitin_lfc',
            ],
        ]);
    }
}
