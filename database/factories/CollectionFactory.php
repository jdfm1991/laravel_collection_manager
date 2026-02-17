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
            'number_collection' => $this->faker->ean13(),
            'description' => $this->faker->text(50),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'amount_paid' => $this->faker->randomFloat(2, 0, 1000),
            'client' => Client::factory()->create(),
            'contract' => Contract::factory()->create(),
            'plan' => Plan::factory()->create(),
            'node' => Node::factory()->create(),
            'status' => $this->faker->boolean(),
            'user' => User::factory()->create(),
            'company' => Company::factory()->create()
        ];
    }
}
