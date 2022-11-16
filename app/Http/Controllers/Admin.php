<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dad;
use App\Models\Mutation;
use App\Models\Mom;
use App\Models\Group;
use App\Models\Guardian;
use App\Models\Student;

class Admin extends Controller
{
    public function index(){
        $mutasi = Mutation::latest()->get();
        $siswa = Student::latest()->get();
        $kelas = Group::latest()->get();
        return view('admin/dashboard', [
            'title' => 'Dashboard',
            'jumlah_siswa' => $siswa->count(),
            'siswa' => $siswa,
            'jumlah_kelas' => $kelas->count(),
            'kelas' => $kelas,
            'jumlah_mutasi' => $mutasi->count(),
            'mutasi' => $mutasi
        ]);
    }
}
