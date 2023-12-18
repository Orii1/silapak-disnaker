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
                                    {{$pencatatanspsb->pesan}}
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
                    <form action="/edit-permohonan-spsb/{{$pencatatanspsb->id}}" method="POST" enctype="multipart/form-data">
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
                                            <label for="">Surat Permohonan Pencatatan SP/SB</label><br>
                                            <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pencatatanspsb->user_id}}/spsb/{{$pencatatanspsb->surat_permohonan}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="surat_permohonan" required>
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
                                            <label for="">Fotocopy AD/ART Serikat Pekerja/Serikat Buruh</label><br>
                                            <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pencatatanspsb->user_id}}/spsb/{{$pencatatanspsb->ad_art}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="ad_art" required>
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
                                            <label for="">Daftar Nama Anggota Pembentuk SP/SB</label><br>
                                            <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pencatatanspsb->user_id}}/spsb/{{$pencatatanspsb->nama_pembentuk}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="nama_pembentuk" required>
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
                                            <label for="">Daftar Nama Susunan Pengurus SP/SB</label><br>
                                            <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pencatatanspsb->user_id}}/spsb/{{$pencatatanspsb->nama_pengurus}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="nama_pengurus" required>
                                                </div>
                                            </div>
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
                                            <label for="">Berita Acara Pembentukan SP/SB</label><br>
                                            <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pencatatanspsb->user_id}}/spsb/{{$pencatatanspsb->ba_pembentukan}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="ba_pembentukan" required>
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
