@extends('layouts.base')

@section('content')
    <div class="container card shadow w-100 mt-3 mb-3 p-3">
      <div class="row justify-content-center">
        <h3 class="text-center"><i class="bi bi-person me-2"></i> Data Induk siswa</h3>
        <div class="col-lg-4 pt-2 text-center">
          <a href="" class="btn btn-warning btn-sm"><i class="bi bi-printer me-2"></i>Cetak</a>
          <a href="" class="btn btn-success btn-sm"><i class="bi bi-pencil me-2"></i>Ayah</a>
          <a href="" class="btn btn-sm" style="background-color: pink;"><i class="bi bi-pencil me-2"></i>Ibu</a>
          <a href="" class="btn btn-sm" style="background-color: skyblue;"><i class="bi bi-arrow-left-right me-2"></i>mutasi</a>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3">
          <img src="@if ($res->foto === NULL) @if($res->jenis_kelamin === 'L') /images/male.png @else /images/female.png @endif @else {{asset('storage/'.$res->foto)}}  @endif" class="img-fluid rounded-start" alt="..." style="max-width: 220px">
        </div>
        <div class="col-lg-5" style="padding-top: 30px;">
          <h3 class="mb-3 text-uppercase">{{$res->nama_lengkap}}</h3>
          <h5 class="fw-normal">Nomor Induk Siswa Nasional : {{$res->nisn}}</h5>
          <h5 class="fw-normal">Nomor Induk Siswa : {{$res->nis}}</h5>
          <p>diterima pada tahun ajaran </p>
        </div>
      </div>
      <div class="row mb-3">
        <h3 class="mb-3">A. Keterangan Siswa</h3>
        <div class="col-lg-5">
          <table class="table">
            <tr>
              <th>Alamat</th>
              <td>:</td>
              <td>{{$res->biodata->alamat}}</td>
            </tr>
            <tr>
              <th>Kota</th>
              <td>:</td>
              <td>{{$res->biodata->kota}}</td>
            </tr>
            <tr>
              <th>Kecamatan</th>
              <td>:</td>
              <td>{{$res->biodata->kecamatan}}</td>
            </tr>
            <tr>
              <th>Kelahiran</th>
              <td>:</td>
              <td>{{$res->biodata->tempat_lahir}}</td>
            </tr>
            <tr>
              <th>Tanggal Lahir</th>
              <td>:</td>
              <td>{{$res->biodata->tanggal_lahir}}</td>
            </tr>
            <tr>
              <th>Anak ke</th>
              <td>:</td>
              <td>{{$res->biodata->anak_ke}}</td>
            </tr>
            <tr>
              <th>Saudara Kandung</th>
              <td>:</td>
              <td>{{$res->biodata->jlh_saudara}}</td>
            </tr>
            <tr>
              <th>Saudara Angkat</th>
              <td>:</td>
              <td>{{$res->biodata->saudara_angkat}}</td>
            </tr>
            <tr>
              <th>Saudara Tiri</th>
              <td>:</td>
              <td>{{$res->biodata->saudara_tiri}}</td>
            </tr>
          </table>
        </div>
        <div class="col-lg-5">
          <table class="table">
            <tr>
              <th>Bahasa</th>
              <td>:</td>
              <td>{{$res->biodata->bahasa}}</td>
            </tr>
            <tr>
              <th>Agama</th>
              <td>:</td>
              <td>{{$res->biodata->agama}}</td>
            </tr>
            <tr>
              <th>Kewarganegaraan</th>
              <td>:</td>
              <td>{{$res->biodata->kewarganegaraan}}</td>
            </tr>
            <tr>
              <th>Kegemaran</th>
              <td>:</td>
              <td>{{$res->biodata->hobi}}</td>
            </tr>
            <tr>
              <th>Jarak ke sekolah</th>
              <td>:</td>
              <td>{{$res->biodata->jarak}}</td>
            </tr>
            <tr>
              <th>Nomor HP</th>
              <td>:</td>
              <td>{{$res->biodata->nomor_hp}}</td>
            </tr>
            <tr>
              <th>Alamat Email</th>
              <td>:</td>
              <td>{{$res->email}}</td>
            </tr>
            <tr>
              <th>Golongan Darah</th>
              <td>:</td>
              <td>{{$res->biodata->goldar}}</td>
            </tr>
            <tr>
              <th>Tinggi Badan</th>
              <td>:</td>
              <td>{{$res->biodata->tinggi}} Cm</td>
            </tr>
            <tr>
              <th>Berat Badan</th>
              <td>:</td>
              <td>{{$res->biodata->berat}}</td>
            </tr>
            <tr>
              <th>Riwayat Penyakit</th>
              <td>:</td>
              <td>{{$res->biodata->penyakit}}</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="row mb-3">
        <h3 class="mb-3">B. Keterangan Orang Tua Siswa</h3>
        <div class="col-lg-5">
          <table class="table">
            <tr>
              <th>Nama Ayah</th>
              <td>:</td>
              <td>{{$res->ayah->nama}}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
@endsection