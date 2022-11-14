<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dad;
use App\Models\Mom;
use App\Models\Guardian;
use App\Models\Student;

class Siswa extends Controller
{
    public function index(){
        return view('siswa/home', [
            'title' => 'Beranda',
        ]);
    }

    public function bio_form(Student $student){
        return view('siswa.biodata', [
            'title' => 'Biodata Siswa',
            'res' => $student,
        ]);
    }

    public function edit_bio(Request $request, Student $student){
        $validated = $request->validate([
            'alamat' => 'nullable|string',
            'kota' => 'nullable|string',
            'kecamatan' => 'nullable',
            'tempat_lahir' => 'nullable',
            'tanggal_lahir' => 'nullable',
            'anak_ke' => 'nullable',
            'jlh_saudara' => 'nullable',
            'saudara_tiri' => 'nullable',
            'saudara_angkat' => 'nullable',
            'bahasa' => 'nullable',
            'agama' => 'nullable',
            'jarak' => 'nullable',
            'nomor_hp' => 'nullable|string',
            'goldar' => 'nullable',
            'tinggi' => 'nullable',
            'berat' => 'nullable',
            'penyakit' => 'nullable',
            'hobi' => 'nullable',
            'kewarganegaraan' => 'nullable|string',
        ]);
        
        Student::where('uri', $student->uri)->update($validated);
        return redirect('/home')->with('Updated', 'Biodata berhasil diperbarui!');
    }

    public function dad_form(Student $student){
        return view('siswa.ayah', [
            'title' => 'Data Ayah Siswa',
            'res' => $student
        ]);
    }
}
