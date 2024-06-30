@extends('layout.mediator')

@section('content')
<div class="pagetitle">
    <h1>Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/mediator/dashboard">Home</a></li>
            <li class="breadcrumb-item">Permohonan Pendaftaran Perjanjian Kerja Bersama</li>
            <li class="breadcrumb-item active">{{$data->pkb_perusahaan->nama_perusahaan}}</li>
        </ol>
    </nav>
</div>

<div class="container-fluid">
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-bordered w-100" style="background-color: white;">
                    <tr>
                        <td colspan="2">
                            <b>Detail Permohonan</b>
                            <div class="text-center">
                                <tr>
                                    <td>
                                        <b>Nama Perusahaan</b>
                                        <p>{{$data->pkb_perusahaan->nama_perusahaan}}</p>
                                    </td>
                                    <td>
                                        <b>Peruntukkan</b>
                                        <p>{{$data->peruntukan}}</p>
                                    </td>
                                </tr>
                            </div>
                        </td>
                        
                        <td>
                            <div id="visiContent">
                                <b>Keterangan</b>
                            </div>
                            @if ($data->pkb_status->id_status == '3')
                            <div class="">
                                <div class="">
                                    <label for="">Permohonan Telah Selesai. Diselesaikan pada tanggal {{$data->updated_at->isoFormat('D MMMM Y')}} <a class="btn btn-success btn-sm" href="/storage/{{$data->user_id}}/pkb/sk/{{$data->sk}}" title="Surat Keputusan" target="_blank"><i class="bi bi-file-earmark-check-fill"></i></a></label>
                                </div>
                            </div>
                            @elseif ($data->pkb_status->id_status == '4')
                            <div class="">
                                <div class="">
                                    <label for="">Permohonan Telah Dikembalikan. Dikembalikan pada tanggal {{$data->updated_at->isoFormat('D MMMM Y')}}, Menunggu Pemohon Memperbaiki Persyaratan</label>
                                </div>
                            </div>
                            @elseif ($data->pkb_status->id_status == '2')
                                <div class="">
                                    <div class="">
                                        <label for="">{{$data->pkb_status->keterangan}}<br> 
                                    </div>
                                </div>
                            @else
                                <div class="">
                                    <div class="">
                                        <label for="">Menunggu Konfirmasi Admin<br> 
                                    </div>
                                </div>
                            @endif
                        </td>
                        <td>
                            <b>Status</b>
                                @if ($data->pkb_status->id_status == "2")
                                <div class="text-start">
                                    <span class="badge rounded-pill text-bg-warning"><label style="color: white;">Diproses</label></span>
                                </div>
                                @elseif ($data->pkb_status->id_status == "3")
                                    <div class="text-start">
                                        <span class="badge rounded-pill text-bg-success">Diterima</span>
                                    </div>
                                @elseif ($data->pkb_status->id_status == '4')
                                    <div class="text-start">
                                        <span class="badge rounded-pill text-bg-danger">Dikembalikan</span>
                                    </div>
                                @elseif ($data->pkb_status->id_status == '1')
                                    <div class="text-start">
                                        <span class="badge rounded-pill text-bg-info"><label style="color: white;">Menunggu Konfirmasi</label></span>
                                    </div>
                                @else
                                    <div class="text-start">Status Tidak Diketahui</div>
                                @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if ($data->pkb_status->status_cek->hasil_pengecekan == 'Belum di Periksa')
                            <div class="">
                                <div class="">
                                    <div class="">
                                        <b>Pemeriksaan</b><br>
                                        <label for="">Nama Mediator :  <b><i>{{$data->pkb_status->status_cek->pengecekan_pegawai->nama_pegawai}} </b></i></label><br>
                                    </div>
                                </div>
                            </div>

                            @else
                            <div class="">
                                <div class="">
                                    <b>Pemeriksaan</b><br>
                                    <label for="">Nama Mediator : <b><i>{{$data->pkb_status->status_cek->pengecekan_pegawai->nama_pegawai}} </i></b></label><br>
                                    <label for="">Hasil Periksa : <b><i>{{$data->pkb_status->status_cek->hasil_pengecekan}} </i></b></label><br>
                                    <label for="">Pesan : <b><i>{{$data->pkb_status->status_cek->pesan}} </i></b></label><br>
                                </div>
                            </div>
                            @endif
                        </td>
                        <td>
                            <div class="text-start">
                            <b>Surat Keputusan</b>
                                <p>
                                    <a href="path/to/your/file.zip" class="btn btn-primary" download>
                                        <i class="fa fa-download"></i> Download File
                                    </a>
                                </p>
                            </div>
                        </td>   
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

                            @if ($data->pkb_status->status_cek->hasil_pengecekan == 'Belum di Periksa')
                            @include('layout.modal')
                            <div class="mb-2 mx-2">
                                <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#hasil_pkb"><i class="bi bi-file-earmark-bar-graph-fill" style="height:100px;color: wpkbte;"></i> Hasil Periksa</a>
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
                                <label for="">Fotocopy WLKP yang masih berlaku</label><br>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <a href="/storage/{{$data->id_perusahaan}}/pkb/{{$data->fc_wlkp}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                                <a href="/storage/{{$data->id_perusahaan}}/pkb/{{$data->fc_akta_pendirian_perusahaan}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                                <a href="/storage/{{$data->id_perusahaan}}/pkb/{{$data->fc_setifikat_peserta_bpjs_ketenagakerjaan}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                                <a href="/storage/{{$data->id_perusahaan}}/pkb/{{$data->permohonan_pendaftaran_pkb}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                                <a href="/storage/{{$data->id_perusahaan}}/pkb/{{$data->surat_pernyataan_struktur_skala_upah}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                                <label for="">Struktur skala upah asli untuk diperlihatkan ke pegawai / petugas pengoreksi PP</label><br>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <a href="/storage/{{$data->id_perusahaan}}/pkb/{{$data->struktur_skala_upah_asli}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                                <a href="/storage/{{$data->id_perusahaan}}/pkb/{{$data->draft_pkb}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
