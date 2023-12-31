@extends('layout.admin')

@section('content')
<div class="pagetitle">
    <h1>Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Permohonan Pendaftaran LKS Bipartit</li>
            <li class="breadcrumb-item active">{{$data->lks_user->name}}</li>
        </ol>
    </nav>
</div>

<div class="mt-5">
    <table class="table table-bordered">
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
                <th class="col-3">
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

                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <a href="/storage/lks/{{$data->permohonan_pencatatan_lks_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                        </a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fc_akta_pendirian_perusahaan" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-download" style="height:100px;color: white;"></i>
                        </button>
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

                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <a href="/storage/lks/{{$data->daftar_susunan_pengurus_lks_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                        </a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fc_akta_pendirian_perusahaan" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-download" style="height:100px;color: white;"></i>
                        </button>
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

                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <a href="/storage/lks/{{$data->berita_acara_pembentukan_lks_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                        </a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fc_akta_pendirian_perusahaan" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-download" style="height:100px;color: white;"></i>
                        </button>
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

                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <a href="/storage/lks/{{$data->fc_wlkp}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                        </a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fc_akta_pendirian_perusahaan" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-download" style="height:100px;color: white;"></i>
                        </button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="mt-4">
        <div class="text-center">
            <label for=""><b>Setelah dilakukan pemeriksaan, dengan ini permohonan dari {{$data->lks_user->name}} :</b></label><br>
            <div class="mt-2">
                <a href="/permohonan-lks/terima/{{$data->id}}" class="btn btn-success"><i class="bi bi-check-circle-fill" style="height:100px;color: white;"></i> Terima</a>
                <a href="/permohonan-lks/tolak/{{$data->id}}" class="btn btn-danger"><i class="bi bi-x-circle-fill" style="height:100px;color: white;"></i> Tolak</a>
            </div>
        </div>
    </div>
</div>
@endsection
