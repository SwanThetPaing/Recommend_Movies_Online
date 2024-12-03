<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id'=>Category::factory(),
            'name' => fake()->name(),
            'rating' => fake()->name(),
            'released_date' => fake()->name(),
            'content' => fake()->paragraph(),
            'slug' => fake()->slug()
        ];
    }
}
