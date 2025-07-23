<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Oppo Reno 10 5G',
                'category' => 'SmartPhone',
                'price' => 496,
                'description' => 'The Oppo Reno 10x Zoom feels stylish and powerful.',
                'gallery' => 'oppo.jpg'  // اسم الصورة فقط
            ],
            [
                'name' => 'Hitachi Refrigerator',
                'category' => 'Refrigerator',
                'price' => 5000,
                'description' => 'High-quality Hitachi refrigerator.',
                'gallery' => 'hitachi.jpeg'
            ],
            [
                'name' => 'Samsung LED TV 32 inch',
                'category' => 'TV',
                'price' => 1000,
                'description' => 'Samsung LED TV 32 inch with great picture quality.',
                'gallery' => 'samsung.jpeg'
            ],
            [
                'name' => 'iPhone 14 Pro Max',
                'category' => 'SmartPhone',
                'price' => 1059,
                'description' => 'Apple iPhone 14 Pro Max with advanced features.',
                'gallery' => 'iphone.webp'
            ]
        ]);
    }
}
