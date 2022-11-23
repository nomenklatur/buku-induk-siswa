@extends('layouts.base')

@section('content')
    <div class="container mt-3 card shadow">
      <div class="row justify-content-center mb-3">
        <div class="col-lg-9">
          <form action="/admin/biodata/{{$res->uri}}" method="post">
            @method('put')
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
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" placeholder="Contoh : Jl. Kemuning No.7" name="alamat" value="{{$res->alamat}}">
                        @error('alamat')
                          <div class="invalid-feedback">
                            {{ $message }}  
                          </div>                   
                        @enderror
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Kota</span>
                        <input type="text" class="form-control @error('kota') is-invalid @enderror" placeholder="Contoh : Jakarta Utara" name="kota" value="{{$res->kota}}">
                        @error('kota')
                          <div class="invalid-feedback">
                            {{ $message }}  
                          </div>                   
                        @enderror
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Kecamatan</span>
                        <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" placeholder="Contoh : Sidorejo" name="kecamatan" value="{{$res->kecamatan}}">
                        @error('kecamatan')
                          <div class="invalid-feedback">
                            {{ $message }}  
                          </div>                   
                        @enderror
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Tempat dan Tanggal Lahir</span>
                        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="Contoh: Jakarta Utara" name="tempat_lahir" value="{{$res->tempat_lahir}}">
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{$res->tanggal_lahir}}">
                        @error('tempat_lahir' || 'tanggal_lahir')
                          <div class="invalid-feedback">
                            {{ $message }}  
                          </div>                   
                        @enderror
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Anak ke</span>
                        <input type="number" class="form-control @error('anak_ke') is-invalid @enderror" placeholder="Contoh : 1" name="anak_ke" value="{{$res->anak_ke}}">
                        @error('anak_ke')
                          <div class="invalid-feedback">
                            {{ $message }}  
                          </div>                   
                        @enderror
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Jumlah Saudara Kandung</span>
                        <input type="number" class="form-control @error('jlh_saudara') is-invalid @enderror" placeholder="Contoh : 2" name="jlh_saudara" value="{{$res->jlh_saudara}}">
                        @error('jlh_saudara')
                          <div class="invalid-feedback">
                            {{ $message }}  
                          </div>                   
                        @enderror
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Jumlah Saudara Tiri</span>
                        <input type="number" class="form-control @error('saudara_tiri') is-invalid @enderror" placeholder="Contoh : 2" name="saudara_tiri" value="{{$res->saudara_tiri}}">
                        @error('saudara_tiri')
                          <div class="invalid-feedback">
                            {{ $message }}  
                          </div>                   
                        @enderror
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Jumlah Saudara Angkat</span>
                        <input type="number" class="form-control @error('saudara_angkat') is-invalid @enderror" placeholder="Contoh : 2" name="saudara_angkat" value="{{$res->saudara_angkat}}">
                        @error('saudara_angkat')
                          <div class="invalid-feedback">
                            {{ $message }}  
                          </div>                   
                        @enderror
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
                        <input type="text" class="form-control @error('bahasa') is-invalid @enderror" placeholder="Contoh : Bahasa Indonesia" name="bahasa" value="{{$res->bahasa}}">
                        @error('bahasa')
                          <div class="invalid-feedback">
                            {{ $message }}  
                          </div>                   
                        @enderror
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Agama</span>
                        <select name="agama" class="form-select">
                          <option value="Islam" @if ($res->agama === 'Islam') selected @endif>Islam</option>
                          <option value="Katholik"  @if ($res->agama === 'Katholik') selected @endif>Katholik</option>
                          <option value="Protestan"  @if ($res->agama === 'Protestan') selected @endif>Protestan</option>
                          <option value="Buddha"  @if ($res->agama === "Buddha") selected @endif>Buddha</option>
                          <option value="Hindu"  @if ($res->agama === 'Hindu') selected @endif>Hindu</option>
                        </select>
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Jarak dari rumah (KM)</span>
                        <input type="number" class="form-control @error('jarak') is-invalid @enderror" placeholder="Contoh : 7" name="jarak" value="{{$res->jarak}}">
                        @error('jarak')
                          <div class="invalid-feedback">
                            {{ $message }}  
                          </div>                   
                        @enderror
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Nomor telefon siswa</span>
                        <input type="text" class="form-control @error('nomor_hp') is-invalid @enderror" placeholder="Contoh : 081234567891" name="nomor_hp" value="{{$res->nomor_hp}}">
                        @error('nomor_hp')
                          <div class="invalid-feedback">
                            {{ $message }}  
                          </div>                   
                        @enderror
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Golongan Darah</span>
                        <select name="goldar" class="form-select">
                          <option value="O" @if ($res->goldar === 'O') selected @endif>O</option>
                          <option value="A"  @if ($res->goldar === 'A') selected @endif>A</option>
                          <option value="B"  @if ($res->goldar === 'B') selected @endif>B</option>
                          <option value="AB"  @if ($res->goldar === "AB") selected @endif>AB</option>
                        </select>
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Tinggi badan (CM)</span>
                        <input type="number" class="form-control @error('tinggi') is-invalid @enderror" placeholder="Contoh : 172" name="tinggi" value="{{$res->tinggi}}">
                        @error('tinggi')
                          <div class="invalid-feedback">
                            {{ $message }}  
                          </div>                   
                        @enderror
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Berat badan (KG)</span>
                        <input type="number" class="form-control @error('berat') is-invalid @enderror" placeholder="Contoh : 55" name="berat" value="{{$res->berat}}">
                        @error('berat')
                          <div class="invalid-feedback">
                            {{ $message }}  
                          </div>                   
                        @enderror
                      </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="ex2-tabs-3"
                      role="tabpanel"
                      aria-labelledby="ex2-tab-3"
                    > 
                      <h3 class="text-uppercase text-center">{{$title}}</h3>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Riwayat penyakit</span>
                        <input type="text" class="form-control @error('penyakit') is-invalid @enderror" placeholder="Contoh : Asma" name="penyakit" value="{{$res->penyakit}}">
                        @error('penyakit')
                          <div class="invalid-feedback">
                            {{ $message }}  
                          </div>                   
                        @enderror
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Kegemaran</span>
                        <input type="text" class="form-control @error('hobi') is-invalid @enderror" placeholder="Contoh : Bulu tangkis" name="hobi" value="{{$res->hobi}}">
                        @error('hobi')
                          <div class="invalid-feedback">
                            {{ $message }}  
                          </div>                   
                        @enderror
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Kewarganegaraan</span>
                        <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror" placeholder="Contoh : Indonesia" name="kewarganegaraan" value="{{$res->kewarganegaraan}}">
                        @error('kewarganegaraan')
                          <div class="invalid-feedback">
                            {{ $message }}  
                          </div>                   
                        @enderror
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-light">Sekolah Asal</span>
                        <input type="text" class="form-control @error('sekolah_asal') is-invalid @enderror" placeholder="Contoh : SMPN 1 Kota Medan" name="sekolah_asal" value="{{$res->sekolah_asal}}">
                        @error('sekolah_asal')
                          <div class="invalid-feedback">
                            {{ $message }}  
                          </div>                   
                        @enderror
                      </div>
                      <div class="d-grip gap-2 mb-3 w-100">
                        <p class="fw-light"><span class="text-danger fw-bold">*</span> pastikan data yang kamu masukkan benar dan sesuai ketentuan</p>
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