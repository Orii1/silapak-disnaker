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
        Schema::create('pendaftaran_pkwt', function (Blueprint $table) {
            $table->id('id_pkb');
            $table->foreignId('id_perusahaan')->references('id_perusahaan')->on('perusahaan');
            $table->string('peruntukan');
            $table->string('srt_permohonan_pencatatan_pkwt');
            $table->string('daftar_nama_pekerja_pkwt');
            $table->string('pkwt_asli');
            $table->string('fc_wlkp');
            $table->string('fc_akta_pendirian_perusahaan');
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
        Schema::dropIfExists('pendaftaran_pkwt');
    }
};
