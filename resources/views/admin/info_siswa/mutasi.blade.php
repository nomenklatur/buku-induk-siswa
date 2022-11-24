@extends('layouts.base')

@section('content')
    <div class="container card shadow mt-3 mb-3 p-3">
      <div class="row mb-3">
        <h3 class="text-uppercase text-center">{{$title}}</h3>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <form action="/admin/mutasi/{{$res->nisn}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="tujuan" class="form-label">Tujuan Sekolah Siswa</label>
              <input type="text" class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" value="@if($res->mutasi) {{$res->mutasi->tujuan}} @endif" placeholder="Contoh: SMKN 2 Jakarta Barat">
              @error('tujuan')
                <div class="invalid-feedback">
                  {{ $message }}  
                </div>                   
              @enderror
            </div>
            <div class="mb-3">
              <label for="alasan" class="form-label">Alasan Pindah Sekolah</label>
              <input type="text" class="form-control @error('alasan') is-invalid @enderror" name="alasan" value="@if($res->mutasi) {{$res->mutasi->alasan}} @endif" placeholder="Contoh: SMKN 2 Jakarta Barat">
              @error('alasan')
                <div class="invalid-feedback">
                  {{ $message }}  
                </div>                   
              @enderror
            </div>
            <div class="mb-3">
              <label for="tanggal_pindah" class="form-label">Tanggal Kepindahan</label>
              <input type="date" class="form-control @error('tanggal_pindah') is-invalid @enderror" name="tanggal_pindah" value="@if($res->mutasi) {{$res->mutasi->tanggal_pindah}} @endif" >
              @error('tanggal_pindah')
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