<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pertanyaans', function (Blueprint $table) {
            $table->id();
            $table->integer('idSoal');
            $table->enum('questionType', ['pilgan', 'isianSingkat', 'Essay']);
            $table->string('question');
            $table->string('answerOption1')->nullable();
            $table->string('answerOption2')->nullable();
            $table->string('answerOption3')->nullable();
            $table->string('answerOption4')->nullable();
            $table->string('answerKey')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertanyaans');
    }
};
