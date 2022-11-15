@extends('layouts.base')

@section('content')
    <div class="container card shadow mt-3 p-3">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h4 class="text-uppercase fw-bold text-center mb-3">Ubah Password</h4>
          <form action="/password/{{auth()->user()->nisn}}" method="post">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="old_password" class="form-label">Password saat ini</label>
              <input type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password">
              @error('old_password')
                <div class="invalid-feedback">
                  {{ $message }}  
                </div>                   
              @enderror
            </div>
            <div class="mb-3">
              <label for="new_password" class="form-label">Password baru</label>
              <input type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password">
              <div class="form-text">Password minimal 8 karakter, dengan huruf kapital, angka, dan simbol</div>
              @error('new_password')
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