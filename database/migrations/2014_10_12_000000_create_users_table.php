<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->foreignId('year_id');
            $table->foreignId('group_id');
            $table->string('nama_lengkap');
            $table->string('foto')->nullable();
            $table->string('nisn')->unique();
            $table->string('nis')->unique();
            $table->string('status');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('jenis_kelamin');
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
}
