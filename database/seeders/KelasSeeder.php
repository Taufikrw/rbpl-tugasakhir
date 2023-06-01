<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([
            'className' => 'A',
            'classLevel' => 1,
            'classYear' => 2023,
        ]);
        DB::table('kelas')->insert([
            'className' => 'A',
            'classLevel' => 2,
            'classYear' => 2023,
        ]);
        DB::table('kelas')->insert([
            'className' => 'A',
            'classLevel' => 3,
            'classYear' => 2023,
        ]);
        DB::table('kelas')->insert([
            'className' => 'A',
            'classLevel' => 4,
            'classYear' => 2023,
        ]);
        DB::table('kelas')->insert([
            'className' => 'B',
            'classLevel' => 5,
            'classYear' => 2023,
        ]);
        DB::table('kelas')->insert([
            'className' => 'C',
            'classLevel' => 6,
            'classYear' => 2023,
        ]);
    }
}
