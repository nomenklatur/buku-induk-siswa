<?php

namespace App\Http\Controllers;
use App\Models\User;
use PDF;
use Illuminate\Http\Request;

class Printer extends Controller
{
    public function daftar_siswa(){
        $res = User::where('status', 'siswa')->get();
        $pdf = PDF::loadView('printout/daftar_siswa', ['res' => $res]);
        return $pdf->download('Daftar Siswa.pdf');
    }

    public function data_siswa(User $siswa){
        $pdf = PDF::loadView('printout/buku_induk_siswa', ['res' => $siswa]);
        return $pdf->download('Buku Induk '.$siswa->nama_lengkap.'.pdf');
    }
}
