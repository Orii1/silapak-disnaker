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
        Schema::create('asset', function (Blueprint $table) {
            $table->id();
            $table->string('alur_perizinan')->nullable();
            $table->string('dasar_hukum')->nullable();
            $table->string('durasi_pemrosesan')->nullable();
            $table->string('kontak')->nullable();
            $table->string('retribusi')->nullable();
            $table->string('maklumat')->nullable();
            $table->string('visi_misi')->nullable();
            $table->string('motto')->nullable();
            $table->string('template_1')->nullable();
            $table->string('template_2')->nullable();
            $table->string('template_3')->nullable();
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
        Schema::dropIfExists('asset');
    }
};
