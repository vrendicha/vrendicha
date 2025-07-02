<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Hugo Boss Scent Le Parfum Women',
                'description' => 'Parfum wanita dengan wangi elegan dan lembut.',
                'stock' => 15,
                'price' => 99000,
                'image' => 'produk/Hugo_Boss_Scent_Le_Parfum_Women.png',
                'category_id' => 1,
            ],
            [
                'name' => 'Lancome Idole EDP 100 ml',
                'description' => 'Wangi floral yang segar dan feminin.',
                'stock' => 20,
                'price' => 85000,
                'image' => 'produk/Lancome_Idole_EDP_100_ml.png',
                'category_id' => 1,
            ],
            [
                'name' => 'Marina de Bourbon Symbol For Lady EDP',
                'description' => 'Kombinasi aroma buah dan bunga yang menyegarkan.',
                'stock' => 10,
                'price' => 105000,
                'image' => 'produk/Marina_de_Bourbon_Symbol_For_Lady_EDP.jpg',
                'category_id' => 2,
            ],
            [
                'name' => 'Solinotes Cotton EDP 50 ml',
                'description' => 'Parfum dengan wangi lembut kapas.',
                'stock' => 12,
                'price' => 115000,
                'image' => 'produk/Solinotes_Cotton_EDP_50_ml.png',
                'category_id' => 2,
            ],
            [
                'name' => 'Tiziana Terenzi Kirke Extrait De Parfum',
                'description' => 'Aroma buah dan bunga yang menggoda.',
                'stock' => 8,
                'price' => 125000,
                'image' => 'produk/Tiziana_Terenzi_Kirke_Extrait_De_Parfum.jpg',
                'category_id' => 2,
            ],
            [
                'name' => 'Tous Love Me The Onyx EDP',
                'description' => 'Wangi bunga dan buah yang manis.',
                'stock' => 5,
                'price' => 150000,
                'image' => 'produk/Tous_Love_Me_The_Onyx_EDP.png',
                'category_id' => 3,
            ],
            [
                'name' => 'Yves Saint Laurent Black Opium EDP',
                'description' => 'Wangi kopi dan vanila yang sensual.',
                'stock' => 7,
                'price' => 130000,
                'image' => 'produk/Yves_Saint_Laurent_Black_Opium_EDP.png',
                'category_id' => 3,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
