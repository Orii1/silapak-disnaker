@extends('layout.master')

@section('content')

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

            <form method="POST" action="{{ route('store.account')}}">
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
                            <input type="text" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan" class="form-control" required/>
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
                                <select class="form-select" name="id_tipe_perusahaan" required>
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
                              <input type="text" name="sektor" id="sektor" class="form-control" value="" required>
                            </div>
                            <div class="col-10 mb-4 ms-3">
                                  <label class="ms-2" for="type" style="font-size: 13px;"><b>Status Perusahaan </b><label style="color: red; font-size: 15px;"> *</label></label>
                                  <select class="form-select" name="id_status_perusahaan" required>
                                      <option value="1">Kantor Pusat</option>
                                      <option value="2">Kantor Cabang</option>
                                  </select>
                            </div>
                            <div class="col-10 mb-4 ms-3">
                                  <label class="ms-2" for="type" style="font-size: 13px;"><b>Status Penanaman Modal </b><label style="color: red; font-size: 15px;"> *</label></label>
                                  <select class="form-select" name="id_modal" required>
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
                                <label class="ms-2" for="" style="font-size: 13px;"><b>Jumlah Tenaga Kerja </b><label style="color: red; font-size: 15px;"> *</label></label>
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
                                    <input class="form-control form-control-sm" type="hidden" name="latitude" id="lat" readonly>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control form-control-sm" type="hidden" name="longtitude" id="lng" readonly>
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
                                <button class="btn btn-primary w-50" type="submit">Kirim</button>
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
