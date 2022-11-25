@extends('layouts.base')

@section('content')
      @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert" style="z-index: 1">
            <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
    <div class="container w-80 mt-3 mb-3 p-3">
      <div class="row mb-3">
        <div class="col-lg-4">
          <div class="card shadow" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-people-fill me-2"></i>Jumlah Siswa : {{$jumlah_siswa}}</h5>
              <small class="mb-3 text-muted">terakhir diperbarui : {{$siswa[0]->created_at->diffForHumans()}}</small>
              <a href="/admin/siswa/create" class="btn btn-primary btn-sm mt-3"><i class="bi bi-plus me-2"></i>Tambah</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card shadow" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-house me-2"></i>Jumlah Kelas : {{$jumlah_kelas}}</h5>
              @if ($jumlah_kelas > 0)
                <small class="mb-3 text-muted">terakhir diperbarui : {{$kelas[0]->created_at->diffForHumans()}}</small>
              @else
                <br>
              @endif
              <a href="/admin/grup/create" class="btn btn-primary btn-sm mt-3"><i class="bi bi-plus me-2"></i>Tambah</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card shadow" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-arrow-left-right me-2"></i>Mutasi Siswa : {{$jumlah_mutasi}}</h5>
              @if ($jumlah_mutasi > 0)
                <small class="mb-3 text-muted">terakhir diperbarui : {{$mutasi[0]->created_at->diffForHumans()}}</small>
              @else
                <br>
              @endif
              <a href="/admin/mutasi" class="btn btn-info btn-sm mt-3"><i class="bi bi-eye me-2"></i>Lihat</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-lg-8" style="height: 400px">
          <div class="h-100 p-5 shadow bg-white jumbo-bg">
            <h2>Selamat Datang, {{auth()->user()->nama_lengkap}}</h2>
            <p>Sistem ini dibangun sebagai bentuk digitalisasi proses administrasi penyimpanan data induk siswa</p>
            <a href="/admin/print" class="btn btn-warning w-30"><i class="bi bi-eye me-3"></i>Buku Induk Siswa</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card shadow mb-3" style="width: 18rem;">
            <div class="card-header">
              Data Lainnya
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Murid Perempuan = {{$murid_perempuan}}</li>
              <li class="list-group-item">Murid Laki-laki = {{$murid_laki}}</li>
              <li class="list-group-item">Siswa Yatim/Piatu = {{$siswa_yatim_piatu}}</li>
              <li class="list-group-item">Siswa Kurang Mampu = {{$siswa_kurang_mampu}}</li>
            </ul>
          </div>
          <div class="card shadow" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title mb-3"><i class="bi bi-calendar me-1"></i>Tahun Ajaran  @if(count($tahun) > 0) {{$tahun[0]->tahun_ajaran}} @endif</h5>
              <a href="/admin/tahun" class="btn btn-primary btn-sm text-center"><i class="bi bi-pencil me-2"></i>Ubah</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <style>
      .jumbo-bg{
        background-image: url('/images/jumbotron.png');
        background-position: bottom;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 350px;
      }
    </style>
@endsection