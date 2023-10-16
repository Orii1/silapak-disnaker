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
        Schema::table('pencatatan_sp_sb', function (Blueprint $table) {
            $table->string('pesan', 100)->nullable()->after('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pencatatan_sp_sb', function (Blueprint $table) {
            if (Schema::hasColumn('pencatatan_sp_sb', 'pesan')) {
                $table->dropColumn('pesan');
            }
        });
    }
};
