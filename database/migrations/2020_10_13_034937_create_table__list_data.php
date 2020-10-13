<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableListData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listdata', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('alamat');
            $table->string('nama');
            $table->integer('kondisi_atap');
            $table->integer('kondisi_lantai');
            $table->integer('kondisi_dinding');
            $table->bigInteger('penghasilan');
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
        Schema::dropIfExists('listdata');
    }
}
