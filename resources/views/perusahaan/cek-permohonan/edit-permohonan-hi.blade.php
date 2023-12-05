@extends('layout.header2')

@section('content')
<div class="pagetitle-company">
    <h1>Edit Permohonan Anda</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/perusahaan/dashboard">Home</a></li>
            <li class="breadcrumb-item">Cek Permohonan</li>
            <li class="breadcrumb-item active">Edit Permohonan Anda</li>
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
                                <img src="../../assets/img/info-icon.jpg" width="50px;" alt="icon">
                            </div>
                        </div>
                        <div class="col-11">
                            <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                                Edit Permohonan Perusahaan Anda
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mx-4">
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="p-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <b>Pesan : </b>
                                </div>
                                <div class="col-md-9">
                                    {{$pencatatanhi->pesan}}
                                </div>
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
            <div class="p-4">
                <div class="table-responsivee">
                    <form action="/edit-permohonan-hi/{{$pencatatanhi->id}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <table class="table align-middle mb-1 bg-white">
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
                                            <label for="">Permohonan pencatatan Penyelesaian Perseslisihan Hubungan Industrial</label><br>
                                            <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pencatatanhi->user_id}}/perselisihan_hi/{{$pencatatanhi->permohonan_pencatatan_pphi}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="permohonan_pencatatan_pphi" required>
                                                </div>
                                            </div>
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
                                            <label for="">Surat permohonan permintaan perundingan Bipartit</label><br>
                                            <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pencatatanhi->user_id}}/perselisihan_hi/{{$pencatatanhi->surat_permintaan_perundingan_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="surat_permintaan_perundingan_bipartit" required>
                                                </div>
                                            </div>
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
                                            <label for="">Daftar hadir perundingan bipartit</label><br>
                                            <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pencatatanhi->user_id}}/perselisihan_hi/{{$pencatatanhi->daftar_hadir_perundingan_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="daftar_hadir_perundingan_bipartit" required>
                                                </div>
                                            </div>
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
                                            <label for="">Risalah perundingan bipartit</label><br>
                                            <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pencatatanhi->user_id}}/perselisihan_hi    /{{$pencatatanhi->risalah_perundingan_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="risalah_perundingan_bipartit" required>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="d-grid gap-2 col-2 mt-4 mx-auto">
                            <button class="btn btn-primary btn-block" id="btn" type="submit"><a style="color: #ffffff;"><b>Kirim Ulang</b></a></label></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
