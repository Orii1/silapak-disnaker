@extends('layout.mediator')

@section('content')
<div class="pagetitle">
    <h1>Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/mediator/dashboard">Home</a></li>
            <li class="breadcrumb-item">Permohonan Pencatatan Serikat Pekerja/Serikat Buruh</li>
            <li class="breadcrumb-item active">{{$data->spsb_perusahaan->nama_perusahaan}}</li>
        </ol>
    </nav>
</div>

<div class="card">
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
                                        <p>{{$data->spsb_perusahaan->nama_perusahaan}}</p>
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
                            @if ($data->spsb_status->id_status == '3')
                            <div class="">
                                <div class="">
                                    <label for="">Permohonan Telah Selesai. Diselesaikan pada tanggal {{$data->updated_at->isoFormat('D MMMM Y')}} <a class="btn btn-success btn-sm" href="/storage/{{$data->user_id}}/spsb/sk/{{$data->sk}}" title="Surat Keputusan" target="_blank"><i class="bi bi-file-earmark-check-fill"></i></a></label>
                                </div>
                            </div>
                            @elseif ($data->spsb_status->id_status == '4')
                            <div class="">
                                <div class="">
                                    <label for="">Permohonan Telah Dikembalikan. Dikembalikan pada tanggal {{$data->updated_at->isoFormat('D MMMM Y')}}, Menunggu Pemohon Memperbaiki Persyaratan</label>
                                </div>
                            </div>
                            @elseif ($data->spsb_status->id_status == '2')
                                <div class="">
                                    <div class="">
                                        <label for="">{{$data->spsb_status->keterangan}}<br>
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
                                @if ($data->spsb_status->id_status == "2")
                                <div class="text-start">
                                    <span class="badge rounded-pill text-bg-warning"><label style="color: white;">Diproses</label></span>
                                </div>
                                @elseif ($data->spsb_status->id_status == "3")
                                    <div class="text-start">
                                        <span class="badge rounded-pill text-bg-success">Diterima</span>
                                    </div>
                                @elseif ($data->spsb_status->id_status == '4')
                                    <div class="text-start">
                                        <span class="badge rounded-pill text-bg-danger">Dikembalikan</span>
                                    </div>
                                @elseif ($data->spsb_status->id_status == '1')
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
                            @if ($data->spsb_status->status_cek->hasil_pengecekan == 'Belum di Periksa')
                            <div class="">
                                <div class="">
                                    <div class="">
                                        <b>Pemeriksaan</b><br>
                                        <label for="">Nama Mediator :  <b><i>{{$data->spsb_status->status_cek->pengecekan_pegawai->nama_pegawai}} </b></i></label><br>
                                    </div>
                                </div>
                            </div>

                            @else
                            <div class="">
                                <div class="">
                                    <b>Pemeriksaan</b><br>
                                    <label for="">Nama Mediator : <b><i>{{$data->spsb_status->status_cek->pengecekan_pegawai->nama_pegawai}} </i></b></label><br>
                                    <label for="">Hasil Periksa : <b><i>{{$data->spsb_status->status_cek->hasil_pengecekan}} </i></b></label><br>
                                    <label for="">Pesan : <b><i>{{$data->spsb_status->status_cek->pesan}} </i></b></label><br>
                                </div>
                            </div>
                            @endif
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@if ($data->spsb_status->status_cek->hasil_pengecekan == 'Belum di Periksa')
@include('layout.modal')
<div class="mb-2 mx-2">
    <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#hasil_spsb"><i class="bi bi-file-earmark-bar-graph-fill" style="height:100px;color: wspsbte;"></i> Hasil Periksa</a>
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

    <div class="modal fade" id="terima" tabindex="-1" aria-labelledby="terimaLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="terimaLabel">Upload Surat Keputusan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/permohonan-spsb/terima/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label class="mb-3">Surat Keputusan</label>
                    <input type="file" name="surat_keputusan" class="form-control">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
          </div>
        </div>
    </div>

    <div class="modal fade" id="tolak" tabindex="-1" aria-labelledby="tolakLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="tolakLabel">Pesan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/permohonan-spsb/tolak/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label class="mb-3">Masukkan Pesan</label>
                    <textarea class="form-control" id="pesan" name="pesan" style="height: 150px"></textarea>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
          </div>
        </div>
    </div>

    <div class="modal fade" id="update" tabindex="-1" aria-labelledby="updateLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="updateLabel">Perbaharui Keterangan Pemrosesan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/permohonan-spsb/update/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label class="mb-3">Masukkan Keterangan Terbaru</label>
                    <input class="form-control" id="keterangan" name="keterangan">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
          </div>
        </div>
    </div>

</div>
@endsection
