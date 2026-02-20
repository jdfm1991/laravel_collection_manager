<?php

namespace Database\Factories;

use App\Models\ClientCategory;
use App\Models\ClientStatu;
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
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'dni' => $this->faker->ean13(),
            'client_category_id' => ClientCategory::factory(),
            'client_statu_id' => ClientStatu::factory(),
            'user_id' => User::factory(),
            'company_id' => Company::factory(),
        ];
    }
}
