<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pertanyaans')->insert([
            'idSoal' => 1,
            'questionType' => 'pilgan',
            'question' => 'Manakah yang merupakan hewan mamalia?',  
            'answerOption1' => 'sapi',
            'answerOption2' => 'angsa',
            'answerOption3' => 'ayam',
            'answerOption4' => 'ikan',
            'answerKey' => 'sapi',
        ]);

        DB::table('pertanyaans')->insert([
            'idSoal' => 1,
            'questionType' => 'isianSingkat',
            'question' => 'Sapi memiliki kaki', 
            'answerKey' => 'empat',
        ]);
        DB::table('pertanyaans')->insert([
            'idSoal' => 1,
            'questionType' => 'essay',
            'question' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, ea.', 
        ]);
    }
}
