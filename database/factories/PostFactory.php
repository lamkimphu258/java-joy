<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = implode(' ', fake()->words(8));

        $contentSectionTitle = fake()->sentences(nb: 10);
        $fakeContent = [];
        for ($i = 0; $i < count($contentSectionTitle); $i++) {
            $fakeContent[] = '<div><p class="content-title">' . $i+1 . '. ' . $contentSectionTitle[$i] . '</p>';
            $fakeContent[] = '<p>' . fake()->text(maxNbChars: 2_000) . '</p></div>';
        }

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'is_featured' => random_int(0, 1),
            'description' => fake()->sentence(50),
            'content' => implode('', $fakeContent),
            'thumbnail' => 'images/post-' . random_int(1, 3),
        ];
    }
}
