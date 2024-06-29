@extends('layout.admin')

@section('content')
<div class="pagetitle">
    <h1>Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Permohonan Pencatatan Serikat Pekerja/Serikat Buruh</li>
            <li class="breadcrumb-item active">{{$data->spsb_perusahaan->nama_perusahaan}}</li>
        </ol>
    </nav>
</div>

<div class="mx-1">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                        {{$data->peruntukan}}, {{$data->spsb_perusahaan->nama_perusahaan}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if ($data->spsb_status->id_status == '3')
    <div class="mt-2 mb-2">
        <div class="mx-2">
            <label for=""><b>Permohonan Telah Selesai. Diselesaikan pada tanggal {{$data->updated_at->isoFormat('D MMMM Y')}}</b> <a class="btn btn-success btn-sm" href="/storage/{{$data->user_id}}/pp/sk/{{$data->sk}}" title="Surat Keputusan" target="_blank"><i class="bi bi-file-earmark-check-fill"></i></a></label>
        </div>
    </div>
@elseif ($data->spsb_status->id_status == '4')
    <div class="mt-2 mb-2">
        <div class="mx-2">
            <label for=""><b>Permohonan Telah Dikembalikan. Dikembalikan pada tanggal {{$data->updated_at->isoFormat('D MMMM Y')}}, Menunggu Pemohon Memperbaiki Persyaratan</b></label>
        </div>
    </div>
@elseif ($data->spsb_status->id_status == '2')
    <div class="card">
        <div class="mt-2 mb-2">
            <div class="mx-3 my-2">
                <label for="">Keterangan : <b><i>{{$data->spsb_status->keterangan}} </i></b></label><br>
                <label for="">Mediator : <b><i>{{$data->spsb_status->status_cek->pengecekan_pegawai->nama_pegawai}} </i></b></label>
            </div>
        </div>
    </div>
@else

@endif

<div class="mt-4">
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
                        <label for="">Surat Permohonan Pencatatan SP/SB</label><br>
                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <a href="/storage/{{$data->spsb_perusahaan->id}}/spsb/{{$data->surat_permohonan}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <label for="">Fotocopy AD/ART Serikat Pekerja/Serikat Buruh</label><br>
                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <a href="/storage/{{$data->spsb_perusahaan->id}}/spsb/{{$data->ad_art}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <label for="">Daftar Nama Anggota Pembentuk SP/SB</label><br>
                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <a href="/storage/{{$data->spsb_perusahaan->id}}/spsb/{{$data->nama_pembentuk}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <label for="">Daftar Nama Susunan Pengurus SP/SB</label><br>
                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <a href="/storage/{{$data->spsb_perusahaan->id}}/spsb/{{$data->nama_pengurus}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                        </a>
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
                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <a href="/storage/{{$data->spsb_perusahaan->id}}/spsb/{{$data->ba_pembentukan}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
