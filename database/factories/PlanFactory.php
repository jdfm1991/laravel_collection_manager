<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Plan 1', 'Plan 2', 'Plan 3']),
            'price' => $this->faker->randomFloat(),
            'description' => $this->faker->text(),
            'user_id' => $this->faker->randomElement([1, 2, 3]),
            'company_id' => $this->faker->randomElement([1, 2, 3]),
        ];
    }
}
