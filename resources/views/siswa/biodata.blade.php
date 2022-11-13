@extends('layouts.base')

@section('content')
    <div class="container mt-3 card shadow">
      <div class="row justify-content-center mb-3">
        <div class="col-lg-9">
          <form action="/students/{{auth()->user()->biodata->uri}}" method="post">
            @method('PUT')
            @csrf
            <div class="container">
              <!-- Tabs navs -->
                  <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a
                        class="nav-link active"
                        id="ex2-tab-1"
                        data-bs-toggle="tab"
                        href="#ex2-tabs-1"
                        role="tab"
                        aria-controls="ex2-tabs-1"
                        aria-selected="true"
                        ><i class="bi bi-1-circle"></i></a
                      >
                    </li>
                    <li class="nav-item" role="presentation">
                      <a
                        class="nav-link"
                        id="ex2-tab-2"
                        data-bs-toggle="tab"
                        href="#ex2-tabs-2"
                        role="tab"
                        aria-controls="ex2-tabs-2"
                        aria-selected="false"
                        ><i class="bi bi-2-circle"></i></a
                      >
                    </li>
                    <li class="nav-item" role="presentation">
                      <a
                        class="nav-link"
                        id="ex2-tab-3"
                        data-bs-toggle="tab"
                        href="#ex2-tabs-3"
                        role="tab"
                        aria-controls="ex2-tabs-3"
                        aria-selected="false"
                        ><i class="bi bi-3-circle"></i></a
                      >
                    </li>
                  </ul>
                  <!-- Tabs navs -->

                  <!-- Tabs content -->
                  <div class="tab-content" id="ex2-content" style="height: fit-content">
                    <div
                      class="tab-pane fade show active"
                      id="ex2-tabs-1"
                      role="tabpanel"
                      aria-labelledby="ex2-tab-1"
                    >
                    <h3 class="text-uppercase text-center">{{$title}}</h3>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Alamat</span>
                        <input type="text" class="form-control" placeholder="Contoh : Jl. Kemuning No.7" name="alamat">
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Kecamatan</span>
                        <input type="text" class="form-control" placeholder="Contoh : Sidorejo" name="kecamatan">
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Kota</span>
                        <input type="text" class="form-control" placeholder="Contoh : Jakarta Raya" name="kota">
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Tempat dan Tanggal Lahir</span>
                        <input type="text" class="form-control" placeholder="Contoh: Jakarta Utara" name="tempat_lahir">
                        <input type="date" class="form-control" name="tanggal_lahir">
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Anak ke</span>
                        <input type="number" class="form-control" placeholder="Contoh : 1" name="anak_ke">
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Jumlah Saudara Kandung</span>
                        <input type="number" class="form-control" placeholder="Contoh : 2" name="jlh_saudara">
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Jumlah Saudara Tiri</span>
                        <input type="number" class="form-control" placeholder="Contoh : 2" name="saudara_tiri">
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Jumlah Saudara Angkat</span>
                        <input type="number" class="form-control" placeholder="Contoh : 2" name="saudara_angkat">
                      </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="ex2-tabs-2"
                      role="tabpanel"
                      aria-labelledby="ex2-tab-2"
                    >
                      <h3 class="text-uppercase text-center">{{$title}}</h3>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Bahasa sehari-hari</span>
                        <input type="text" class="form-control" placeholder="Contoh : Bahasa Indonesia" name="bahasa">
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Agama</span>
                        <select name="agama" id="" class="form-select">
                          <option value="Islam" @if (auth()->user()->biodata->agama === 'Islam') selected @endif>Islam</option>
                          <option value="Katholik"  @if (auth()->user()->biodata->agama === 'Katholik') selected @endif>Katholik</option>
                          <option value="Protestan"  @if (auth()->user()->biodata->agama === 'Protestan') selected @endif>Protestan</option>
                          <option value="Buddha"  @if (auth()->user()->biodata->agama === "Buddha") selected @endif>Buddha</option>
                          <option value="Hindu"  @if (auth()->user()->biodata->agama === 'Hindu') selected @endif>Hindu</option>
                        </select>
                      </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="ex2-tabs-3"
                      role="tabpanel"
                      aria-labelledby="ex2-tab-3"
                    >
                      <div class="d-grip gap-2 mb-3 w-100">
                        <button type="submit" class="btn btn-primary w-100"><i class="bi bi-cloud-check me-2"></i> Simpan</button>
                      </div>
                    </div>
                  </div>
                  <!-- Tabs content -->
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection