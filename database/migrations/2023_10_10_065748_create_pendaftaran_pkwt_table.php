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
            $table->id();
            $table->foreignId('user_id')->constrained('Users');
            $table->string('peruntukan');
            $table->string('srt_permohonan_pencatatan_pkwt');
            $table->string('daftar_nama_pekerja_pkwt');
            $table->string('pkwt_asli');
            $table->string('fc_wlkp');
            $table->string('fc_akta_pendirian_perusahaan');
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
        Schema::dropIfExists('pendaftaran_pkwt');
    }
};
