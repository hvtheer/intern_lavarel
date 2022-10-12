<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => fake()->randomNumber(7, false),
            'room' =>fake()->word(),
            'sender_type' => 'user',
            'receiver_id' => 1,
            'receiver_type' => 'user',
            'content' => fake()->sentence(),
            'content_type' => fake()->text(),
            'association_id' => fake()->numerify('###'),
            'association_type' => fake()->word(),
        ];
    }
}
