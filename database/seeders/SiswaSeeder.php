<?php

namespace Database\Seeders;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::factory(50)->create()->each(function ($siswa) {
            User::factory()->create([
                'role_id' => 3,
                'username' => $siswa->username,
                'password' => bcrypt($siswa->token),
            ]);
        });
    }
}
