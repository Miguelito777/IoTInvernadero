<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tt_riego', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado','8')->nullable();
            $table->timestamps();
        });
        Schema::create('tt_ambiente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado','8')->nullable();
            $table->timestamps();
        });
        Schema::create('tt_tierra', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado','8')->nullable();
            $table->timestamps();
        });
        Schema::create('tt_calefaccion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado','8')->nullable();
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
        Schema::dropIfExists('tt_riego');
        Schema::dropIfExists('tt_ambiente');
        Schema::dropIfExists('tt_tierra');
        Schema::dropIfExists('tt_calefaccion');
    }
}
