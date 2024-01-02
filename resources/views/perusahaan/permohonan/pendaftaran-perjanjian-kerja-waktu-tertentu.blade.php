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
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#dasar_hukum">Dasar Hukum</button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#durasi_pemrosesan">Durasi Pemrosesan</button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#kontak">Kontak</button>
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
                        <form action="/permohonan/pendaftaran-perjanjian-kerja-waktu-tertentu" method="POST" enctype="multipart/form-data">
                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row mb-5">
                            <div class="col-md-1 my-1 text-start">
                                <label>Peruntukan :</label>
                            </div>
                            <div class="col-md-4 text-start">
                                <select class="form-select" aria-label="Default select example" name="peruntukan" required>
                                    <option disabled selected>Pilih Peruntukan</option>
                                    <option value="Pencatatan PKWT">Pencatatan PKWT</option>
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

                        <div class="d-flex justify-content-center">
                            <div class="d-grid gap-2 col-2 mt-5 mx-auto">
                                <button class="btn btn-primary btn-block" id="btn" type="submit"><a style="color: #ffffff;"><b>Kirim</b></a></label></button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade pt-3" id="alur-perizinan">
                    <div class="text-center">
                        <img src="/storage/asset/{{$asset_pkwt->alur_perizinan}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="tab-pane fade pt-3" id="retribusi">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="/storage/asset/{{$asset->retribusi}}" class="img-fluid" style="width: 900px;" alt="">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade pt-3" id="maklumat">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="/storage/asset/{{$asset->maklumat}}" class="img-fluid" style="width: 900px;" alt="">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade pt-3" id="visimisi">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="/storage/asset/{{$asset->visi_misi}}" class="img-fluid" style="width: 900px;" alt="">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade pt-3" id="motto">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="/storage/asset/{{$asset->motto}}" style="width: 900px;" alt="">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade pt-0" id="dasar_hukum">
                    <div class="text-center">
                        <div class="mb-4">
                            <div class="card-title">
                                <Label style="font-size: 20px;">Dasar Hukum</Label><br>
                                <label class="mt-2" style="font-size: 17px;">{{$asset_pkwt->dasar_hukum}}</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade pt-0" id="durasi_pemrosesan">
                    <div class="text-center">
                        <div class="mb-4">
                            <div class="card-title">
                                <Label style="font-size: 20px;">Durasi Pemrosesan</Label><br>
                                <label class="mt-2" style="font-size: 17px;">{{$asset_pkwt->durasi_pemrosesan}}</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade pt-0" id="kontak">
                    <div class="text-center">
                        <div class="mb-4">
                            <div class="card-title">
                                <Label style="font-size: 20px;">Kontak Layanan Permohonan</Label><br>
                            </div>
                            <label class="ms-5 mb-2 card-tittle" style="font-size: 16px;"><b>Dinas Koperasi, Usaha Mikro dan Tenaga Kerja kota Banjarbaru</b></label><br>
                            <label class="ms-5 mt-0 card-tittle" style="font-size: 15px;">Alamat : Jalan Soekarno Hatta - Trikora</label><br>
                            <label class="ms-5 mt-0 card-tittle" style="font-size: 15px;">Nomor : {{$asset->kontak}}</label><br>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
