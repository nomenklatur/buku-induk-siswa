@extends('layouts.base')

@section('content')
    <div class="container shadow card mb-3 mt-3 p-3">
      <div class="row mb-3">
        <h3 class="text-center text-uppercase">{{$title}}</h3>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <table class="table">
            <thead>
              <th>Nama Siswa</th>
              <th>Tujuan Sekolah</th>
              <th>Alasan Kepindahan</th>
              <th>Tanggal</th>
              <th></th>
            </thead>
            @foreach ($res as $item)
                @foreach ($siswa as $key)
                    @if ($item->user_id === $key->id)
                    <tr>
                      <td>{{$key->nama_lengkap}}</td>
                      <td>{{$item->tujuan}}</td>
                      <td>{{$item->alasan}}</td>
                      <td>{{$item->tanggal_pindah}}</td>
                      <td><a href="/admin/mutasi/{{$key->nisn}}" class="text-decoration-none">ubah</a></td>
                    </tr>
                    @endif
                @endforeach
            @endforeach
          </table>
        </div>
      </div>
    </div>
@endsection