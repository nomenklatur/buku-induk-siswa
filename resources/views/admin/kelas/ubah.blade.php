@extends('layouts.base')

@section('content')
    <div class="container card shadow mt-3 mb-3 p-3">
      <div class="row mb-3">
        <h3 class="text-center text-uppercase">{{$title}}</h3>
      </div>
      <div class="row justify-content-center mb-3">
        <div class="col-lg-9">
          <form action="/admin/grup/{{$res->uri}}" method="post">
            @method('put')
            @csrf
            <div class="input-group mb-3">
              <span class="input-group-text bg-light">Nama Kelas</span>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Contoh : 10 IPA 1" name="nama" value="{{$res->nama}}">
              @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}  
                </div>                   
              @enderror
            </div>
            <div class="d-grip gap-2 mb-3 w-100">
              <p class="fw-light"><span class="text-danger fw-bold">*</span> pastikan data yang kamu masukkan benar dan sesuai ketentuan</p>
              <button type="submit" class="btn btn-primary w-100"><i class="bi bi-cloud-check me-2"></i> Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection