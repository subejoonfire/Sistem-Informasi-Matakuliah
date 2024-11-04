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
        Schema::create('dospems', function (Blueprint $table) {
            $table->id('iddospem');
            $table->foreignId('idjabatan')->nullable();
            $table->json('idmatakuliah')->nullable();
            $table->string('namadosen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dospems');
    }
};
