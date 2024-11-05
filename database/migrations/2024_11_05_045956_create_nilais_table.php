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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id('idnilai');
            $table->foreignId('idmahasiswa')->constrained('mahasiswas')->onDelete('cascade');
            $table->integer('data_mining')->nullable();
            $table->integer('pengenalan_basis_data')->nullable();
            $table->integer('interaksi_manusia_komputer')->nullable();
            $table->integer('pemrograman_website')->nullable();
            $table->integer('rekayasa_perangkat_lunak')->nullable();
            $table->integer('it_proyek')->nullable();
            $table->integer('pemrograman_visual')->nullable();
            $table->integer('sistem_informasi')->nullable();
            $table->integer('jaringan_komputer')->nullable();
            $table->integer('keamanan_informasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
