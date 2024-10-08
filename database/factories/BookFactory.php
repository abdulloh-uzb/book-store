<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use App\Models\Format;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->text(50),
            'description' => fake()->text(),
            'price' => fake()->numberBetween(1, 500),
            'published_year' => fake()->year(),
            'quantity' => fake()->numberBetween(1, 50),
            'category_id'=>Category::inRandomOrder()->get()->first()->id,
            'user_id' => User::inRandomOrder()->get()->first()->id,
            'author_id' => Author::inRandomOrder()->get()->first()->id,
            'format_id' => Format::inRandomOrder()->get()->first()->id,

        ];
    }
}
