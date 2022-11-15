<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    <img src="/images/tut wuri handayani.png" alt="Logo" width="40px" height="auto" class="me-2">
    <span class="fs-4">Buku Induk Siswa</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto fs-5 sticky-top">
    <li class="nav-item">
      <a href="/home" class="nav-link link-dark @if($title === 'Beranda') active @endif">
        <i class="bi bi-house-door me-2"></i>Beranda
      </a>
    </li>
    <li>
      <a href="/biodata/{{auth()->user()->biodata->uri}}" class="nav-link link-dark @if($title === 'Biodata Siswa') active @endif">
        <i class="bi bi-card-checklist me-2"></i>Biodata Siswa
      </a>
    </li>
    <li>
      <a href="/data-ibu/{{auth()->user()->ibu->uri}}" class="nav-link link-dark @if($title === 'Data Ibu Siswa') active @endif">
        <i class="bi bi-gender-female me-2"></i>Data Ibu Siswa
      </a>
    </li>
    <li>
      <a href="/data-ayah/{{auth()->user()->ayah->uri}}" class="nav-link link-dark @if($title === 'Data Ayah Siswa') active @endif">
        <i class="bi bi-gender-male me-2"></i>Data Ayah Siswa
      </a>
    </li>
    <li>
      <a href="/data-wali/{{auth()->user()->wali->uri}}" class="nav-link link-dark @if($title === 'Data Wali Siswa') active @endif">
        <i class="bi bi-person me-2"></i>Data Wali Siswa
      </a>
    </li>
  </ul>
  <div class="dropdown fixed-bottom" style="bottom: 20px; left: 30px">
    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="@if (auth()->user()->foto === NULL) @if(auth()->user()->jenis_kelamin === 'L') /images/male.png @else /images/female.png @endif @else {{asset('storage/'.auth()->user()->foto)}}  @endif" alt="" width="32" height="32" class="rounded-circle me-2">
      <strong>{{auth()->user()->nama_lengkap}}</strong>
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
      <li><a class="dropdown-item" href="/password/{{auth()->user()->nisn}}">Ganti Password</a></li>
      <li><hr class="dropdown-divider"></li>
      <li>
        <form action="/keluar" method="POST">
          @csrf
          <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right me-1"></i>Keluar</button>
        </form>
      </li>
    </ul>
  </div>
</div>