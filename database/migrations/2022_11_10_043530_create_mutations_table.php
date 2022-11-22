<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMutationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->onDelete('cascade');
            $table->string('uri')->unique();
            $table->string('pindah_ke')->nullable();
            $table->string('alasan_ke')->nullable();
            $table->string('nomor_ijazah')->nullable();
            $table->string('tanggal_ijazah')->nullable();
            $table->string('pindah_dari')->nullable();
            $table->string('alasan_dari')->nullable();
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
        Schema::dropIfExists('mutations');
    }
}
