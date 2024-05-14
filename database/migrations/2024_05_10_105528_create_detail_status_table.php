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
        Schema::create('detail_status', function (Blueprint $table) {
            $table->id('id_detail_status');
            $table->foreignId('id_status')->references('id_status')->on('status')->default('1');
            $table->foreignId('id_detail_pengecekan')->references('id_detail_pengecekan')->on('detail_pengecekan');
            $table->string('keterangan', 100);
            $table->string('sk', 100)->nullable();
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
        Schema::dropIfExists('detail_status');
    }
};
