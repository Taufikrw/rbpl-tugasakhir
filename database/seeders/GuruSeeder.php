<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::factory(10)->create()->each(function ($guru) {
            User::factory()->create([
                'role_id' => 2,
                'username' => $guru->username,
                'password' => bcrypt($guru->token)
            ]);
        });
    }
}
