<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AttachmentFactory extends Factory
{
    public function definition()
    {
        return [
            'id' => fake()->randomNumber(7, false),
            'uuid' => fake()-> uuid(),
            'attachable_type'=> fake()->word(),
            'attachable_id' => fake()->numerify('###'),
            'file_path' => fake()->imageUrl(),
            'file_name' => fake()->word(),
            'extension'=> fake()->word(),
            'mime_type'=> fake()->word(),
            'size' => fake()->randomDigit(20, false),
        ];
    }
}
