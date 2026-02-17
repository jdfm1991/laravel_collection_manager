<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Company;
use App\Models\Node;
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
            'number' => $this->faker->ean13(),
            'file_contract' => $this->faker->imageUrl(),
            'client' => Client::factory()->create(),
            'plan' => Plan::factory()->create(),
            'node' => Node::factory()->create(),
            'balance' => $this->faker->randomFloat(2, 0, 1000),
            'address' => $this->faker->address(),
            'status' => $this->faker->boolean(),
            'user' => User::factory()->create(),
            'company' => Company::factory()->create()

        ];
    }
}
