<div class="p-3 bg-white" style="width: 280px;">
  <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
    <img src="/images/tut wuri handayani.png" alt="Logo" width="30px" height="auto" class="me-2">
    <span class="fs-6">Buku Induk Siswa</span>
  </a>
  <ul class="list-unstyled ps-0 sticky-top">
    <li class="mb-3">
        <a href="/dashboard" class="text-decoration-none btn btn-outline-info border-light text-dark w-100 text-start"><i class="bi bi-speedometer me-2"></i> Dashboard</a>
    </li>
    <li class="mb-3">
      <button class="btn btn-outline-info border-light text-dark  align-items-center rounded collapsed w-100 text-start" data-bs-toggle="collapse" data-bs-target="#kesiswaan-collapse" aria-expanded="false">
        <i class="bi bi-person me-2"></i> Kesiswaan
      </button>
      <div class="collapse mt-2" id="kesiswaan-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="/admin/siswa/create" class="link-dark rounded">Tambah Siswa</a></li>
          <li><a href="/admin/siswa" class="link-dark rounded">Daftar Siswa</a></li>
          <li><a href="#" class="link-dark rounded">Data Mutasi</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-3">
      <button class="btn btn-outline-info border-light align-items-center rounded collapsed text-dark w-100 text-start" data-bs-toggle="collapse" data-bs-target="#kelas-collapse" aria-expanded="false">
        <i class="bi bi-house me-2"></i>Kelas
      </button>
      <div class="collapse mt-2" id="kelas-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="/admin/grup/create" class="link-dark rounded">Tambah Kelas</a></li>
          <li><a href="/admin/grup" class="link-dark rounded">Daftar Kelas</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-3">
      <button class="btn btn-outline-info border-light align-items-center rounded collapsed text-dark w-100 text-start" data-bs-toggle="collapse" data-bs-target="#tahun-collapse" aria-expanded="false">
        <i class="bi bi-calendar me-2"></i>Tahun Ajaran
      </button>
      <div class="collapse mt-2" id="tahun-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="/admin/tahun/create" class="link-dark rounded">Tambah Tahun Ajaran</a></li>
          <li><a href="/admin/tahun" class="link-dark rounded">Daftar Tahun Ajaran</a></li>
        </ul>
      </div>
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