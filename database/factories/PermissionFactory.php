<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PermissionFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => fake()->unique()->word(),
            'key' => fake()->unique()->word(),
        ];
    }
}
