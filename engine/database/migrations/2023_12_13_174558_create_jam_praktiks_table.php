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
        Schema::create('jam_praktik', function (Blueprint $table) {
            $table->id();
            $table->biginteger('klinik_id')->unsigned();
            $table->string('nama_klinik');
            $table->time('mulai');
            $table->time('selesai');
            $table->foreign('klinik_id')->references('id')->on('klinik')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jam_praktiks');
    }
};
