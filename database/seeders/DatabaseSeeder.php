<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Student;
use App\Models\Dad;
use App\Models\Mom;
use App\Models\Guardian;

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
            'year_id' => 1,
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
            'year_id' => 1,
        ]);

        DB::table('students')->insert([
            'user_id' => 2,
            'uri' => Str::random(50)
        ]);

        DB::table('dads')->insert([
            'user_id' => 2,
            'uri' => Str::random(50)
        ]);

        DB::table('moms')->insert([
            'user_id' => 2,
            'uri' => Str::random(50)
        ]);

        DB::table('guardians')->insert([
            'user_id' => 2,
            'uri' => Str::random(50)
        ]);

        User::factory(120)
            ->has(Student::factory()->count(1), 'biodata')
            ->has(Dad::factory()->count(1),'ayah')
            ->has(Mom::factory()->count(1),'ibu')
            ->create();
    }
}
