@extends('layout.admin')

@section('content')

{{-- MAIN --}}
<div class="pagetitle">
    <h1>Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Pendaftaran Perjanjian Kerja Bersama</li>
            <li class="breadcrumb-item active">{{$data->pkb_perusahaan->nama_perusahaan}}</li>
        </ol>
    </nav>
</div>

<div class="mx-1">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                        {{$data->peruntukan}}, {{$data->pkb_perusahaan->nama_perusahaan}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if ($data->pkb_status->id_status == '3')
    <div class="mt-2 mb-2">
        <div class="mx-2">
            <label for=""><b>Permohonan Telah Selesai. Diselesaikan pada tanggal {{$data->updated_at->isoFormat('D MMMM Y')}}</b> <a class="btn btn-success btn-sm" href="/storage/{{$data->user_id}}/pp/sk/{{$data->sk}}" title="Surat Keputusan" target="_blank"><i class="bi bi-file-earmark-check-fill"></i></a></label>
        </div>
    </div>
@elseif ($data->pkb_status->id_status == '4')
    <div class="mt-2 mb-2">
        <div class="mx-2">
            <label for=""><b>Permohonan Telah Dikembalikan. Dikembalikan pada tanggal {{$data->updated_at->isoFormat('D MMMM Y')}}, Menunggu Pemohon Memperbaiki Persyaratan</b></label>
        </div>
    </div>
@elseif ($data->pkb_status->id_status == '2')
    <div class="card">
        <div class="mt-2 mb-2">
            <div class="mx-3 my-2">
                <label for="">Keterangan : <b><i>{{$data->pkb_status->keterangan}} </i></b></label><br>
                <label for="">Mediator : <b><i>{{$data->pkb_status->status_cek->pengecekan_pegawai->nama_pegawai}} </i></b></label>
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
                            <label for="">Fotocopy WLKP yang masih berlaku</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/{{$data->pkb_perusahaan->id}}/pkb/{{$data->fc_wlkp}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                            <label for="">Fotocopy Akta Pendirian Perusahaan</label><br>
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/{{$data->pkb_perusahaan->id}}/pkb/{{$data->fc_akta_pendirian_perusahaan}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                            <label for="">Fotocopy sertifikat Kepesertaan BPJS Ketenagakerjaan dan BPJS Kesehatan serta Bukti Pembayaran iuran Kepesertaan terakhir</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/{{$data->pkb_perusahaan->id}}/pkb/{{$data->fc_setifikat_peserta_bpjs_ketenagakerjaan}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                            <label for="">Permohonan pendaftaran PKB</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/{{$data->pkb_perusahaan->id}}/pkb/{{$data->permohonan_pendaftaran_pkb}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                            <label for="">Surat Pernyataan sudah / belum memiliki strutur skala upah dan sudah dilaksanakan di Perusahaan</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/{{$data->pkb_perusahaan->id}}/pkb/{{$data->surat_pernyataan_struktur_skala_upah}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                            </a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="text-center">
                            6
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <label for="">Struktur skala upah asli untuk diperlihatkan ke pegawai / petugas pengoreksi PKB</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/{{$data->pkb_perusahaan->id}}/pkb/{{$data->struktur_skala_upah_asli}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                            </a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="text-center">
                            7
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <label for="">Draft PKB sebanyak 3 eksemplar yang sudah diparaf oleh pimpinan dan ketua SP /SB</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/{{$data->pkb_perusahaan->id}}/pkb/{{$data->draft_pkb}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
    </table>
</div>
@endsection
