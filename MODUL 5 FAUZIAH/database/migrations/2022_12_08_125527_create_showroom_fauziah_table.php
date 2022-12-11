<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showroom_fauziah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_mobil',255);
            $table->string('pemilik_mobil',255);
            $table->string('merk_mobil',255);
            $table->date('tanggal_beli');
            $table->string('deskripsi',255);
            $table->string('foto_mobil',255);
            $table->string('status_pembayaran',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showroom_fauziah');
    }
};
