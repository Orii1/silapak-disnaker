@extends('layout.master')

@section('content')

{{-- <div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="assets/img/banjarbaru.png" alt="">
                <span class="d-none d-lg-block">SILAKHI</span>
              </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-2 pb-0">
                  <h5 class="card-title text-center pb-2 fs-7">Membuat Akun Perusahaan Anda</h5>
                  <p class="text-center small" style="color: #9b9b9b">Masukkan data perusahaan Anda</p>
                </div>

                <form method="POST">
                  @csrf
                  @if (Session('error'))
                  <div class="alert alert-danger">
                      {{Session('error')}}
                  </div>
                  @endif
                    <input type="hidden" name="email" value={{$user->email}} required>
                  <div class="col-12 mb-4">
                     <input type="text" name="name" id="name" placeholder="Nama Perusahaan" class="form-control" required/>
                  </div>

                  <div class="col-12 mb-4">
                     <input type="text" name="owner" id="owner" placeholder="Pemilik Perusahaan" class="form-control" required/>
                  </div>

                  <div class="col-12 mb-4">
                     <input type="textarea" name="address" id="address" placeholder="Alamat Perusahaan" class="form-control" required/>
                  </div>

                  <div class="col-12 mb-4">
                      <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Password" required>
                  </div>

                  <div class="col-12 mb-4">
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" name="cek" id="cek" required>
                        <label class="form-check-label" for="cek" style="font-size: 13px;">
                            Dengan ini saya menyetujui <a href="">Peraturan dan Ketentuan</a> Perizinan Online.
                        </label>
                    </div>
                  </div>

                  <div class="col-12 mb-2">
                      <button class="btn btn-primary w-100" type="submit">Daftar</button>
                  </div>
                  <div class="col-12 mb-5">
                      <a href="{{route('login')}}" class="btn btn-outline-primary w-100">Kembali</a>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div> --}}

<div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <div class="container-regist">

            <div class="step-row">
                <div id="progress"></div>
                <div class="step-col"><small>Step 1</small></div>
                <div class="step-col"><small>Step 2</small></div>
            </div>

            <div class="pt-0 pb-0">
                <h5 class="card-title text-center pb-2 fs-7">Buat Akun Perusahaan Anda</h5>
                <p class="text-center small" style="color: #9b9b9b">Masukkan data perusahaan Anda</p>
            </div>

            <form method="POST">
                @csrf
                @if (Session('error'))
                <div class="alert alert-danger">
                    {{Session('error')}}
                </div>
                @endif

                <div id="form1">
                  <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <input type="hidden" name="email" value={{$user->email}} required>
                          <div class="col-10 mb-4 ms-3">
                            <label class="ms-2" for="nama" style="font-size: 13px;"><b>Nama Perusahaan </b><label style="color: red; font-size: 15px;"> *</label></label>
                            <input type="text" name="nama" id="nama" placeholder="Nama Perusahaan" class="form-control" required/>
                          </div>
                          <div class="col-10 mb-4 ms-3">
                            <label class="ms-2" for="pemilik" style="font-size: 13px;"><b>Pemilik Perusahaan </b><label style="color: red; font-size: 15px;"> *</label></label>
                            <input type="text" name="pemilik" id="pemilik" placeholder="Pemilik Perusahaan" class="form-control" required/>
                          </div>
                          <div class="col-10 mb-4 ms-3">
                            <label class="ms-2" for="type" style="font-size: 13px;"><b>Alamat Perusahaan </b><label style="color: red; font-size: 15px;"> *</label></label>
                            <input type="textarea" name="alamat" id="alamat" placeholder="Alamat Perusahaan" class="form-control" required/>
                          </div>
                          <div class="col-10 mb-4 ms-3">
                            <div class="mb-1">
                                <label class="ms-2" for="type" style="font-size: 13px;"><b>Tipe Perusahaan (Sesuai NIB) </b><label style="color: red; font-size: 15px;"> *</label></label>
                                <select class="form-select" name="tipe_perusahaan" required>
                                    <option value="1">Mikro</option>
                                    <option value="2">Kecil</option>
                                    <option value="3">Menengah</option>
                                    <option value="4">Besar</option>
                                </select>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="row">
                            <div class="col-10 mb-4 ms-3">
                              <label class="ms-2" for="type" style="font-size: 13px;"><b>Sektor Perusahaan (Sesuai NIB) </b><label style="color: red; font-size: 15px;"> *</label></label>
                              <input type="text" name="sektor" id="sector" class="form-control" value="{{$user->sector}}" required>
                            </div>
                            <div class="col-10 mb-4 ms-3">
                                  <label class="ms-2" for="type" style="font-size: 13px;"><b>Status Perusahaan </b><label style="color: red; font-size: 15px;"> *</label></label>
                                  <select class="form-select" name="status_perusahaan" required>
                                      <option value="1">Kantor Pusat</option>
                                      <option value="2">Kantor Cabang</option>
                                  </select>
                            </div>
                            <div class="col-10 mb-4 ms-3">
                                  <label class="ms-2" for="type" style="font-size: 13px;"><b>Status Penanaman Modal </b><label style="color: red; font-size: 15px;"> *</label></label>
                                  <select class="form-select" name="modal" required>
                                      <option value="1">Perorangan</option>
                                      <option value="2">Swasta Nasional</option>
                                      <option value="3">BUMN</option>
                                      <option value="4">BUMD</option>
                                      <option value="5">PMA</option>
                                      <option value="6">PMDN</option>
                                  </select>
                            </div>

                            <div class="col-10 mb-4 ms-3">
                                <div class="mb-1">
                                    <label class="ms-2" for="type" style="font-size: 13px;"><b>Surat Keputusan Izin Usaha (Nomor Tanggal Surat) </b><label style="color: red; font-size: 15px;"> *</label></label>
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" name="nomor_surat_izin_usaha" id="nomor_surat_izin_usaha" class="form-control" placeholder="Nomor Surat" value="" required>
                                        </div>
                                        <div class="col-6">
                                            <input type="date" name="tgl_surat_izin_usaha" id="tgl_surat_izin_usaha" class="form-control" placeholder="Tanggal Surat" value="" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                  </div>

                  <div class="col-12 mb-4">
                    <div class="text-center">
                        <button class="btn btn-primary w-50" id="next1" type="button">Selanjutnya</button>
                    </div>
                  </div>

                </div>

                <div id="form2">
                    <div class="row">
                      <div class="col-6">
                          <div class="row">
                            <div class="col-10 mb-4 ms-3">
                                <label class="ms-2" for="no_bpjs_ketenagakerjaan" style="font-size: 13px;"><b>Nomor BPJS Ketenagakerjaan </b><label style="color: red; font-size: 15px;"> *</label></label>
                                <input type="text" name="no_bpjs_ketenagakerjaan" id="no_bpjs_ketenagakerjaan" placeholder="Nomor BPJS Ketenagakerjaan" class="form-control" required/>
                            </div>
                            <div class="col-10 mb-4 ms-3">
                                <label class="ms-2" for="no_bpjs_kesehatan" style="font-size: 13px;"><b>Nomor BPJS Kesehatan </b><label style="color: red; font-size: 15px;"> *</label></label>
                                <input type="text" name="no_bpjs_kesehatan" id="no_bpjs_kesehatan" placeholder="Nomor BPJS Kesehatan" class="form-control" required/>
                            </div>
                            <div class="col-10 mb-4 ms-3">
                                <label class="ms-2" for="no_bpjs_ketenagakerjaan" style="font-size: 13px;"><b>Jumlah Tenaga Kerja </b><label style="color: red; font-size: 15px;"> *</label></label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <div class="mt-2">
                                                Laki laki
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 mb-2">
                                        <input type="text" name="laki_laki" id="laki_laki" class="form-control" value="" required>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <div class="mt-2">
                                                Perempuan
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 mb-5">
                                        <input type="text" name="perempuan" id="perempuan" class="form-control" value="" required>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>

                      <div class="col-6">
                        <div class="row">
                            <div class="col-10 mb-4 ms-3">
                                <label class="ms-2" for="" style="font-size: 13px;"><b>Status Hubungan Kerja </b><label style="color: red; font-size: 15px;"> *</label></label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <div class="mt-2">
                                                PKWT
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 mb-2">
                                        <input type="text" name="pkwt" id="pkwt" class="form-control" value="" required>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <div class="mt-2">
                                                Outsourcing
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 mb-2">
                                        <input type="text" name="outsourcing" id="outsourcing" class="form-control" value="" required>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <div class="mt-2">
                                                WNA
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 mb-2">
                                        <input type="text" name="wna" id="wna" class="form-control" value="" required>
                                    </div>
                                </div>
                            </div>
                            <div id="map-container" style="border: 0; width: 95%; height: 100%;" allowfullscreen>
                                @include('map')
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control form-control-sm" type="hidden" name="lat" id="lat" readonly>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control form-control-sm" type="hidden" name="lng" id="lng" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>

                    <div class="row">
                        <div class="col-6 mb-2">
                            <div class="text-center">
                                <button class="btn btn-outline-primary w-50" id="back2" type="button">Kembali</button>
                            </div>
                        </div>
                        <div class="col-6 mb-2">
                            <div class="text-center">
                                <button class="btn btn-primary w-50" type="button">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

<script>
    document.getElementById('next1').addEventListener('click', function() {
        document.getElementById('form1').style.transform = 'translateX(-100%)';
        document.getElementById('form2').style.transform = 'translateX(0)';
        document.getElementById('progress').style.width = '100%'; // Sesuaikan dengan langkah
    });

    document.getElementById('back2').addEventListener('click', function() {
        document.getElementById('form1').style.transform = 'translateX(0)';
        document.getElementById('form2').style.transform = 'translateX(100%)';
        document.getElementById('progress').style.width = '50%';
    });
</script>

@endsection



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Sistem Informasi Layanan Perindustrian dan Ketenagakerjaan</title>
    <link rel="icon" href="assets/img/banjarbaru.png">
</head>
<body>
    <section class="vh-100" style="background-color: #f3f3f3;">
        <div class="container py-1 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <div class="mt-5 text-center">
                      <img src="assets/img/banjarbaru.png" alt="banjarbaru" class="w-50 mt-5" style="border-radius: 1rem 0 0 1rem;" />
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex justify-content-center align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">

                      <form action="" method="POST">
                        @csrf
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <label class="fs-3"><b>Daftar Akun</b></label>
                        </div>

                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color: #9b9b9b"> Masukkan Data Perusahaan Anda</h5>

                        <div class="form-outline mb-4">
                            <input type="text" name="name" id="name" placeholder="Nama Perusahaan" class="form-control form-control-lg" required/>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" name="owner" id="owner" placeholder="Pemilik Perusahaan" class="form-control form-control-lg" required/>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="textarea" name="address" id="address" placeholder="Alamat Perusahaan" class="form-control form-control-lg" required/>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="email" name="email" id="email" placeholder="Email" class="form-control form-control-lg" required/>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="password" name="password" id="password" placeholder="Password" class="form-control form-control-lg" required/>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" name="cek" id="cek" required>
                            <label class="form-check-label" for="cek">
                                Dengan ini saya menyetujui <a href="">Peraturan dan Ketentuan</a> Perizinan Online.
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-md-3 pt-1 mb-4">
                                <a href="/register" style="color: rgb(255, 255, 255); text-decoration: none;">
                                    <button type="submit" class="btn btn-warning btn-lg btn-block" type="submit"><a style="color: #ffffff">Daftar</a></label></button>
                                </a>
                            </div>

                            <div class="col-md-3 pt-1 mb-4">
                                <a href="/login" style="color: rgb(255, 255, 255); text-decoration: none;">
                                    <button type="button" class="btn btn-outline-warning btn-lg">Kembali</button>
                                </a>

                            </div>

                        </div>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html> --}}
