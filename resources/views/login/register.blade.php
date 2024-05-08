@extends('layout.master')

@section('content')
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-6 d-flex flex-column align-items-center justify-content-center">

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

                                <form method="POST" id="registerForm">
                                    @csrf
                                    @if (Session('error'))
                                        <div class="alert alert-danger">
                                            {{ Session('error') }}
                                        </div>
                                    @endif

                                    <div id="formStep1" class="col-12 mb-4">
                                        <input type="email" name="email" id="email" placeholder="Email Perusahaan"
                                            class="form-control" required />
                                    </div>

                                    <div id="formStep2" class="col-12 mb-4" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="type"><b>Nama Perusahaan </b><label
                                                            style="color: red; font-size: 15px;"> *</label></label>
                                                    <input type="text" name="company_name" id="company_name"
                                                        placeholder="Nama Perusahaan" class="form-control" required />
                                                </div>
                                                <div class="mb-4">
                                                    <label for="type"><b>Alamat Perusahaan</b><label
                                                            style="color: red; font-size: 15px;"> *</label></label>
                                                    <input type="text" name="company_address" id="company_address"
                                                        placeholder="Alamat Perusahaan" class="form-control"
                                                        required />
                                                </div>
                                                <div class="mb-4">
                                                    <label for="type"><b>Pemilik Perusahaan</b><label
                                                            style="color: red; font-size: 15px;"> *</label></label>
                                                    <input type="text" name="owner" id="owner"
                                                        placeholder="Pemilik Perusahaan" class="form-control"
                                                        required />
                                                </div>
                                                <div class="mb-4">
                                                    <label for="type"><b>Tipe Perusahaan (Sesuai NIB) </b><label
                                                            style="color: red; font-size: 15px;"> *</label></label>
                                                    <select class="form-select" name="type" required>

                                                        <option value="Mikro">Mikro</option>
                                                        <option value="Kecil">Kecil</option>
                                                        <option value="Menengah">Menengah</option>
                                                        <option value="Besar">Besar</option>
                                                    </select>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="sector"><b>Sektor/Nama KBLI (Sesuai NIB) </b><label
                                                            style="color: red; font-size: 15px;"> *</label></label>
                                                    <input type="text" name="sector" id="sector" class="form-control"
                                                        value="sector" required>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="status"><b>Status Perusahaan </b><label
                                                            style="color: red; font-size: 15px;"> *</label></label>
                                                    <select class="form-select" name="status" required>
                                                        <option selected disabled>$user->status</option>
                                                        <option value="Kantor Pusat">Kantor Pusat</option>
                                                        <option value="Kantor Cabang">Kantor Cabang</option>
                                                    </select>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="type"><b>Status Penanaman Modal </b><label
                                                            style="color: red; font-size: 15px;"> *</label></label>
                                                    <select class="form-select" name="modal" required>
                                                        <option selected disabled>$user->modal</option>
                                                        <option value="Perorangan">Perorangan</option>
                                                        <option value="Swasta Nasional">Swasta Nasional</option>
                                                        <option value="BUMN">BUMN</option>
                                                        <option value="BUMD">BUMD</option>
                                                        <option value="PMA">PMA</option>
                                                        <option value="PMDN">PMDN</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for=""><b>Surat Keputusan Izin Usaha (Nomor dan Tanggal
                                                            Surat) </b><label style="color: red; font-size: 15px;">
                                                            *</label></label>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input type="text" name="number_letter" id="number_letter"
                                                                class="form-control" placeholder="Nomor Surat"
                                                                value="$user->number_letter" required>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="date" name="date_latter" id="date_latter"
                                                                class="form-control" placeholder="Tanggal Surat"
                                                                value="$user->date_latter" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <label for=""><b>Jumlah Tenaga Kerja </b><label
                                                            style="color: red; font-size: 15px;"> *</label></label>
                                                    <div class="ms-2">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="text-center">
                                                                            <div class="mt-2">
                                                                                Laki laki
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <input type="text" name="men"
                                                                            id="men" class="form-control"
                                                                            value="$user->men" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="text-center">
                                                                            <div class="mt-2">
                                                                                Wanita
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <input type="text" name="woman"
                                                                            id="woman" class="form-control"
                                                                            value="$user->woman" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <label for=""><b>Status Hubungan Kerja </b><label
                                                            style="color: red; font-size: 15px;"> *</label></label>
                                                    <div class="d-flex justify-content-center">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="text-center">
                                                                            <div class="mt-2">
                                                                                PKWT
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <input type="text" name="pkwt"
                                                                            id="pkwt" class="form-control"
                                                                            value="{$user->pkwt}" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="row">
                                                                    <div class="col-md-7">
                                                                        <div class="text-center">
                                                                            <div class="mt-2">
                                                                                Outsourcing
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <input type="text" name="outsourcing"
                                                                            id="outsourcing" class="form-control"
                                                                            value="{$user->outsourcing}}" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="text-center">
                                                                            <div class="mt-2">
                                                                                WNA
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <input type="text" name="wna"
                                                                            id="wna" class="form-control"
                                                                            value="{$user->wna}" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <label for=""><b>Nomor Kepesertaan BPJS Ketenagakerjaan
                                                        </b><label style="color: red; font-size: 15px;"> *</label></label>
                                                    <input type="text" name="number_ketenagakerjaan"
                                                        id="number_ketenagakerjaan" class="form-control"
                                                        value="{$user->number_ketenagakerjaan}}" required>
                                                </div>
                                                <div class="mb-4">
                                                    <label for=""><b>Nomor Kepesertaan BPJS Kesehatan </b><label
                                                            style="color: red; font-size: 15px;"> *</label></label>
                                                    <input type="text" name="number_kesehatan" id="number_kesehatan"
                                                        class="form-control" value="{$user->number_kesehatan}}" required>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <button class="btn btn-primary w-100" type="button"
                                                    onclick="nextStep()">Selanjutnya</button>
                                            </div>
                                            <div class="col-12 mb-4">
                                                <button class="btn btn-outline-primary w-100" type="button"
                                                    onclick="backStep()">Kembali</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-4">
                                        <input type="password" name="password" class="form-control" id="yourPassword"
                                            placeholder="Password" required>
                                    </div>

                                    <div class="col-12 mb-4">
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value=""
                                                name="cek" id="cek" required>
                                            <label class="form-check-label" for="cek" style="font-size: 13px;">
                                                Dengan ini saya menyetujui <a href="">Peraturan dan Ketentuan</a>
                                                Perizinan Online.
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-2">
                                        <button class="btn btn-primary w-100" type="button"
                                            onclick="nextStep()">Selanjutnya</button>
                                    </div>
                                    <div class="col-12 mb-5">
                                        <a href="{{ route('login') }}" class="btn btn-outline-primary w-100">Kembali</a>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

<script>
    let currentStep = 1;
    const totalSteps = 2; // Jumlah langkah pada form

    function showStep(step) {
        document.querySelectorAll('#registerForm > div').forEach(div => {
            div.style.display = 'none';
        });

        document.querySelector(`#formStep${step}`).style.display = 'block';
    }

    function nextStep() {
        if (currentStep < totalSteps) {
            currentStep++;
            showStep(currentStep);
        }
    }

    function backStep() {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    }

    showStep(currentStep); // Menampilkan langkah pertama saat halaman dimuat
</script>
