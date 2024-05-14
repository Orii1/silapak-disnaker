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
        Schema::create('pelaporan_phk', function (Blueprint $table) {
            $table->id('id_phk');
            $table->foreignId('id_perusahaan')->references('id_perusahaan')->on('perusahaan');
            $table->string('peruntukan');
            $table->string('permohonan_pelaporan_phk');
            $table->string('surat_pemberitahuan_phk');
            $table->string('surat_tanggapan_pemberitahuan_phk');
            $table->string('pb_bipartit');
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
        Schema::dropIfExists('pelaporan_phk');
    }
};
