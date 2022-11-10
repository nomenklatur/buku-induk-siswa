<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('alamat');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->integer('anak_ke');
            $table->integer('jlh_saudara');
            $table->integer('saudara_tiri');
            $table->integer('saudara_angkat');
            $table->string('bahasa');
            $table->string('agama');
            $table->integer('jarak');
            $table->string('nomor_hp')->nullable();
            $table->string('goldar');
            $table->integer('tinggi');
            $table->integer('berat');
            $table->string('penyakit');
            $table->string('hobi');
            $table->string('kewarganegaraan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
