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
        Schema::create('pengesahan_pp', function (Blueprint $table) {
            $table->id('id_pp');
            $table->foreignId('id_perusahaan')->references('id_perusahaan')->on('perusahaan');
            $table->string('peruntukan');
            $table->string('fc_wlkp');
            $table->string('fc_akta_pendirian_perusahaan');
            $table->string('fc_sertifikat_peserta_bpjs_ketenagakerjaan');
            $table->string('permohonan_pengesahan_pp');
            $table->string('surat_pernyataan_saran_spsb');
            $table->string('surat_pernyataan_belum_terbentuk_spsb');
            $table->string('surat_pernyataan_struktur_skala_upah');
            $table->string('struktur_skala_upah_asli');
            $table->string('draft_pp');
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
        Schema::dropIfExists('pengesahan_pp');
    }
};
