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
            'judul' => fake()->sentence(mt_rand(1,5)),
            'slug' => fake()->slug(),
            'exceprt' => fake()->paragraph(),
            'body' => fake()->paragraph(mt_rand(5,8)),
            'category_id'=> mt_rand(1,2),
            'user_id' => mt_rand(1,3)

        ];
    }
}
