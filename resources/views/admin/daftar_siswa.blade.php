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
          <a href="" class="btn btn-warning"><i class="bi bi-printer me-2"></i>Cetak</a>
        </div>
      </div>
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
                  <td><a href="" class="text-decoration-none">{{$item->ayah->nama}}</a></td>
                  <td><a href="" class="text-decoration-none">{{$item->ibu->nama}}</a></td>
                  <td class="d-flex">
                    <form action="/admin/siswa/{{$item->nisn}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-sm btn-danger me-1" onclick="return confirm('Anda yakin akan menghapus calon legislatif ini?')"><i class="bi bi-trash"></i></button>
                    </form>
                    <a href="" class="btn btn-sm btn-info me-1"><i class="bi bi-eye"></i></a> 
                    <a href="" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                  </td>
                </tr>
            @endforeach
          </table>
          <div class="d-flex justify-content-center">
            {{ $res->links() }}
          </div>
        </div>
      </div>
    </div>
@endsection