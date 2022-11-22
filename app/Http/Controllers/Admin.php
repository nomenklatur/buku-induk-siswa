<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dad;
use App\Models\Mutation;
use App\Models\Mom;
use App\Models\Group;
use App\Models\Guardian;
use App\Models\Year;
use App\Models\Biodata;

class Admin extends Controller
{
    public function index(){
        $mutasi = Mutation::latest()->get();
        $murid = User::where('status', 'siswa')->get();
        $tahun = Year::where('status', 'aktif')->get();
        $siswa_yatim_piatu = $murid->filter(function($val){ if($val->ayah->status === 'Telah Meninggal' || $val->ibu->status === 'Telah Meninggal'){ return $val;} });
        $siswa_kurang_mampu = $murid->filter(function($val){ return $val->ayah->penghasilan + $val->ibu->penghasilan < 3000000; });
        $siswa = Biodata::latest()->get();
        $kelas = Group::latest()->get();
        return view('admin/dashboard', [
            'title' => 'Dashboard',
            'jumlah_siswa' => $siswa->count(),
            'siswa' => $siswa,
            'jumlah_kelas' => $kelas->count(),
            'kelas' => $kelas,
            'jumlah_mutasi' => $mutasi->count(),
            'mutasi' => $mutasi,
            'murid_perempuan' => $murid->where('jenis_kelamin', 'P')->count(),
            'murid_laki' => $murid->where('jenis_kelamin', 'L')->count(),
            'siswa_kurang_mampu' => $siswa_kurang_mampu->count(),
            'siswa_yatim_piatu' => $siswa_yatim_piatu->count(),
            'tahun' => $tahun[0],
        ]);
    }

    public function move_students(Request $request){
        return $request;
    }
}
