@extends('layout.mediator')

@section('content')
<div class="pagetitle">
    <h1>Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Permohonan Pelaporan Pemutusan Hubungan Kerja</li>
            <li class="breadcrumb-item active">{{$data->phk_perusahaan->nama_perusahaan}}</li>
        </ol>
    </nav>
</div>

<div class="mx-1">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                        {{$data->peruntukan}}, {{$data->phk_perusahaan->nama_perusahaan}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if ($data->phk_status->status_cek->hasil_pengecekan == 'Belum di Periksa')
    <div class="card">
        <div class="mt-2 mb-2">
            <div class="mx-3 my-2">
                <label for="">Nama Mediator : <b><i>{{$data->phk_status->status_cek->pengecekan_pegawai->nama_pegawai}} </i></b></label><br>
            </div>
        </div>
    </div>

    @include('layout.modal')
    <div class="mb-2">
        <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#hasil_phk"><i class="bi bi-file-earmark-bar-graph-fill" style="height:100px;color: wphkte;"></i> Hasil Periksa</a>
    </div>
@else
    <div class="card">
        <div class="mx-3 my-2">
            <label for="">Nama Mediator : <b><i>{{$data->phk_status->status_cek->pengecekan_pegawai->nama_pegawai}} </i></b></label><br>
            <label for="">Hasil Periksa : <b><i>{{$data->phk_status->status_cek->hasil_pengecekan}} </i></b></label><br>
            <label for="">Pesan : <b><i>{{$data->phk_status->status_cek->pesan}} </i></b></label><br>
        </div>
    </div>
@endif

<div class="card">
    <div class="mx-3 my-3">
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
                            <a href="/storage/{{$data->phk_perusahaan->id}}/phk/{{$data->permohonan_pelaporan_phk}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                            </a>
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
                            <a href="/storage/{{$data->phk_perusahaan->id}}/phk/{{$data->surat_pemberitahuan_phk}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                            </a>
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
                            <a href="/storage/{{$data->phk_perusahaan->id}}/phk/{{$data->surat_tanggapan_pemberitahuan_phk}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                            </a>
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
                            <a href="/storage/{{$data->phk_perusahaan->id}}/phk/{{$data->pb_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
