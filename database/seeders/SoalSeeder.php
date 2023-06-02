<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Soal;
use Illuminate\Support\Facades\DB;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('soals')->insert([
            'idClass' => 1,
            'idMapel' => 1,
            'processingTime' => now(),
            'duration' => now()->addMinute(120),
        ]);
    }
}
