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
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id('id_perusahaan');
            $table->foreignId('id_user')->references('id_user')->on('users');
            $table->string('nama_perusahaan', 100);
            $table->string('alamat', 100);
            $table->string('pemilik', 100);
            $table->foreignId('id_tipe_perusahaan')->references('id_tipe_perusahaan')->on('tipe_perusahaan');
            $table->string('sektor');
            $table->foreignId('id_status_perusahaan')->references('id_status_perusahaan')->on('status_perusahaan');
            $table->foreignId('id_modal')->references('id_modal')->on('modal');
            $table->string('nomor_surat_izin_usaha');
            $table->string('tgl_surat_izin_usaha');
            $table->string('laki_laki');
            $table->string('perempuan');
            $table->string('pkwt');
            $table->string('outsourcing');
            $table->string('wna');
            $table->string('no_bpjs_ketenagakerjaan');
            $table->string('no_bpjs_kesehatan');
            $table->string('latitude');
            $table->string('longtitude');
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
        Schema::dropIfExists('perusahaan');
    }
};
