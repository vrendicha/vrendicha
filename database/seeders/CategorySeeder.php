<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::upsert([
            ['id' => 1, 'name' => 'Parfum Wanita'],
            ['id' => 2, 'name' => 'Unisex'],
            ['id' => 3, 'name' => 'Eksklusif'],
        ], ['id'], ['name']);
    }
}
