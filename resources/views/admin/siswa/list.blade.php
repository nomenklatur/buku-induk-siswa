@extends('layouts.base')

@section('content')
    <div class="container card shadow border-info mt-3 mb-3">
      <div class="row mt-3 mb-3 justify-content-center">
        <div class="col-lg-3">
          <h3>Daftar Siswa</h3>
        </div>
        <div class="col-lg-6">
          <form action="/admin/siswa">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Cari.." name="cari" value="{{ request('cari')}}">
              <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
            </div>
          </form>
        </div>
        <div class="col-lg-2">
          <a href="/admin/print" class="btn btn-warning"><i class="bi bi-printer me-2"></i>Cetak</a>
        </div>
      </div>
      @if($res->count())
      <div class="row justify-content-center">
        <div class="col-lg-11">
          <table class="table">
            <thead>
              <th>#</th>
              <th>Nama Siswa</th>
              <th>NISN</th>
              <th>Data Ayah Siswa</th>
              <th>Data Ibu Siswa</th>
              <th>Aksi</th>
            </thead>
            @foreach ($res as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->nama_lengkap}}</td>
                  <td>{{$item->nisn}}</td>
                  <td><a href="/admin/ayah/{{$item->ayah->uri}}" class="text-decoration-none">{{$item->ayah->nama}}</a></td>
                  <td><a href="/admin/ibu/{{$item->ibu->uri}}" class="text-decoration-none">{{$item->ibu->nama}}</a></td>
                  <td class="d-flex">
                    <form action="/admin/siswa/{{$item->nisn}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-sm btn-danger me-1" onclick="return confirm('Anda yakin akan menghapus siswa ini?')"><i class="bi bi-trash"></i></button>
                    </form>
                    <a href="/admin/siswa/{{$item->nisn}}" class="btn btn-sm btn-info me-1"><i class="bi bi-eye"></i></a> 
                    <a href="/admin/siswa/{{$item->nisn}}/edit" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                  </td>
                </tr>
            @endforeach
          </table>
          <div class="d-flex justify-content-center">
            {{ $res->links() }}
          </div>
        </div>
      </div>
      @else
        <div class="row justify-content-center mb-3 p-3">
          <div class="col-lg-9 text-center">
            <img src="/images/empty.jpg" alt="" class="img-fluid" width="200px">
            <h2 class="text-uppercase text-warning fw-bold mb-3">data siswa tidak ditemukan</h2>
            <a href="/admin/siswa/create" class="btn btn-primary btn-lg"><i class="bi bi-plus me-2"></i> Tambah Siswa</a>
          </div>
        </div>
    </div>
    @endif
@endsection