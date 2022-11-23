@extends('layouts.base')

@section('content')
    <div class="container card shadow mt-3 mb-3 p-3 w-100">
      <div class="row mb-3">
        <h3 class="text-center text-uppercase">{{$title}}</h3>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <table class="table">
            <thead>
              <th>#</th>
              <th>Tahun Ajaran</th>
              <th>Status</th>
              <th></th>
            </thead>
            @foreach ($res as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->tahun_ajaran}}</td>
                  <td>
                    @if ($item->status === 'aktif')
                        <button class="btn btn-sm btn-success">{{$item->status}}</button>
                    @else
                        <button class="btn btn-sm btn-secondary">{{$item->status}}</button>
                    @endif
                  </td>
                  <td>
                        <a href="/admin/tahun/{{$item->id}}" class="btn btn-sm btn-info me-1"><i class="bi bi-eye"></i></a>
                        <a href="/admin/tahun/{{$item->id}}/edit" class="btn btn-warning btn-sm me-1"><i class="bi bi-pencil"></i></a>
                        <form action="/admin/tahun/{{$item->id}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm me-1" onclick="return confirm('Anda yakin akan menghapus tahun ajaran ini?')"><i class="bi bi-trash"></i></button>
                        </form>
                  </td>
                </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
@endsection