<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Company;
use App\Models\ContractStatu;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contract>
 */
class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'n_contract' => $this->faker->ean13(),
            'address' => $this->faker->address(),
            'balance' => $this->faker->randomFloat(),
            'client_id' => Client::factory(),
            'plan_id' => Plan::factory(),
            'contract_statu_id' => ContractStatu::factory(),
            'user_id' => User::factory(),
            'company_id' => Company::factory(),
        ];
    }
}
