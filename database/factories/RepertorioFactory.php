<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Repertorio>
 */
class RepertorioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $generi = [
            'rock',
            'pop',
            'jazz',
            'country',
            'classic'
        ];

        return [
            'titolo' => fake()->sentence(2),
            'genere' => fake()->randomElement($generi),
            'note' => fake()->optional()->sentence(3),
            'ordine_index' => fake()->numberBetween(0, 20)
        ];
    }
}
