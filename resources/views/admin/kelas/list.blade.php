@extends('layouts.base')

@section('content')
    <div class="container card shadow w-100 mt-3 mb-3">
      <div class="row mb-3">
        <h3 class="text-center">{{$title}}</h3>
      </div>
      <div class="row">
        @if (count($res) === 0)
            <div class="col-lg-9 text-center">
              <img src="images/empty.jpg" alt="" class="img-fluid">
              <h2 class="text-capitalized">belum ada data kelas</h2>
              <a href="" class="btn btn-primary btn-lg"><i class="bi bi-plus me-2"></i> Tambah Kelas</a>
            </div>
        @else
            <div class="col-lg-9">
              <table class="table">
                <thead>
                  <th>Nama</th>
                  <th>Jumlah Siswa</th>
                  <th></th>
                </thead>
                @foreach ($res as $item)
                    <tr>
                      <td>{{$item->nama}}</td>
                      <td>{{count($item->siswa)}}</td>
                      <td>
                        <a href="admin/kelas/{{$item->uri}}" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a>
                        <a href="admin/kelas/{{$item->uri}}/edit" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
                        <form action="admin/kelas/{{$item->uri}}">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                @endforeach
              </table>
            </div>
        @endif
      </div>
    </div>
@endsection