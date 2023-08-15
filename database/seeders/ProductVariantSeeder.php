<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Seeder;

class ProductVariantSeeder extends Seeder
{
    protected const SIZES = ['M', 'L', 'XL'];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Product::cursor() as $product) {
            foreach (self::SIZES as $size) {
                if (random_int(min: 0, max: 1)) {
                    ProductVariant::factory()
                        ->create([
                            'size' => $size,
                            'product_id' => $product->id,
                        ]);
                }
            }
        }
    }
}
