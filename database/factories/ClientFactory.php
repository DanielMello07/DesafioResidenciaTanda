<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nameCompleto' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'telefone' => fake()->cellphoneNumber(),
        ];
    }
}
