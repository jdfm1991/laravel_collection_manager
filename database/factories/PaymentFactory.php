<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Company;
use App\Models\Contract;
use App\Models\Node;
use App\Models\Plan;
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
            'n_payment' => $this->faker->name(),
            'description' => $this->faker->text(),
            'date_payment' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'reference' => $this->faker->ean13(),
            'amount' => $this->faker->randomFloat(),
            'ex_rate' => $this->faker->randomFloat(),
            'ex_amount' => $this->faker->randomFloat(),
            'status' => $this->faker->randomElement(['Pending', 'Done', 'Rejected']),
            'client_id' => Client::factory(),
            'contract_id' => Contract::factory(),
            'plan_id' => Plan::factory(),
            'node_id' => Node::factory(),
            'user_id' => User::factory(),
            'company_id' => Company::factory(),
        ];
    }
}
