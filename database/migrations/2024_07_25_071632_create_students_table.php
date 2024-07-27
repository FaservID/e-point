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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->unique();
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->enum('jenis_kelamin', ['laki-laki','perempuan']);
            $table->foreignId('kelas_id')->constrained('kelas')->cascadeOnDelete();
            $table->string('no_wa_ortu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
