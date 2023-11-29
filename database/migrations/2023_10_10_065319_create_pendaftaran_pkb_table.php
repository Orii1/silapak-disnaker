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
            $table->id();
            $table->foreignId('user_id')->constrained('Users');
            $table->string('peruntukan');
            $table->string('fc_wlkp');
            $table->string('fc_akta_pendirian_perusahaan');
            $table->string('fc_setifikat_peserta_bpjs_ketenagakerjaan');
            $table->string('permohonan_pendaftaran_pkb');
            $table->string('surat_pernyataan_struktur_skala_upah');
            $table->string('struktur_skala_upah_asli');
            $table->string('draft_pkb');
            $table->string('status', 1)->default('3');
            $table->string('sk', 255)->nullable();
            $table->string('keterangan', 100)->nullable();
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
