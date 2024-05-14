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
        Schema::create('pencatatan_penyelasaian_hi', function (Blueprint $table) {
            $table->id('id_hi');
            $table->foreignId('id_perusahaan')->references('id_perusahaan')->on('perusahaan');
            $table->string('peruntukan');
            $table->string('permohonan_pencatatan_pphi');
            $table->string('surat_permintaan_perundingan_bipartit');
            $table->string('daftar_hadir_perundingan_bipartit');
            $table->string('risalah_perundingan_bipartit');
            $table->foreignId('id_detail_status')->references('id_detail_status')->on('detail_status');
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
        Schema::dropIfExists('pencatatan_penyelasaian_hi');
    }
};
