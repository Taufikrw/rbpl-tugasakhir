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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('guruFirstName');
            $table->string('guruLastName');
            $table->string('nip')->unique();
            $table->string('guruGender');
            $table->string('guruTempatLahir');
            $table->date('guruTanggalLahir');
            $table->string('guruFoto');
            $table->string('guruToken')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
