<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Company;
use App\Models\Contract;
use App\Models\PaymentType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number_payment' => $this->faker->randomNumber(),
            'date_payment' => $this->faker->date(),
            'payment_type' => PaymentType::factory()->create(),
            'number_reference' => $this->faker->randomNumber(),
            'description' => $this->faker->sentence(),
            'amount_usd' => $this->faker->randomFloat(2, 0, 1000),
            'ex_rate' => $this->faker->randomFloat(2, 0, 1000),
            'amount_bss' => $this->faker->randomFloat(2, 0, 1000),
            'client' => Client::factory()->create(),
            'contract' => Contract::factory()->create(),
            'status' => $this->faker->boolean(),
            'user' => User::factory()->create(),
            'company' => Company::factory()->create()
        ];
    }
}
