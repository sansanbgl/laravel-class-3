<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Dosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('dosen', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matakuliah_id')->unsignned();
            $table->integer('unit_id')->unsignned();
            $table->string('nip', 20);
            $table->string('nama', 80);
            $table->string('pangkat', 20);
            $table->datetime('ttl');
            $table->timestamps();
            $table->softDeletes();

        });

        Schema::create('matakuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode', 10);
            $table->string('nama', 20);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unit_id')->unsignned();
            $table->string('nim');
            $table->string('nama');
            $table->datetime('ttl');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('krs', function (Blueprint $table) {
            $table->integer('matakuliah_id')->unsignned();
            $table->integer('mahasiswa_id')->unsignned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dosen');
        Schema::drop('matakuliah');
        Schema::drop('unit');
        Schema::drop('mahasiswa');
        Schema::drop('krs');
    }
}
