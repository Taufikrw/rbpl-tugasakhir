<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mapels')->insert([
            'idClass' => 1,
            'idGuru' => 1,
            'matkulName' => 'IPA',
        ]);
        DB::table('mapels')->insert([
            'idClass' => 1,
            'idGuru' => 2,
            'matkulName' => 'IPS',
        ]);
        DB::table('mapels')->insert([
            'idClass' => 1,
            'idGuru' => 3,
            'matkulName' => 'PKn',
        ]);
        DB::table('mapels')->insert([
            'idClass' => 1,
            'idGuru' => 4,
            'matkulName' => 'Seni Budaya',
        ]);
        DB::table('mapels')->insert([
            'idClass' => 1,
            'idGuru' => 5,
            'matkulName' => 'Matematika',
        ]);
        DB::table('mapels')->insert([
            'idClass' => 1,
            'idGuru' => 6,
            'matkulName' => 'Bahasa Indonesia',
        ]);
        DB::table('mapels')->insert([
            'idClass' => 1,
            'idGuru' => 7,
            'matkulName' => 'Bahasa Inggris',
        ]);
    }
}
