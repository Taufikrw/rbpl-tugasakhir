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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->integer('idClass');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('username')->unique();
            $table->string('nisn')->unique();
            $table->string('gender');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            // $table->string('foto');
            $table->string('token')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
