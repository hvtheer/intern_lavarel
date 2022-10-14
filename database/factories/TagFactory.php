<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    public function definition()
    {
        return [
            'id' => fake()->randomNumber(5, false),
            'name' => fake()->name(),
        ];
    }
}
