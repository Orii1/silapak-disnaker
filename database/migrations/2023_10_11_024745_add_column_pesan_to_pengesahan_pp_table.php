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
        Schema::table('pengesahan_pp', function (Blueprint $table) {
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
        Schema::table('pengesahan_pp', function (Blueprint $table) {
            if (Schema::hasColumn('pengesahan_pp', 'pesan')) {
                $table->dropColumn('pesan');
            }
        });
    }
};
