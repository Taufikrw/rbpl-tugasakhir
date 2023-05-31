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
            'firstName' => fake()->firstName(),
            'lastName' => fake()->lastName(),
            // 'foto' => fake()->imageUrl('human', true),
            'nip' => fake()->unique()->nik(),
            'gender' => fake()->randomElement(['Laki-Laki', 'Perempuan']),
            'tempatLahir' => fake()->city(),
            'tanggalLahir' => fake()->date('Y_m_d'),
            'token' => fake()->unique()->randomNumber(4, true),
        ];
    }
}
