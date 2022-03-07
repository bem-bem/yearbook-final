<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\faculty>
 */
class facultyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'image' => $this->faker->country(),
            'job' => $this->faker->country(),
            'job_description' => $this->faker->country(),
            'schoolyear' => $this->faker->country(),
        ];
    }
}
