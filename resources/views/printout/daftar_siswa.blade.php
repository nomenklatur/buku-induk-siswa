<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Daftar Siswa</title>
</head>
<body>
  <div>
    <h3 style="text-align: center">Daftar Siswa</h3>
    <hr>
    <table style="border: 1px solid black; border-collapse: collapse;">
      <thead>
        <th style="border: 1px solid black; border-collapse: collapse;">No.</th>
        <th style="border: 1px solid black; border-collapse: collapse;">Nama</th>
        <th style="border: 1px solid black; border-collapse: collapse;">NISN</th>
        <th style="border: 1px solid black; border-collapse: collapse;">NIS</th>
        <th style="border: 1px solid black; border-collapse: collapse;">Alamat</th>
        <th style="border: 1px solid black; border-collapse: collapse;">Nomor Hp</th>
      </thead>
      @foreach ($res as $item)
          <tr>
            <td style="border: 1px solid black; border-collapse: collapse;">{{$loop->iteration}}</td>
            <td style="border: 1px solid black; border-collapse: collapse;">{{$item->nama_lengkap}}</td>
            <td style="border: 1px solid black; border-collapse: collapse;">{{$item->nisn}}</td>
            <td style="border: 1px solid black; border-collapse: collapse;">{{$item->nis}}</td>
            <td style="border: 1px solid black; border-collapse: collapse;">{{$item->biodata->alamat}}</td>
            <td style="border: 1px solid black; border-collapse: collapse;">{{$item->biodata->nomor_hp}}</td>
          </tr>
        @endforeach
    </table>
  </div>
</body>
</html>