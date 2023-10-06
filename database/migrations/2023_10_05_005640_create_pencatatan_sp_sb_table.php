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
        Schema::create('pencatatan_sp_sb', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('Users');
            $table->string('surat_permohonan');
            $table->string('ad_art');
            $table->string('nama_pembentuk');
            $table->string('nama_pengurus');
            $table->string('ba_pembentukan');
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
        Schema::dropIfExists('pencatatan_sp_sb');
    }
};
