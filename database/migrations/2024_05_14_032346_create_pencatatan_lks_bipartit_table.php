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
        Schema::create('pencatatan_lks_bipartit', function (Blueprint $table) {
            $table->id('id_lks');
            $table->foreignId('id_perusahaan')->references('id_perusahaan')->on('perusahaan');
            $table->string('peruntukan');
            $table->string('permohonan_pencatatan_lks_bipartit');
            $table->string('daftar_susunan_pengurus_lks_bipartit');
            $table->string('berita_acara_pembentukan_lks_bipartit');
            $table->string('fc_wlkp');
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
        Schema::dropIfExists('pencatatan_lks_bipartit');
    }
};
