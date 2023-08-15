<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (ProductCategory::all() as $category) {
            Product::factory()
                ->count(3)
                ->create([
                    'is_featured' => 1,
                    'category_id' => $category->id
                ]);
            Product::factory()
                ->count(100)
                ->create([
                    'is_featured' => 0,
                    'category_id' => $category->id
                ]);
        }
    }
}
