<?php

namespace Database\Factories;

use App\Models\ClientCategory;
use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'dni' => $this->faker->unique()->ean13(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'image' => $this->faker->imageUrl(),
            'category' => ClientCategory::factory()->create(),
            'user' => User::factory()->create(),
            'company' => Company::factory()->create(),
            'status' => $this->faker->boolean(),
        ];
    }
}
