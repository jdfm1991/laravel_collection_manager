<?php

namespace Database\Factories;

use App\Models\Collection;
use App\Models\Company;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentCollection>
 */
class PaymentCollectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'payment' => Payment::factory()->create(),
            'collection' => Collection::factory()->create(),
            'status' => $this->faker->boolean(),
            'user' => User::factory()->create(),
            'company' => Company::factory()->create()
        ];
    }
}
