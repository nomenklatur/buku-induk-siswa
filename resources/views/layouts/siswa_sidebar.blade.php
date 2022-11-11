<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    <img src="/images/tut wuri handayani.png" alt="Logo" width="40px" height="auto" class="me-2">
    <span class="fs-4">Buku Induk Siswa</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto fs-5">
    <li class="nav-item">
      <a href="#" class="nav-link link-dark active">
        <i class="bi bi-house-door me-2"></i>Beranda
      </a>
    </li>
    <li>
      <a href="#" class="nav-link link-dark">
        <i class="bi bi-card-checklist me-2"></i>Biodata Siswa
      </a>
    </li>
    <li>
      <a href="#" class="nav-link link-dark">
        <i class="bi bi-gender-female me-2"></i>Data Ibu Siswa
      </a>
    </li>
    <li>
      <a href="#" class="nav-link link-dark">
        <i class="bi bi-gender-male me-2"></i>Data Ayah Siswa
      </a>
    </li>
    <li>
      <a href="#" class="nav-link link-dark">
        <i class="bi bi-person me-2"></i>Data Wali Siswa
      </a>
    </li>
  </ul>
  <hr>
  <div class="dropdown">
    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
      <strong>{{auth()->user()->nama_lengkap}}</strong>
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
      <li><a class="dropdown-item" href="#">New project...</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Sign out</a></li>
    </ul>
  </div>
</div>