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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->bigInteger('nik')->nullable();
            $table->string('umur');
            $table->bigInteger('jlh_pinjam');
            $table->string('tujuan');
            $table->bigInteger('pendapatan');
            $table->string('pekerjaan');
            $table->string('tenor');
            $table->string('pernikahan');
            $table->string('tanggungan');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
