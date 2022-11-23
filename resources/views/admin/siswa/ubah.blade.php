@extends('layouts.base')

@section('content')
<div class="container card shadow mt-3 mb-3 p-3">
  <div class="row justify-content-center mb-3">
    <h4 class="text-uppercase text-center">Ubah Data Siswa</h4>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <form action="/admin/siswa/{{$res->nisn}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="nama_lengkap" class="form-label">Nama Lengkap Siswa</label>
          <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{$res->nama_lengkap}}">
          @error('nama_lengkap')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="nisn" class="form-label">Nomor Induk Siswa Nasional</label>
          <input type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{$res->nisn}}">
          @error('nisn')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="nis" class="form-label">Nomor Induk Siswa</label>
          <input type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{$res->nis}}">
          @error('nis')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Alamat Email Siswa (Gmail)</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$res->email}}">
          @error('email')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="foto" class="form-label">Pas Foto Siswa</label>
          <input class="form-control @error('foto') is-invalid @enderror" type="file" name="foto">
          @error('foto')
            <div class="invalid-feedback">
              {{ $message }}  
            </div>                   
          @enderror
        </div>
        <div class="mb-3">
          <label for="group_id" class="form-label">Kelas Siswa</label>
          <select class="form-select @error('group_id') is-invalid @enderror" name='group_id'>
            @foreach ($kelas as $item)
                <option value="{{$item->id}}" @if ($res->group_id === $item->id) selected @endif>{{$item->nama}}</option>
            @endforeach
          </select>
          @error('group_id')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="year_id" class="form-label">Tahun Ajaran siswa Didaftarkan</label>
          <select class="form-select @error('year_id') is-invalid @enderror" name='year_id'>
            @foreach ($tahun as $item)
                <option value="{{$item->id}}" @if ($res->year_id === $item->id) selected @endif>{{$item->tahun_ajaran}}</option>
            @endforeach
          </select>
          @error('year_id')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <p>Jenis Kelamin</p>
          <div class="form-check form-check-inline">
            <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin" value="L" @if($res->jenis_kelamin === 'L') checked @endif>
            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin" value="P" @if($res->jenis_kelamin === 'P') checked @endif>
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
          </div>
          @error('jenis_kelamin')
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