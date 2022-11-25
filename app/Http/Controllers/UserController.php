<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = User::where('status', 'siswa');
        return view('admin/siswa/list', [
            'title' => 'Daftar Siswa',
            'res' => $siswa->filter(request(['cari']))->paginate(30)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/siswa/tambah',[
            'title' => 'Tambah Siswa',
            'kelas' => Group::latest()->get(),
            'tahun' => Year::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|max:50',
            'nisn' => 'required|max:16|regex:/[0-9]/',
            'nis' => 'required|max:16|regex:/[0-9]/',
            'group_id' => 'required',
            'year_id' => 'required',
            'jenis_kelamin' => 'required',
            'email' => 'required|email:dns',
            'foto' => 'nullable|image|file|max:1024',
        ]);
        if($request->file('foto')){
            $validated['foto'] = $request->file('foto')->store('foto-siswa');
        }
        $validated['status'] = 'siswa';
        $validated['password'] = Hash::make('siswa123');

        $user = User::create($validated);
        $ayah = $user->ayah()->create(['uri' => Str::random(40)]);
        $ibu = $user->ibu()->create(['uri' => Str::random(40)]);
        $biodata = $user->biodata()->create(['uri' => Str::random(40)]);
        $wali = $user->wali()->create(['uri' => Str::random(40)]);
        return redirect('/dashboard')->with('success', 'Siswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $siswa)
    {
        return view('admin/siswa/detail', [
            'title' => $siswa->nama_lengkap,
            'res' => $siswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $siswa)
    {
        return view('admin/siswa/ubah', [
            'title' => 'Ubah Data Siswa',
            'res' => $siswa,
            'kelas' => Group::latest()->get(),
            'tahun' => Year::latest()->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $siswa)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|max:50',
            'nisn' => 'required|max:16|regex:/[0-9]/',
            'nis' => 'required|max:16|regex:/[0-9]/',
            'jenis_kelamin' => 'required',
            'group_id' => 'required',
            'year_id' => 'required',
            'email' => 'required|email:dns',
            'foto' => 'nullable|image|file|max:1024',
        ]);
        if ($request->file('foto')) {
            if($siswa->foto != null){
                Storage::delete($siswa->foto);
            }
            $validated['foto'] = $request->file('foto')->store('foto-siswa');
        }
        
        $siswa->update($validated);
        return redirect('/dashboard')->with('success', 'Data siswa berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $siswa)
    {
        Storage::delete($siswa->foto);
        $siswa->biodata()->delete();
        $siswa->ayah()->delete();
        $siswa->ibu()->delete();
        $siswa->wali()->delete();
        $siswa->mutasi()->delete();
        $siswa->delete();
        return redirect('/dashboard')->with('success', 'Data siswa berhasil dihapus');
    }
}
