<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Category;
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
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'content' => $this->faker->paragraph(),
            'date' => $this->faker->date($format = 'Y-m-d'),
            'category_id' => Category::all()->random()->id,
            'user_id' => Category::all()->random()->id,
        ];
    }
}
