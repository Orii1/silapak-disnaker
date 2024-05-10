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
        Schema::create('detail_pengecekan', function (Blueprint $table) {
            $table->id('id_detail_pengecekan');
            $table->string('hasil_pengecekan');
            $table->foreignId('id_pegawai')->references('id_pegawai')->on('pegawai');
            $table->string('pesan');
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
        Schema::dropIfExists('detail_pengecekan');
    }
};
