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
    Schema::create('booking', function (Blueprint $table) {
        $table->id('id_booking');
        $table->unsignedBigInteger('id_user');
        $table->unsignedBigInteger('id_paket');
        $table->date('tanggal_booking');
        $table->string('lokasi');
        $table->string('status');
        $table->foreign('id_user')
              ->references('id_user')
              ->on('users');
        $table->foreign('id_paket')
              ->references('id_paket')
              ->on('paket_foto');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
