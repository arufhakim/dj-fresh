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
        Schema::create('arsip', function (Blueprint $table) {
            $table->id();
            $table->string('bagian');
            $table->string('kode', 20);
            $table->mediumText('uraian');
            $table->year('tahun')->nullable();
            $table->string('no_rak', 20)->nullable();
            $table->string('no_ordner', 20)->nullable();
            $table->string('no_label', 20)->nullable();
            $table->string('lokasi', 100)->nullable();
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
        Schema::dropIfExists('arsip');
    }
};
