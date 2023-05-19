<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Siswa::create([
        //     'nama' => 'Taufik Rahman',
        //     'foto' => 'taufik.jpg',
        //     'nisn' => '124210031',
        // ]);

        \App\Models\Siswa::factory(10)->create();
    }
}
