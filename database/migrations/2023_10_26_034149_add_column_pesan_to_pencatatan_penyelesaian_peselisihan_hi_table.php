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
        Schema::table('pencatatan_penyelesaian_peselisihan_hi', function (Blueprint $table) {
            $table->string('pesan', 255)->nullable()->after('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pencatatan_penyelesaian_peselisihan_hi', function (Blueprint $table) {
            //
        });
    }
};
