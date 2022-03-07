<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\classphoto>
 */
class classphotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' => $this->faker->country(),
            'schoolyear' => $this->faker->country(),
            'yearlevel' => $this->faker->country(),
            'course' => $this->faker->country(),
            'section' => $this->faker->country(),
        ];
    }
}
