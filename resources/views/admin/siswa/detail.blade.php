@extends('layouts.base')

@section('content')
    <div class="container card shadow w-100 mt-3 mb-3 p-3">
      <div class="row justify-content-center">
        <h3 class="text-center"><i class="bi bi-person me-2"></i> Data Induk siswa</h3>
        <div class="col-lg-8 pt-2 text-center">
          <a href="/admin/print/{{$res->nisn}}" class="btn btn-warning btn-sm"><i class="bi bi-printer me-2"></i>Cetak</a>
          <a href="/admin/ayah/{{$res->ayah->uri}}" class="btn btn-success btn-sm"><i class="bi bi-pencil me-2"></i>Ayah</a>
          <a href="/admin/ibu/{{$res->ibu->uri}}" class="btn btn-sm" style="background-color: pink;"><i class="bi bi-pencil me-2"></i>Ibu</a>
          <a href="/admin/biodata/{{$res->biodata->uri}}" class="btn btn-secondary btn-sm"><i class="bi bi-pencil me-2"></i>Biodata</a>
          <a href="/admin/guardian/{{$res->wali->uri}}" class="btn btn-sm" style="background-color: greenyellow"><i class="bi bi-pencil me-2"></i>Wali</a>
          <a href="/admin/mutasi/{{$res->nisn}}" class="btn btn-sm" style="background-color: skyblue;"><i class="bi bi-arrow-left-right me-2"></i>Mutasi</a>
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
          <p>diterima pada tahun ajaran {{$res->tahun_ajar->tahun_ajaran}}</p>
        </div>
      </div>
      <div class="row mb-3 justify-content-center">
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
              <th>Sekolah Asal</th>
              <td>:</td>
              <td>{{$res->biodata->sekolah_asal}}</td>
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
              <td>{{$res->biodata->jarak.' Km'}}</td>
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
              <td>{{$res->biodata->tinggi.' Cm'}}</td>
            </tr>
            <tr>
              <th>Berat Badan</th>
              <td>:</td>
              <td>{{$res->biodata->berat.' Kg'}}</td>
            </tr>
            <tr>
              <th>Riwayat Penyakit</th>
              <td>:</td>
              <td>{{$res->biodata->penyakit}}</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="row mb-3 justify-content-center">
        <h3 class="mb-3">B. Keterangan Orang Tua Siswa</h3>
        <div class="col-lg-5">
          <table class="table">
            <tr>
              <th>Nama Ayah</th>
              <td>:</td>
              <td>{{$res->ayah->nama}}</td>
            </tr>
            <tr>
              <th>Alamat Ayah</th>
              <td>:</td>
              <td>{{$res->ayah->alamat}}</td>
            </tr>
            <tr>
              <th>Kota Kelahiran Ayah</th>
              <td>:</td>
              <td>{{$res->ayah->tempat_lahir}}</td>
            </tr>
            <tr>
              <th>Tanggal Lahir Ayah</th>
              <td>:</td>
              <td>{{$res->ayah->tanggal_lahir}}</td>
            </tr>
            <tr>
              <th>Agama Ayah</th>
              <td>:</td>
              <td>{{$res->ayah->agama}}</td>
            </tr>
            <tr>
              <th>Kewarganegaraan Ayah</th>
              <td>:</td>
              <td>{{$res->ayah->kewarganegaraan}}</td>
            </tr>
            <tr>
              <th>Pekerjaan Ayah</th>
              <td>:</td>
              <td>{{$res->ayah->pekerjaan}}</td>
            </tr>
            <tr>
              <th>Pendidikan Terakhir Ayah</th>
              <td>:</td>
              <td>{{$res->ayah->pendidikan}}</td>
            </tr>
            <tr>
              <th>Penghasilan perbulan Ayah</th>
              <td>:</td>
              <td>{{'Rp. '.number_format($res->ayah->penghasilan, 2,',', '.')}}</td>
            </tr>
            <tr>
              <th>Nomor Telefon</th>
              <td>:</td>
              <td>{{$res->ayah->nomor_hp}}</td>
            </tr>
          </table>
        </div>
        <div class="col-lg-5">
          <table class="table">
            <tr>
              <th>Nama ibu</th>
              <td>:</td>
              <td>{{$res->ibu->nama}}</td>
            </tr>
            <tr>
              <th>Alamat ibu</th>
              <td>:</td>
              <td>{{$res->ibu->alamat}}</td>
            </tr>
            <tr>
              <th>Kota Kelahiran ibu</th>
              <td>:</td>
              <td>{{$res->ibu->tempat_lahir}}</td>
            </tr>
            <tr>
              <th>Tanggal Lahir ibu</th>
              <td>:</td>
              <td>{{$res->ibu->tanggal_lahir}}</td>
            </tr>
            <tr>
              <th>Agama ibu</th>
              <td>:</td>
              <td>{{$res->ibu->agama}}</td>
            </tr>
            <tr>
              <th>Kewarganegaraan ibu</th>
              <td>:</td>
              <td>{{$res->ibu->kewarganegaraan}}</td>
            </tr>
            <tr>
              <th>Pekerjaan ibu</th>
              <td>:</td>
              <td>{{$res->ibu->pekerjaan}}</td>
            </tr>
            <tr>
              <th>Pendidikan Terakhir ibu</th>
              <td>:</td>
              <td>{{$res->ibu->pendidikan}}</td>
            </tr>
            <tr>
              <th>Penghasilan perbulan ibu</th>
              <td>:</td>
              <td>{{'Rp. '.number_format($res->ibu->penghasilan, 2,',', '.')}}</td>
            </tr>
            <tr>
              <th>Nomor Telefon</th>
              <td>:</td>
              <td>{{$res->ibu->nomor_hp}}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
@endsection