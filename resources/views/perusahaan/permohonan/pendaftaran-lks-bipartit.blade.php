@extends('layout.header2')

@section('content')

<div class="pagetitle-company">
    <h1>Ajuan Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/perusahaan/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Permohonan Pendaftaran Lembaga Kerja Sama Bipartit</li>
        </ol>
    </nav>
</div>

<div class="mx-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                            <div class="text-center my-2">
                                <img src="../../assets/img/lks.png" width="50px;" alt="icon">
                            </div>
                        </div>
                        <div class="col-md-11">
                            <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                                Permohonan Pendaftaran Lembaga Kerja Sama Bipartit, {{$user->name}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mx-4">
    <div class="card">
        <div class="card-body">
            <ul class="mt-2 nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#persyaratan">Persyaratan</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#alur-perizinan">Alur Perizinan</button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#">Dasar Hukum</button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#">Durasi Pemrosesan</button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#">Kontak</button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#retribusi">Retribusi</button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#maklumat">Maklumat Pelayanan</button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#visimisi">Visi & Misi</button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#motto">Motto</button>
                </li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active profile-overview" id="persyaratan">
                    <div class="mt-4 mb-5">
                        <form action="/permohonan/pendaftaran-lks-bipartit" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-5">
                                <div class="col-md-1 my-1 text-start">
                                    <label>Peruntukan :</label>
                                </div>
                                <div class="col-md-4 text-start">
                                    <select class="form-select" aria-label="Default select example" name="peruntukan" required>
                                        <option disabled selected>Pilih Peruntukan</option>
                                        <option value="Pencatatan LKS Bipartit">Pencatatan LKS Bipartit</option>
                                        <option value="Pembaharuan Pengurus">Pembaharuan Pengurus</option>
                                    </select>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 bg-white">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>
                                                <div class="text-center">
                                                    No
                                                </div>
                                            </th>
                                            <th>
                                                <div class="text-center">
                                                    Persyaratan
                                                </div>
                                            </th>
                                            <th>
                                                <div class="text-center">
                                                    File
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="text-center">
                                                    1
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <label for="">Permohonan pencatatan LKS Bipartit</label><br>
                                                    <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <input type="file" class="form-control" name="permohonan_pencatatan_lks_bipartit" id="">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="text-center">
                                                    2
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <label for="">Daftar nama susunan pengurus LKS Bipartit</label><br>
                                                    <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <input type="file" class="form-control" name="daftar_susunan_pengurus_lks_bipartit" id="">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="text-center">
                                                    3
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <label for="">Berita acara pembentukan LKS Bipartit</label><br>
                                                    <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <input type="file" class="form-control" name="berita_acara_pembentukan_lks_bipartit" id="">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="text-center">
                                                    4
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <label for="">Fotocopy WLKP yang masih berlaku</label><br>
                                                    <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <input type="file" class="form-control" name="fc_wlkp" id="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="col-md-6 pt-1 mt-4">
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary btn-lg btn-block" id="btn" type="submit"><a style="color: #ffffff;"><b>Kirim</b></a></label></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade pt-3" id="alur-perizinan">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="../../assets/img/ppnaker.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade pt-3" id="retribusi">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="../../assets/img/gratis.png" class="img-fluid" style="width: 900px;" alt="">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade pt-3" id="maklumat">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="../../assets/img/maklumat.jpg" class="img-fluid" style="width: 900px;" alt="">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade pt-3" id="visimisi">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="../../assets/img/visimisi.jpg" class="img-fluid" style="width: 900px;" alt="">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade pt-3" id="motto">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="../../assets/img/motto.jpg" style="width: 900px;" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
