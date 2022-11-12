<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dad;
use App\Models\Mom;
use App\Models\Guardian;
use App\Models\Student;

class SiswaController extends Controller
{
    public function index(){
        return view('dashboard/siswa', [
            'title' => 'Beranda',
        ]);
    }

    public function show_bio(){
        
        $biodata = Student::firstWhere('user_id', auth()->id())->get();
        return view('siswa/biodata', [
            'title' => 'Biodata Siswa',
            'biodata' => $biodata[0],
        ]);
    }

    public function show_dad(){
        $data_ayah = Dad::firstWhere('user_id', auth()->id())->get();
        return view('siswa/data_ayah', [
            'title' => 'Data Ayah Siswa',
            'data' => $data_ayah[0],
        ]);
    }

    public function show_mom(){
        $data_ibu = Mom::firstWhere('user_id', auth()->id())->get();
        return view('siswa/data_ibu', [
            'title' => 'Data Ibu Siswa',
            'data' => $data_ibu,
        ]);
    }

    public function show_guard(){
        $data_wali = Guardian::firstWhere('user_id', auth()->id())->get();
        return view('siswa/data_wali', [
            'title' => 'Data Wali Siswa',
            'data' => $data_wali[0],
        ]);
    }
}
