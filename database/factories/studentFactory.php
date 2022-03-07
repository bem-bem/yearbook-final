<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class studentFactory extends Factory
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
            'section' => $this->faker->country(),
            'yearlevel' => $this->faker->country(),
            'course' => $this->faker->country(),
            'schoolyear' => $this->faker->country(),
            'birthday' => $this->faker->date(),
            'goal' => $this->faker->country(),
            'motto' => $this->faker->country(),
            'awards' => $this->faker->country(),
        ];
    }
}
