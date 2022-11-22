<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/kelas/list', [
            'title' => 'Daftar Kelas',
            'res' => Group::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/kelas/tambah', [
            'title' => 'Tambah Kelas',
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
            'nama' => 'required|string|min:3|max:30',
        ]);
        $validated['uri'] = Str::random(35);

        Group::create($validated);
        return redirect('/dashboard')->with('success', 'Kelas berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $grup)
    {
        return view('admin/kelas/detail', [
            'title' => $grup->nama,
            'res' => $grup,
            'kelas' => Group::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $grup
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $grup)
    {
        return view('admin/kelas/ubah', [
            'title' => 'Ubah Siswa',
            'res' => $grup,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $grups
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $grup)
    {
        $validated = $request->validate([
            'nama' => 'required|string|min:3|max:30',
        ]);
        $grup->update($validated);
        return redirect('/dashboard')->with('success', 'data kelas berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $grup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $grup)
    {
        foreach ($grup->siswa as $item) {
            $item->update(['group_id' => NULL]);
        }
        $grup->delete();
        return redirect('/dashboard')->with('success', 'Kelas berhasil dihapus');
    }
}
