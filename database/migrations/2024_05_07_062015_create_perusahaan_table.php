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
            $table->id();
            $table->foreignId('id_user')->references('id')->on('users');
            $table->string('nama_perusahaan', 100)->nullable();
            $table->string('alamat', 100)->nullable();
            $table->string('pemilik', 100)->nullable();
            $table->foreignId('id_tipe_perusahaan')->references('id_tipe_perusahaan')->on('tipe_perusahaan')->nullable();
            $table->string('sektor')->nullable();
            $table->foreignId('id_status_perusahaan')->references('id_status_perusahaan')->on('status_perusahaan')->nullable();
            $table->foreignId('id_modal')->references('id_modal')->on('modal')->nullable();
            $table->string('nomor_surat_izin_usaha')->nullable();
            $table->string('tgl_surat_izin_usaha')->nullable();
            $table->string('laki_laki')->nullable();
            $table->string('perempuan')->nullable();
            $table->string('pkwt')->nullable();
            $table->string('outsourcing')->nullable();
            $table->string('wna')->nullable();
            $table->string('no_bpjs_ketenagakerjaan')->nullable();
            $table->string('no_bpjs_kesehatan')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longtitude')->nullable();
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
