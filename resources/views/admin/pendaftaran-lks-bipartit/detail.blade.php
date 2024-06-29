@extends('layout.admin')

@section('content')
<div class="pagetitle">
    <h1>Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Permohonan Pendaftaran LKS Bipartit</li>
            <li class="breadcrumb-item active">{{$data->lks_perusahaan->nama_perusahaan}}</li>
        </ol>
    </nav>
</div>

<div class="mx-1">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                        {{$data->peruntukan}}, {{$data->lks_perusahaan->nama_perusahaan}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if ($data->lks_status->id_status == '3')
    <div class="mt-2 mb-2">
        <div class="mx-2">
            <label for=""><b>Permohonan Telah Selesai. Diselesaikan pada tanggal {{$data->updated_at->isoFormat('D MMMM Y')}}</b> <a class="btn btn-success btn-sm" href="/storage/{{$data->pkwt_perusahaan->id}}/pp/sk/{{$data->sk}}" title="Surat Keputusan" target="_blank"><i class="bi bi-file-earmark-check-fill"></i></a></label>
        </div>
    </div>
@elseif ($data->lks_status->id_status == '4')
    <div class="mt-2 mb-2">
        <div class="mx-2">
            <label for=""><b>Permohonan Telah Dikembalikan. Dikembalikan pada tanggal {{$data->updated_at->isoFormat('D MMMM Y')}}, Menunggu Pemohon Memperbaiki Persyaratan</b></label>
        </div>
    </div>
@elseif ($data->lks_status->id_status == '2')
    <div class="card">
        <div class="mt-2 mb-2">
            <div class="mx-3 my-2">
                <label for="">Keterangan : <b><i>{{$data->lks_status->keterangan}} </i></b></label><br>
                <label for="">Mediator : <b><i>{{$data->lks_status->status_cek->pengecekan_pegawai->nama_pegawai}} </i></b></label>
            </div>
        </div>
    </div>
@else

@endif

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
                        <a href="/storage/{{$data->lks_perusahaan->id}}/lks/{{$data->permohonan_pencatatan_lks_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <label for="">Daftar nama susunan pengurus LKS Bipartit</label><br>

                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <a href="/storage/{{$data->lks_perusahaan->id}}/lks/{{$data->daftar_susunan_pengurus_lks_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <label for="">Berita acara pembentukan LKS Bipartit</label><br>

                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <a href="/storage/{{$data->lks_perusahaan->id}}/lks/{{$data->berita_acara_pembentukan_lks_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <label for="">Fotocopy WLKP yang masih berlaku</label><br>

                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <a href="/storage/{{$data->lks_perusahaan->id}}/lks/{{$data->fc_wlkp}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
