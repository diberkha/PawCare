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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('nama_klinik');
            $table->bigInteger('user_id')->unsigned();
            $table->string('kategori');
            $table->string('jadwal');
            $table->text('complaint');
            $table->date('tanggal_jadwal');
            $table->string('status');
            $table->time('waktu_pembuatan');
            $table->date('tanggal_pembuatan');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
