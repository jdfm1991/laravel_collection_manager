<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExchangeRate>
 */
class ExchangeRateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'currency' => $this->faker->randomElement(['USD', 'EUR', 'BSS', 'BRL']),
            'rate' => $this->faker->randomFloat(),
            'date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'user_id' => User::factory(),
            'company_id' => Company::factory(),
        ];
    }
}
