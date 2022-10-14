<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaggableFactory extends Factory
{
    public function definition()
    {
        return [
            'id' => fake()->randomNumber(6, false),
            'taggable_type' => fake()->word(),
            'type' => fake()->randomDigit(),
        ];
    }
}
