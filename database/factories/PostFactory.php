<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'judul' => fake()->sentence(mt_rand(1,2)),
            'slug' => fake()->slug(),
            'exceprt' => fake()->paragraph(1),
            // 'body' => '<p>'. implode('</p><p>', fake()->paragraphs(mt_rand(10,20))),
            'body' =>collect(fake()->paragraphs(mt_rand(10,20)))
            ->map(fn($p)=> "<p>$p</p>")->implode(''),
            'category_id'=> mt_rand(1,2),
            'user_id' => mt_rand(1,3)

        ];
    }
}
