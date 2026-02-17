<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClientStatu>
 */
class ClientStatuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->randomElement(['Activo', 'Inactivo', 'Cancelado', 'Pendiente', 'Suspendido', 'Bloqueado']),
        ];
    }
}
