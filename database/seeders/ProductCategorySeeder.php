<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    protected const CATEGORIES = ['coffee', 'dessert', 'tea'];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach (self::CATEGORIES as $category) {
            ProductCategory::create([
                'name' => $category,
            ]);
        }
    }
}
