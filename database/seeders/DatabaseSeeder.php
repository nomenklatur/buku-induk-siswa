<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Biodata;
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
            'year_id' => 0,
            'group_id' => 0,
            'nama_lengkap' => 'Admin',
            'foto' => NULL,
            'nisn' => 'XXXXXXXXXX',
            'nis' => 'YYYYYYYYY',
            'status' => 'admin',
            'email' => 'adminweb@gmail.com',
            'password' => Hash::make('admin123'),
            'jenis_kelamin' => 'L',
        ]);

        DB::table('users')->insert([
            'year_id' => 1,
            'group_id' => 1,
            'nama_lengkap' => 'Siswa',
            'foto' => NULL,
            'nisn' => '1233123341',
            'nis' => '1233123',
            'status' => 'siswa',
            'email' => 'tesakunsiswa@gmail.com',
            'password' => Hash::make('siswa123'),
            'jenis_kelamin' => 'L',
        ]);

        DB::table('biodatas')->insert([
            'user_id' => 2,
            'uri' => Str::random(50),
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

        
        DB::table('groups')->insert([
            'nama' => 'Elektro 10',
            'uri' => Str::random(50),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('years')->insert([
            'tahun_ajaran' => '2022/2023',
            'status' => 'aktif',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::factory(19)
            ->has(Biodata::factory()->count(1), 'biodata')
            ->has(Dad::factory()->count(1),'ayah')
            ->has(Mom::factory()->count(1),'ibu')
            ->has(Guardian::factory()->count(1),'wali')
            ->create();
    }
}
