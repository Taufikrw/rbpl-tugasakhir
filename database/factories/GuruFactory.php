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
        $firstName = fake()->firstName();
        return [
            'firstName' => $firstName,
            'lastName' => fake()->lastName(),
            'username' => $firstName . fake()->unique()->randomNumber(3, true),
            // 'foto' => fake()->imageUrl('human', true),
            'nip' => fake()->unique()->nik(),
            'gender' => fake()->randomElement(['Laki-Laki', 'Perempuan']),
            'tempatLahir' => fake()->city(),
            'tanggalLahir' => fake()->date('Y_m_d', '2000-01-01'),
            'token' => fake()->unique()->randomNumber(4, true),
        ];
    }
}
