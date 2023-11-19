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
        Schema::create('detail_gambar_kompetensi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_foto');
            $table->string('nama_foto_kompetensi');
            $table->timestamps();

            $table->foreign('id_foto')->references('id')->on('kompetensis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_gambar_kompetensi');
    }
};
