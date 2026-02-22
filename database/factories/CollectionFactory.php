<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\CollectionStatu;
use App\Models\Company;
use App\Models\Contract;
use App\Models\Node;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Collection>
 */
class CollectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'n_collection' => $this->faker->name(),
            'description' => $this->faker->text(),
            'amount' => $this->faker->randomFloat(),
            'paid' => $this->faker->randomFloat(),
            'balance' => $this->faker->randomFloat(),
            'collection_statu_id' => CollectionStatu::factory(),
            'contract_id' => Contract::factory(),
            'client_id' => Client::factory(),
            'company_id' => Company::factory(),
            'node_id' => Node::factory(),
            'user_id' => User::factory(),
            'plan_id' => Plan::factory(),
        ];
    }
}
