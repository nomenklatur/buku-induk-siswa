<div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
  <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
    <img src="/images/tut wuri handayani.png" alt="Logo" width="40px" height="auto" class="me-2">
    <span class="fs-4">Buku Induk Siswa</span>
  </a>
  <ul class="list-unstyled ps-0 sticky-top">
    <li class="mb-1">
        <a href="/dashboard" class="text-decoration-none link-dark btn btn-toggle">Dashboard</a>
    </li>
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
        Kesiswaan
      </button>
      <div class="collapse" id="dashboard-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="#" class="link-dark rounded">Tambah Siswa</a></li>
          <li><a href="#" class="link-dark rounded">Data Siswa</a></li>
          <li><a href="#" class="link-dark rounded">Data Mutasi</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
        Kelas
      </button>
      <div class="collapse" id="orders-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="#" class="link-dark rounded">Tambah Kelas</a></li>
          <li><a href="#" class="link-dark rounded">Daftar Kelas</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-1">
      <a href="/dashboard" class="text-decoration-none link-dark btn btn-toggle">Tahun Ajaran</a>
  </li>
    <li class="border-top my-3"></li>
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
        Akun
      </button>
      <div class="collapse" id="account-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="#" class="link-dark rounded">Profil</a></li>
          <li>
            <form action="/keluar" method="post">
              @csrf
              <button type="submit" class="dropdown-item btn btn-danger ms-1"><i class="bi bi-escape mx-1"></i>Keluar</button>
            </form>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</div>