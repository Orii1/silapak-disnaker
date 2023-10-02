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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('role_id', 1);
            $table->string('name', 100);
            $table->string('address', 255);
            $table->string('owner', 50);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('type')->nullable();
            $table->string('sector')->nullable();
            $table->string('status')->nullable();
            $table->string('number_letter')->nullable();
            $table->date('date_latter')->nullable();
            $table->string('men', 3)->nullable();
            $table->string('woman', 3)->nullable();
            $table->string('pkwt')->nullable();
            $table->string('outsourcing')->nullable();
            $table->string('wna')->nullable();
            $table->string('number_ketenagakerjaan')->nullable();
            $table->string('number_kesehatan')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
