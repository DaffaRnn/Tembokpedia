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
        Schema::create('registrasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('relawan_id')->constrained('relawans')->onDelete('cascade');
            $table->foreignId('program_id')->constrained('programs')->onDelete('cascade');
            $table->boolean('diterima')->nullable(); // null: belum diproses
            $table->text('alasan')->nullable();      // opsional, bisa dikosongkan
            $table->timestamps();

            $table->unique(['relawan_id', 'program_id']); // Satu relawan tidak boleh daftar dua kali ke program yang sama
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
