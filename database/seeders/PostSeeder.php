<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (PostCategory::all() as $category) {
            Post::factory()
                ->count(100)
                ->create([
                    'category_id' => $category->id
                ]);
        }
    }
}
