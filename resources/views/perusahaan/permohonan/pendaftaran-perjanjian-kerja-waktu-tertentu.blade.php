@extends('layout.header2')

@section('content')

<div class="pagetitle-company">
    <h1>Ajuan Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/perusahaan/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Permohonan Pendaftaran Perjanjian Kerja Waktu Tertentu</li>
        </ol>
    </nav>
</div>

<div class="mx-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">
                            <div class="ms-5 my-2">
                                <img src="../../assets/img/pkwt.png" width="50px;" alt="icon">
                            </div>
                        </div>
                        <div class="col-11">
                            <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                                Permohonan Pendaftaran Perjanjian Kerja Waktu Tertentu, {{$user->name}}
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
                        <div class="table-responsive">
                            <table class="table align-middle mb-0 bg-white">
                                <form action="/permohonan/pendaftaran-perjanjian-kerja-waktu-tertentu" method="POST" enctype="multipart/form-data">
                                @csrf
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
                                                <label for="">Surat permohonan pencacatan PKWT</label><br>
                                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <input type="file" class="form-control" name="srt_permohonan_pencatatan_pkwt" required>
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
                                                <label for="">Daftar nama pekerja / buruh yang di PKWT</label><br>
                                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <input type="file" class="form-control" name="daftar_nama_pekerja_pkwt" required>
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
                                                <label for="">Asli PKWT yang sudah ditandatangani oleh para pihak (pengusaha dan pekerja)</label><br>
                                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <input type="file" class="form-control" name="pkwt_asli" required>
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
                                                <input type="file" class="form-control" name="fc_wlkp" required>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="text-center">
                                                5
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <label for="">Fotocopy akta pendirian Perusahaan</label><br>
                                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <input type="file" class="form-control" name="fc_akta_pendirian_perusahaan" required>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                            <div class="col-md-6 pt-1 mt-4">
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary btn-lg btn-block" id="btn" type="submit"><a style="color: #ffffff;"><b>Kirim</b></a></label></button>
                                </div>
                            </div>
                            </form>
                    </div>
                </div>

                <div class="tab-pane fade pt-3" id="alur-perizinan">
                    <div class="text-center">
                        <img src="../../assets/img/ppnaker.png" class="img-fluid" alt="">
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
