<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idClass' => '1',
            'firstName' => fake()->firstName(),
            'lastName' => fake()->lastName(),
            // 'foto' => fake()->imageUrl('human', true),
            'nisn' => fake()->unique()->nik(),
            'gender' => fake()->randomElement(['Laki-Laki', 'Perempuan']),
            'tempatLahir' => fake()->city(),
            'tanggalLahir' => fake()->date('Y_m_d'),
            'token' => fake()->unique()->randomNumber(4, true),
        ];
    }
}
