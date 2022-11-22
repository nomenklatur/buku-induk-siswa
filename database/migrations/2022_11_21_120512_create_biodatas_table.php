<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->onDelete('cascade');
            $table->string('uri')->unique();
            $table->string('alamat')->nullable();
            $table->string('sekolah_asal')->nullable();
            $table->string('kota')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->integer('anak_ke')->nullable();
            $table->integer('jlh_saudara')->nullable();
            $table->integer('saudara_tiri')->nullable();
            $table->integer('saudara_angkat')->nullable();
            $table->string('bahasa')->nullable();
            $table->string('agama')->nullable();
            $table->integer('jarak')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->string('goldar')->nullable();
            $table->integer('tinggi')->nullable();
            $table->integer('berat')->nullable();
            $table->string('penyakit')->nullable();
            $table->string('hobi')->nullable();
            $table->string('kewarganegaraan')->nullable();
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
        Schema::dropIfExists('biodatas');
    }
}
