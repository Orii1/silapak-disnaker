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
        Schema::create('pencatatan_spsb', function (Blueprint $table) {
            $table->id('id_spsb');
            $table->foreignId('id_perusahaan')->references('id')->on('perusahaan');
            $table->string('peruntukan');
            $table->string('surat_permohonan');
            $table->string('ad_art');
            $table->string('nama_pembentuk');
            $table->string('nama_pengurus');
            $table->string('ba_pembentukan');
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
        Schema::dropIfExists('pencatatan_spsb');
    }
};
