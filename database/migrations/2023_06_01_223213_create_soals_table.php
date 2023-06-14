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
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->string('kuisName');
            $table->integer('idClass');
            $table->integer('idMapel');
            $table->integer('jumlahPilihanGanda');
            $table->integer('poinPilihanGanda');
            $table->integer('jumlahIsianSingkat');
            $table->integer('poinIsianSingkat');
            $table->integer('jumlahEssay');
            $table->integer('poinEssay');
            $table->timestamp('processingTime')->nullable();
            $table->timestamp('duration')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soals');
    }
};
