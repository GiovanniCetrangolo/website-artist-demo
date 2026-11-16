<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $immagini = [
            'images/violino1.jpg',
            'images/violino2.jpg',
            'images/violino3.jpg',
            'images/violino4.jpg',
            'images/violino5.jpg'
        ];
        return [
            'tipo' => 'foto',
            'percorso_foto' => fake()->randomElement($immagini),
            'youtube_id' => null,
            'ordine' => fake()->numberBetween(1, 20),
        ];
    }
}
