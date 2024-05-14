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
        Schema::create('pendaftaran_pkb', function (Blueprint $table) {
            $table->id('id_pkb');
            $table->foreignId('id_perusahaan')->references('id_perusahaan')->on('perusahaan');
            $table->string('peruntukan');
            $table->string('fc_wlkp');
            $table->string('fc_akta_pendirian_perusahaan');
            $table->string('fc_setifikat_peserta_bpjs_ketenagakerjaan');
            $table->string('permohonan_pendaftaran_pkb');
            $table->string('surat_pernyataan_struktur_skala_upah');
            $table->string('struktur_skala_upah_asli');
            $table->string('draft_pkb');
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
        Schema::dropIfExists('pendaftaran_pkb');
    }
};
