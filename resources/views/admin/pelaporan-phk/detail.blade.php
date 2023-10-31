@extends('layout.admin')

@section('content')
<div class="pagetitle">
    <h1>Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Permohonan Pelaporan Pemutusan Hubungan Kerja</li>
            <li class="breadcrumb-item active">{{$data->phk_user->name}}</li>
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
                        <label for="">Permohonan pelaporan PHK</label><br>

                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <a href="/storage/phk/{{$data->permohonan_pelaporan_phk}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <label for="">Surat pemberitahuan PHK dari pengusaha ke pekerja / buruh</label><br>

                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <a href="/storage/phk/{{$data->surat_pemberitahuan_phk}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <label for="">Surat tanggapan atas pemberitahuan dari pengusaha oleh pekerja / buruh</label><br>

                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <a href="/storage/phk/{{$data->surat_tanggapan_pemberitahuan_phk}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <label for="">Perjanjian bersama Bipartit (jika terjadi kesepakatan / jika pekerja / buruh tidak menolak PHK)</label><br>

                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <a href="/storage/phk/{{$data->pb_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
            <label for=""><b>Setelah dilakukan pemeriksaan, dengan ini permohonan dari {{$data->phk_user->name}} :</b></label><br>
            <div class="mt-2">
                <a href="/permohonan-phk/terima/{{$data->id}}" class="btn btn-success"><i class="bi bi-check-circle-fill" style="height:100px;color: white;"></i> Terima</a>
                <a href="/permohonan-phk/tolak/{{$data->id}}" class="btn btn-danger"><i class="bi bi-x-circle-fill" style="height:100px;color: white;"></i> Kembalikan</a>
            </div>
        </div>
    </div>
</div>
@endsection
