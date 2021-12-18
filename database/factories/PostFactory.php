<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'content' => $this->faker->paragraph(),
            'color' => $this->faker->colorName(),
            'phone' => $this->faker->phoneNumber(),
            'author' => $this->faker->name,
            'author_age' => $this->faker->numberBetween(20, 100) 
        ];
    }
}
