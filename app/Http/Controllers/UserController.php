<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dad;
use App\Models\Mom;
use App\Models\Student;
use App\Models\Mutation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        return view('admin/daftar_siswa', [
            'title' => 'Daftar Siswa',
            'res' => $siswa->filter(request(['cari']))->paginate(50)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/tambah_siswa',[
            'title' => 'Tambah Siswa',
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
            'jenis_kelamin' => 'required',
            'email' => 'required|email:dns',
            'foto' => 'nullable|image|file|max:1024',
        ]);
        if($request->file('foto')){
            $validated['foto'] = $request->file('foto')->store('foto-siswa');
        }
        $validated['status'] = 'siswa';
        $validated['password'] = Hash::make(Str::random(10));
        $validated['year_id'] = 1; 

        $user = User::create($validated);
        $ayah = $user->ayah()->create(['uri' => Str::random(40)]);
        $ibu = $user->ibu()->create(['uri' => Str::random(40)]);
        $biodata = $user->biodata()->create(['uri' => Str::random(40)]);
        $wali = $user->wali()->create(['uri' => Str::random(40)]);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
