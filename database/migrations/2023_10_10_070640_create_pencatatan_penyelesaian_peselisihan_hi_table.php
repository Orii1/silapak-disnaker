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
        Schema::create('pencatatan_penyelesaian_peselisihan_hi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('Users');
            $table->string('permohonan_pencatatan_pphi');
            $table->string('surat_permintaan_perundingan_bipartit');
            $table->string('daftar_hadir_perundingan_bipartit');
            $table->string('risalah_perundingan_bipartit');
            $table->string('status', 1)->default('0');
            $table->string('sk', 255)->nullable();
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
        Schema::dropIfExists('pencatatan_penyelesaian_peselisihan_hi');
    }
};
