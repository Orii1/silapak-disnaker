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
            $table->id();
            $table->foreignId('user_id')->constrained('Users');
            $table->string('peruntukan');
            $table->string('permohonan_pelaporan_phk');
            $table->string('surat_pemberitahuan_phk');
            $table->string('surat_tanggapan_pemberitahuan_phk');
            $table->string('pb_bipartit');
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
        Schema::dropIfExists('pelaporan_phk');
    }
};
