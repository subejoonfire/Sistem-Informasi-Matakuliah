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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id('idmahasiswa');
            $table->foreignId('idkelas')->constrained('kelas')->onDelete('cascade')->nullable();
            $table->foreignId('iddospem')->constrained('dospems')->onDelete('cascade')->nullable();
            $table->string('namamahasiswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
