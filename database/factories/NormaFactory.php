<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Norma>
 */
class NormaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->words(3, true),
            'referencia' => fake()->sentence(),
            'tipo' => fake()->randomElement(['ISO', 'Ley']),
            // 'user_id' => User::factory(),
        ];
    }
}
