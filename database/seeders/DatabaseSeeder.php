<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama_lengkap' => 'Admin',
            'foto' => NULL,
            'nisn' => 'XXXXXXXXXX',
            'nis' => 'YYYYYYYYY',
            'status' => 'admin',
            'email' => 'adminweb@gmail.com',
            'password' => Hash::make('admin123'),
            'jenis_kelamin' => 'L',
            'tahun_ajar' => 'n',
        ]);

        DB::table('users')->insert([
            'nama_lengkap' => 'Siswa',
            'foto' => NULL,
            'nisn' => '1233123341',
            'nis' => '1233123',
            'status' => 'siswa',
            'email' => 'tesakunsiswa@gmail.com',
            'password' => Hash::make('siswa123'),
            'jenis_kelamin' => 'L',
            'tahun_ajar' => 'n',
        ]);
    }
}
