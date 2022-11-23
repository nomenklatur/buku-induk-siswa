@extends('layouts.base')

@section('content')
    <div class="container card shadow w-100 mb-3 mt-3 p-3">
      <div class="row mb-3">
        <h3 class="text-center text-uppercase">{{$title}}</h3>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <form action="/admin/tahun" method="post">
            @csrf
            <div class="input-group mb-3">
              <span class="input-group-text bg-light">Tahun Ajaran</span>
              <input type="text" class="form-control @error('tahun_ajaran') is-invalid @enderror" placeholder="Contoh : 2022/2023" name="tahun_ajaran">
              @error('tahun_ajaran')
                <div class="invalid-feedback">
                  {{ $message }}  
                </div>                   
              @enderror
            </div>
            <div class="mb-3">
              <p>Status Tahun Ajaran</p>
              <div class="form-check form-check-inline">
                <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" value="aktif">
                <label class="form-check-label" for="inlineRadio1">Aktif</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" value="tidak aktif">
                <label class="form-check-label" for="inlineRadio2">Tidak Aktif</label>
              </div>
              @error('status')
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