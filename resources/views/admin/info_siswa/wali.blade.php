@extends('layouts.base')

@section('content')
    <div class="container card shadow my-3 p-3">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <h3 class="text-uppercase fw-bold text-center">{{$title}}</h3>
        </div>
      </div>
      <form action="/admin/wali/{{$res->uri}}" method="post" class="mx-3 my-3">
        @method('put')
        @csrf
      <div class="row">
          <div class="col-lg-4">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama lengkap</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{$res->nama}}" placeholder="Contoh: Agus Rahman">
              @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}  
                </div>                   
              @enderror
            </div>
            <div class="mb-3">
              <label for="tempat_lahir" class="form-label">Kota Kelahiran</label>
              <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{$res->tempat_lahir}}" placeholder="Contoh: Denpasar">
              @error('tempat_lahir')
                <div class="invalid-feedback">
                  {{ $message }}  
                </div>                   
              @enderror
            </div>
            <div class="mb-3">
              <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{$res->tanggal_lahir}}" >
              @error('tanggal_lahir')
                <div class="invalid-feedback">
                  {{ $message }}  
                </div>                   
              @enderror
            </div>
            <div class="mb-3">
              <label for="agama" class="form-label">Agama</label>
              <select class="form-select" name="agama">
                <option value="Islam" @if ($res->agama === 'Islam') selected @endif>Islam</option>
                <option value="Protestan" @if ($res->agama === 'Protestan') selected @endif>Protestan</option>
                <option value="Katholik" @if ($res->agama === 'Katholik') selected @endif>Katholik</option>
                <option value="Buddha" @if ($res->agama === 'Buddha') selected @endif>Buddha</option>
                <option value="Hindu" @if ($res->agama === 'Hindu') selected @endif>Hindu</option>
              </select>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="mb-3">
              <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
              <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror" name="kewarganegaraan" value="{{$res->kewarganegaraan}}" placeholder="Contoh: Indonesia">
              @error('kewarganegaraan')
                <div class="invalid-feedback">
                  {{ $message }}  
                </div>                   
              @enderror
            </div>
            <div class="mb-3">
              <label for="pekerjaan" class="form-label">Pekerjaan</label>
              <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{$res->pekerjaan}}" placeholder="Contoh: Juru masak">
              @error('pekerjaan')
                <div class="invalid-feedback">
                  {{ $message }}  
                </div>                   
              @enderror
            </div>
            <div class="mb-3">
              <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
              <select class="form-select" name="pendidikan">
                <option value="SD/Sederajat" @if ($res->pendidikan === 'SD/Sederajat') selected @endif>SD/Sederajat</option>
                <option value="SMP/Sederajat" @if ($res->pendidikan === 'SMP/Sederajat') selected @endif>SMP/Sederajat</option>
                <option value="SMA/Sederajat" @if ($res->pendidikan === 'SMA/Sederajat') selected @endif>SMA/Sederajat</option>
                <option value="Diploma" @if ($res->pendidikan === 'Diploma') selected @endif>Diploma</option>
                <option value="Strata-1" @if ($res->pendidikan === 'Strata-1') selected @endif>Strata-1</option>
                <option value="Strata-2" @if ($res->pendidikan === 'Strata-2') selected @endif>Strata-2</option>
                <option value="Strata-3" @if ($res->pendidikan === 'Strata-3') selected @endif>Strata-3</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="penghasilan" class="form-label">Penghasilan perbulan</label>
              <input type="number" class="form-control @error('penghasilan') is-invalid @enderror" name="penghasilan" value="{{$res->penghasilan}}" placeholder=" Contoh: 3000000">
              @error('penghasilan')
                <div class="invalid-feedback">
                  {{ $message }}  
                </div>                   
              @enderror
            </div>
          </div>
          <div class="col-lg-4">
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat sesuai KTP</label>
              <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{$res->alamat}}" placeholder="Jl. Bata No.7, Medan Tembung, Medan">
              @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}  
                </div>                   
              @enderror
            </div>
            <div class="mb-3">
              <label for="nomor_hp" class="form-label">Nomor Telefon</label>
              <input type="text" class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp" value="{{$res->nomor_hp}}" placeholder="Contoh: 081234567891">
              @error('nomor_hp')
                <div class="invalid-feedback">
                  {{ $message }}  
                </div>                   
              @enderror
            </div>
          </div>
        </div>
        <div class="d-grip gap-2 mb-3 w-100">
          <p class="fw-light"><span class="text-danger fw-bold">*</span> pastikan data yang kamu masukkan benar dan sesuai ketentuan</p>
          <button type="submit" class="btn btn-primary w-100"><i class="bi bi-cloud-check me-2"></i> Simpan</button>
        </div>
      </form>
    </div>
@endsection