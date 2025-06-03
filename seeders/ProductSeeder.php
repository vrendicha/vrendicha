<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'category_id' => 1,
                'name' => 'Smartphone XYZ',
                'description' => 'Smartphone keren dengan fitur canggih.',
                'stock' => 10,
                'price' => 3000000,
                'image' => 'smartphone.jpg',
            ],
            [
                'category_id' => 2,
                'name' => 'Kaos Polos',
                'description' => 'Kaos bahan nyaman dan adem.',
                'stock' => 50,
                'price' => 50000,
                'image' => 'kaos.jpg',
            ],
        ]);
    }
}
