<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsCharactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name'=>'Smartphones',
                'top' => true,
            ],
            [
                'name'=>'TVs',
                'top' => false,
            ],
            [
                'name'=>'Laptops, PC',
                'top' => false,
            ],
            [
                'name'=>'Kitchen Appliances',
                'top' => true,
            ],
            [
                'name'=>'Game consoles',
                'top' => false,
            ],
            [
                'name'=>'Home Appliances',
                'top' => false,
            ],
        ]);
        DB::table('brands')->insert([
            [
                'name'=>'Apple',
            ],
            [
                'name'=>'Samsung',
            ],
            [
                'name'=>'Sharp',
            ],
            [
                'name'=>'Phillips',
            ],
            [
                'name'=>'LG',
            ],
        ]);
    }
}
