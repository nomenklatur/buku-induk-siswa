<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Dad;
use App\Models\Mom;
use App\Models\Guardian;
use App\Models\Biodata;

class Siswa extends Controller
{
    public function index(){
        return view('siswa/home', [
            'title' => 'Beranda',
        ]);
    }

    public function bio_form(Biodata $biodata){
        return view('siswa.biodata', [
            'title' => 'Biodata Siswa',
            'res' => $biodata,
        ]);
    }

    public function edit_bio(Request $request, Biodata $biodata){
        $validated = $request->validate([
            'alamat' => 'required|string',
            'kota' => 'required|string',
            'kecamatan' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required',
            'anak_ke' => 'required|gt:0',
            'jlh_saudara' => 'nullable|gt:0',
            'saudara_tiri' => 'nullable|gt:0',
            'saudara_angkat' => 'nullable|gt:0',
            'bahasa' => 'required',
            'agama' => 'required',
            'jarak' => 'required|gt:0',
            'nomor_hp' => 'nullable|string|max:13|regex:/[0-9]/',
            'goldar' => 'required',
            'tinggi' => 'required|gt:50',
            'berat' => 'required|gt:20',
            'penyakit' => 'nullable|string',
            'hobi' => 'nullable|string',
            'kewarganegaraan' => 'required|string',
            'sekolah_asal' => 'required',
        ]);
        
        Biodata::where('uri', $biodata->uri)->update($validated);
        return redirect('/home')->with('Updated', 'Biodata berhasil diperbarui!');
    }

    public function dad_form(Dad $dad){
        return view('siswa.ayah', [
            'title' => 'Data Ayah Siswa',
            'res' => $dad
        ]);
    }

    public function edit_dad(Request $request, Dad $dad){
        $validated = $request->validate([
            'nama' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'agama' => 'required',
            'kewarganegaraan' => 'required|string',
            'pekerjaan' => 'required|string',
            'pendidikan' => 'required',
            'penghasilan' => 'required|numeric',
            'alamat' => 'required|string|max:200',
            'nomor_hp' => 'required|string|max:13|regex:/[0-9]/',
            'status' => 'required',
        ]);
        Dad::where('uri', $dad->uri)->update($validated);
        return redirect('/home')->with('Updated', 'Data ayah siswa berhasil diperbarui');
    }

    public function mom_form(Mom $mom){
        return view('siswa.ibu', [
            'title' => 'Data Ibu Siswa',
            'res' => $mom
        ]);
    }

    public function edit_mom(Request $request, Mom $mom){
        $validated = $request->validate([
            'nama' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'agama' => 'required',
            'kewarganegaraan' => 'required|string',
            'pekerjaan' => 'required|string',
            'pendidikan' => 'required',
            'penghasilan' => 'nullable|numeric',
            'alamat' => 'required|string|max:200',
            'nomor_hp' => 'required|string|max:13|regex:/[0-9]/',
            'status' => 'required',
        ]);
        Mom::where('uri', $mom->uri)->update($validated);
        return redirect('/home')->with('Updated', 'Data ibu siswa berhasil diperbarui');
    }

    public function guardian_form(Guardian $guardian){
        return view('siswa.wali', [
            'title' => 'Data Wali Siswa',
            'res' => $guardian,
        ]);
    }

    public function edit_guardian(Request $request, Guardian $guardian){
        $validated = $request->validate([
            'nama' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'agama' => 'required',
            'kewarganegaraan' => 'required|string',
            'pekerjaan' => 'required|string',
            'pendidikan' => 'required',
            'penghasilan' => 'required|numeric',
            'alamat' => 'required|string|max:200',
            'nomor_hp' => 'required|string|max:13|regex:/[0-9]/',
        ]);
        Guardian::where('uri', $guardian->uri)->update($validated);
        return redirect('/home')->with('Updated', 'Data wali siswa berhasil diperbarui');
    }

    public function password_form(User $user){
        return view('siswa.password', [
            'title' => 'Ubah Password',
        ]);
    }

    public function change_password(Request $request, User $user){
        $validated = $request->validate([
            'old_password' => ['required', function ($attribute, $value, $fail) use ($user) {
                if (!\Hash::check($value, $user->password)) {
                    return $fail(__('Password saat ini tidak sesuai'));
                }
            }],
            'new_password' =>  [
                                    'required',
                                    'string',
                                    'min:8',             // must be at least 10 characters in length
                                    'regex:/[a-z]/',      // must contain at least one lowercase letter
                                    'regex:/[A-Z]/',      // must contain at least one uppercase letter
                                    'regex:/[0-9]/',      // must contain at least one digit
                                    'regex:/[@$!%*#?&]/', // must contain a special character
                                ],
        ]);
        $new_password = Hash::make($validated['new_password']);
        User::where('id', $user->id)->update(['password' => $new_password]);
        return redirect('/home')->with('Updated', 'Password berhasil diperbarui');
    }
}
