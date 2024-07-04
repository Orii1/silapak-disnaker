@extends('layout.admin')

@section('title')


@section('content')

<div class="pagetitle">
    <h1>Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
            <li class="breadcrumb-item">Pencatatan Penyelesaian Perselisihan Hubungan Industrial</li>
            <li class="breadcrumb-item active">{{$data->hi_perusahaan->nama_perusahaan}}</li>
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
                                        <p>{{$data->hi_perusahaan->nama_perusahaan}}</p>
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
                            @if ($data->hi_status->id_status == '3')
                            <div class="">
                                <div class="">
                                    <label for="">Permohonan Telah Selesai. Diselesaikan pada tanggal {{ $data->hi_status->updated_at->locale('id')->isoFormat('D MMMM Y') }}</label>
                                </div>
                            </div>
                            @elseif ($data->hi_status->id_status == '4')
                            <div class="">
                                <div class="">
                                    <label for="">Permohonan Telah Dikembalikan. Dikembalikan pada tanggal {{ $data->hi_status->updated_at->locale('id')->isoFormat('D MMMM Y') }}, Menunggu Pemohon Memperbaiki Persyaratan</label>
                                </div>
                            </div>
                            @elseif ($data->hi_status->id_status == '2')
                                <div class="">
                                    <div class="">
                                        <label for="">{{$data->hi_status->keterangan}}<br>
                                    </div>
                                </div>
                        @else

                        @endif

                        </td>
                        <td>
                            <b>Status</b>
                            <p class="my-0">
                                @if ($data->hi_status->id_status == "2")
                                <div class="text-start">
                                    <span class="badge rounded-pill text-bg-warning"><label style="color: white;">Diproses</label></span>
                                </div>
                                @elseif ($data->hi_status->id_status == "3")
                                    <div class="text-start">
                                        <span class="badge rounded-pill text-bg-success">Diterima</span>
                                    </div>
                                @elseif ($data->hi_status->id_status == '4')
                                    <div class="text-start">
                                        <span class="badge rounded-pill text-bg-danger">Dikembalikan</span>
                                    </div>
                                @elseif ($data->hi_status->id_status == '1')
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
                            <div class="text-start">
                            <b>Nama Mediator</b>
                                <p>
                                    {{$data->hi_status->status_cek->pengecekan_pegawai->nama_pegawai}}
                                </p>
                            </div>
                        </td>
                        <td>
                            <div class="text-start">
                            <b>Surat Keputusan</b>
                                <p>
                                    <a href="/storage/{{$data->hi_perusahaan->id}}/perselisihan_hi/sk/{{$data->hi_status->sk}}" class="btn btn-success" target="_blank">
                                        <i class="bi bi-file-earmark-medical-fill"></i>
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

@if ($data->hi_status->id_status == "2")
<div class="mb-2">
    <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#terima"><i class="bi bi-file-earmark-medical-fill"></i> Surat Keputusan</a>
</div>
@else

@endif

<div class="modal fade" id="terima" tabindex="-1" aria-labelledby="terimaLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="terimaLabel">Surat Keputusan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/permohonan-hi/terima/{{$data->id_hi}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <label class="mb-2">Surat Keputusan yang sudah di tanda tangan</label>
                <input class="form-control" type="file" id="sk" name="sk"></input>
                <label style="color: red;"><i>(tipe file .pdf | Max : 2 MB)</i></label>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
      </div>
    </div>
</div>

<div class="card">
    <div class="my-3 mx-3">
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
                            <label for="">Permohonan pencatatan Penyelesaian Perseslisihan Hubungan Industrial</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/{{$data->hi_perusahaan->id}}/perselisihan_hi/{{$data->permohonan_pencatatan_pphi}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                            <label for="">Surat permohonan permintaan perundingan Bipartit</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/{{$data->hi_perusahaan->id}}/perselisihan_hi/{{$data->surat_permintaan_perundingan_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                            <label for="">Daftar hadir perundingan bipartit</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/{{$data->hi_perusahaan->id}}/perselisihan_hi/{{$data->daftar_hadir_perundingan_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                            <label for="">Risalah perundingan bipartit</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/{{$data->hi_perusahaan->id}}/perselisihan_hi/{{$data->risalah_perundingan_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="modal fade" id="terima" tabindex="-1" aria-labelledby="terimaLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="terimaLabel">Upload Surat Keputusan</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/permohonan-hi/terima/{{$data->id}}" method="POST" enctype="multipart/form-data">
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
                <form action="/permohonan-hi/tolak/{{$data->id}}" method="POST" enctype="multipart/form-data">
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
                <form action="/permohonan-hi/update/{{$data->id}}" method="POST" enctype="multipart/form-data">
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

        @if ($data->status == '0')
            <div class="mt-4">
                <div class="text-center">
                    <label for=""><b>Setelah dilakukan pemeriksaan, dengan ini permohonan dari {{$data->hi_perusahaan->nama_perusahaan}} :</b></label><br>
                    <div class="mt-2">
                        <a class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#terima"><i class="bi bi-check-circle-fill" style="height:100px;color: white;"></i> Terima</a>
                        <a class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#tolak"><i class="bi bi-x-circle-fill" style="height:100px;color: white;"></i> Kembalikan</a>
                    </div>
                </div>
            </div>
        @else

        @endif
    </div>
</div>
@endsection
