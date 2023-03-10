<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Books>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'Categories_id' => $this->faker->numberBetween(1, 10),
            'author' => $this->faker->name,
            'publisher' => $this->faker->company,
            'image' => $this->faker->image('public/storage', 640, 480, null, false)
        ];
    }
}
