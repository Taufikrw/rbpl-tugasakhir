<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'guruFirstName' => fake()->firstName(),
            'guruLastName' => fake()->lastName(),
            'guruFoto' => fake()->imageUrl('human', true),
            'nip' => fake()->unique()->nik(),
            'guruGender' => fake()->randomElement(['Laki-Laki', 'Perempuan']),
            'guruTempatLahir' => fake()->city(),
            'guruTanggalLahir' => fake()->date('Y_m_d'),
            'guruToken' => fake()->unique()->randomNumber(4, true),
        ];
    }
}
