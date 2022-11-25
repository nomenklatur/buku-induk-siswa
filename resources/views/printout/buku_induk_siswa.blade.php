<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Buku Induk Siswa</title>
</head>
<body>
  <div style="margin: 20px; width: 100%;">
    <h1 style="text-align: center">Buku Induk Siswa</h1>
    <table style="width: 100%">
      <tr>
        <td style="width:500px;">
          <h5>Nama : {{$res->nama_lengkap}}</h5>
          <h6>NISN : {{$res->nisn}}</h6>
          <h6>NIS : {{$res->nis}}</h6>
        </td>
        <td>
          <img src="images/gambar.png" alt="" width="120px">
        </td>
      </tr>
    </table>
    <div style="margin-bottom: 30px; width: 100%;">
      <h3 style="margin-bottom: 20px;">A. Keterangan Siswa</h3>
      <table style="text-align: left;">
        <tr>
          <td style="width:350px;">Alamat</td>
          <td>:</td>
          <td>{{$res->biodata->alamat}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Kota</td>
          <td>:</td>
          <td>{{$res->biodata->kota}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Sekolah Asal</td>
          <td>:</td>
          <td>{{$res->biodata->sekolah_asal}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Kecamatan</td>
          <td>:</td>
          <td>{{$res->biodata->kecamatan}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Kelahiran</td>
          <td>:</td>
          <td>{{$res->biodata->tempat_lahir}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Tanggal Lahir</td>
          <td>:</td>
          <td>{{$res->biodata->tanggal_lahir}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Anak ke</td>
          <td>:</td>
          <td>{{$res->biodata->anak_ke}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Saudara Kandung</td>
          <td>:</td>
          <td>{{$res->biodata->jlh_saudara}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Saudara Angkat</td>
          <td>:</td>
          <td>{{$res->biodata->saudara_angkat}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Saudara Tiri</td>
          <td>:</td>
          <td>{{$res->biodata->saudara_tiri}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Bahasa</td>
          <td>:</td>
          <td>{{$res->biodata->bahasa}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Agama</td>
          <td>:</td>
          <td>{{$res->biodata->agama}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Kewarganegaraan</td>
          <td>:</td>
          <td>{{$res->biodata->kewarganegaraan}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Kegemaran</td>
          <td>:</td>
          <td>{{$res->biodata->hobi}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Jarak ke sekolah</td>
          <td>:</td>
          <td>{{$res->biodata->jarak.' Km'}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Nomor HP</td>
          <td>:</td>
          <td>{{$res->biodata->nomor_hp}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Alamat Email</td>
          <td>:</td>
          <td>{{$res->email}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Golongan Darah</td>
          <td>:</td>
          <td>{{$res->biodata->goldar}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Tinggi Badan</td>
          <td>:</td>
          <td>{{$res->biodata->tinggi.' Cm'}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Berat Badan</td>
          <td>:</td>
          <td>{{$res->biodata->berat.' Kg'}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Riwayat Penyakit</td>
          <td>:</td>
          <td>{{$res->biodata->penyakit}}</td>
        </tr>
      </table>
    </div>
    <div style="margin-bottom: 30px; width: 100%;">
      <h3>B. Keterangan Ayah Siswa</h3>
      <table style="text-align: left;">
        <tr>
          <td style="width:350px;">Nama Ayah</td>
          <td>:</td>
          <td>{{$res->ayah->nama}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Alamat Ayah</td>
          <td>:</td>
          <td>{{$res->ayah->alamat}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Kota Kelahiran Ayah</td>
          <td>:</td>
          <td>{{$res->ayah->tempat_lahir}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Tanggal Lahir Ayah</td>
          <td>:</td>
          <td>{{$res->ayah->tanggal_lahir}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Agama Ayah</td>
          <td>:</td>
          <td>{{$res->ayah->agama}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Kewarganegaraan Ayah</td>
          <td>:</td>
          <td>{{$res->ayah->kewarganegaraan}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Pekerjaan Ayah</td>
          <td>:</td>
          <td>{{$res->ayah->pekerjaan}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Pendidikan Terakhir Ayah</td>
          <td>:</td>
          <td>{{$res->ayah->pendidikan}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Penghasilan perbulan Ayah</td>
          <td>:</td>
          <td>{{'Rp. '.number_format($res->ayah->penghasilan, 2,',', '.')}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Nomor Telefon</td>
          <td>:</td>
          <td>{{$res->ayah->nomor_hp}}</td>
        </tr>
      </table>
    </div>
    <div style="margin-bottom: 30px; width: 100%;">
      <h3>C. Keterangan Ibu Siswa</h3>
      <table style="text-align: left;">
        <tr>
          <td style="width:350px;">Nama ibu</td>
          <td>:</td>
          <td>{{$res->ibu->nama}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Alamat ibu</td>
          <td>:</td>
          <td>{{$res->ibu->alamat}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Kota Kelahiran ibu</td>
          <td>:</td>
          <td>{{$res->ibu->tempat_lahir}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Tanggal Lahir ibu</td>
          <td>:</td>
          <td>{{$res->ibu->tanggal_lahir}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Agama ibu</td>
          <td>:</td>
          <td>{{$res->ibu->agama}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Kewarganegaraan ibu</td>
          <td>:</td>
          <td>{{$res->ibu->kewarganegaraan}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Pekerjaan ibu</td>
          <td>:</td>
          <td>{{$res->ibu->pekerjaan}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Pendidikan Terakhir ibu</td>
          <td>:</td>
          <td>{{$res->ibu->pendidikan}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Penghasilan perbulan ibu</td>
          <td>:</td>
          <td>{{'Rp. '.number_format($res->ibu->penghasilan, 2,',', '.')}}</td>
        </tr>
        <tr>
          <td style="width:350px;">Nomor Telefon</td>
          <td>:</td>
          <td>{{$res->ibu->nomor_hp}}</td>
        </tr>
      </table>
    </div>
  </div>
</body>
</html>