<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => fake()->randomNumber(6, false),
            'name' => fake()->unique()->name(),
            'email' => fake()->unique()->safeEmail(),
            'code' => fake()->unique()->randomNumber(5, false),
            'address' => fake()->unique()->address(),
            'type' => fake()->randomNumber(5, false),
            'phone' => fake()->phoneNumber(),
            'hotline' => fake()->phoneNumber(),
            'province_code' => fake()->randomNumber(4, true),
            'institution_code' => fake()->randomNumber(4, true),
            'main_branch' => fake()->randomDigit(),
            'zip_code' => fake()->randomNumber(6, true),
            'attribute_information_setting_date' => now(),
            'old_school_invesgation_number' => fake()->phoneNumber(),
            'facebook_url' => fake()->url(),
            'twitter__url' => fake()->url(),
            'youtube__url' => fake()->url(),
            'fax_number' => fake()->phoneNumber(),
        ];
    }
}
