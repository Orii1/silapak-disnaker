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
        Schema::create('pencatatan_lks_bipartit', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('Users');
            $table->string('peruntukan');
            $table->string('permohonan_pencatatan_lks_bipartit');
            $table->string('daftar_susunan_pengurus_lks_bipartit');
            $table->string('berita_acara_pembentukan_lks_bipartit');
            $table->string('fc_wlkp');
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
        Schema::dropIfExists('pencatatan_lks_bipartit');
    }
};
