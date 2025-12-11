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
        $firstName = fake()->firstName();
        return [
            'idClass' => fake()->numberBetween(1, 6),
            'firstName' => fake()->firstName(),
            'lastName' => fake()->lastName(),
            'username' => strtolower(preg_replace('/\s+/', '', $firstName)) . fake()->unique()->numerify('###'),
            // 'foto' => fake()->imageUrl('human', true),
            'nisn' => fake()->unique()->nik(),
            'gender' => fake()->randomElement(['Laki-Laki', 'Perempuan']),
            'tempatLahir' => fake()->city(),
            'tanggalLahir' => fake()->dateTimeBetween('2011-01-01', '2018-12-31')->format('Y-m-d'),
            'token' => fake()->unique()->randomNumber(4, true),
        ];
    }
}
