<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PermissionGroupFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => fake()->unique()->word(),
        ];
    }
}
