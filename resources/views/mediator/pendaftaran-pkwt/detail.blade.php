@extends('layout.mediator')

@section('content')
<div class="pagetitle">
    <h1>Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/mediator/dashboard">Home</a></li>
            <li class="breadcrumb-item">Permohonan Pendaftaran Perjanjian Kerja Waktu Tertentu</li>
            <li class="breadcrumb-item active">{{$data->pkwt_perusahaan->nama_perusahaan}}</li>
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
                                        <p>{{$data->pkwt_perusahaan->nama_perusahaan}}</p>
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
                            @if ($data->pkwt_status->id_status == '3')
                            <div class="">
                                <div class="">
                                    <label for="">Permohonan Telah Selesai. Diselesaikan pada tanggal {{$data->updated_at->isoFormat('D MMMM Y')}} <a class="btn btn-success btn-sm" href="/storage/{{$data->user_id}}/pkwt/sk/{{$data->sk}}" title="Surat Keputusan" target="_blank"><i class="bi bi-file-earmark-check-fill"></i></a></label>
                                </div>
                            </div>
                            @elseif ($data->pkwt_status->id_status == '4')
                            <div class="">
                                <div class="">
                                    <label for="">Permohonan Telah Dikembalikan. Dikembalikan pada tanggal {{$data->updated_at->isoFormat('D MMMM Y')}}, Menunggu Pemohon Memperbaiki Persyaratan</label>
                                </div>
                            </div>
                            @elseif ($data->pkwt_status->id_status == '2')
                                <div class="">
                                    <div class="">
                                        <label for="">{{$data->pkwt_status->keterangan}}<br> 
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
                                @if ($data->pkwt_status->id_status == "2")
                                <div class="text-start">
                                    <span class="badge rounded-pill text-bg-warning"><label style="color: white;">Diproses</label></span>
                                </div>
                                @elseif ($data->pkwt_status->id_status == "3")
                                    <div class="text-start">
                                        <span class="badge rounded-pill text-bg-success">Diterima</span>
                                    </div>
                                @elseif ($data->pkwt_status->id_status == '4')
                                    <div class="text-start">
                                        <span class="badge rounded-pill text-bg-danger">Dikembalikan</span>
                                    </div>
                                @elseif ($data->pkwt_status->id_status == '1')
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
                            @if ($data->pkwt_status->status_cek->hasil_pengecekan == 'Belum di Periksa')
                            <div class="">
                                <div class="">
                                    <div class="">
                                        <b>Pemeriksaan</b><br>
                                        <label for="">Nama Mediator :  <b><i>{{$data->pkwt_status->status_cek->pengecekan_pegawai->nama_pegawai}} </b></i></label><br>
                                    </div>
                                </div>
                            </div>

                            @else
                            <div class="">
                                <div class="">
                                    <b>Pemeriksaan</b><br>
                                    <label for="">Nama Mediator : <b><i>{{$data->pkwt_status->status_cek->pengecekan_pegawai->nama_pegawai}} </i></b></label><br>
                                    <label for="">Hasil Periksa : <b><i>{{$data->pkwt_status->status_cek->hasil_pengecekan}} </i></b></label><br>
                                    <label for="">Pesan : <b><i>{{$data->pkwt_status->status_cek->pesan}} </i></b></label><br>
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

                            @if ($data->pkwt_status->status_cek->hasil_pengecekan == 'Belum di Periksa')
                            @include('layout.modal')
                            <div class="mb-2 mx-2">
                                <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#hasil_pkwt"><i class="bi bi-file-earmark-bar-graph-fill" style="height:100px;color: wpkwtte;"></i> Hasil Periksa</a>
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
                                <label for="">Surat permohonan pencacatan PKWT</label><br>

                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <a href="/storage/{{$data->pkwt_perusahaan->id}}/pkwt/{{$data->srt_permohonan_pencatatan_pkwt}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                                <label for="">Daftar nama pekerja / buruh yang di PKWT</label><br>

                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <a href="/storage/{{$data->pkwt_perusahaan->id}}/pkwt/{{$data->daftar_nama_pekerja_pkwt}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                                <label for="">Asli PKWT yang sudah ditandatangani oleh para pihak (pengusaha dan pekerja)</label><br>

                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <a href="/storage/{{$data->pkwt_perusahaan->id}}/pkwt/{{$data->pkwt_asli}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                                <a href="/storage/{{$data->pkwt_perusahaan->id}}/pkwt/{{$data->fc_wlkp}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                                <label for="">Fotocopy akta pendirian Perusahaan</label><br>

                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <a href="/storage/{{$data->pkwt_perusahaan->id}}/pkwt/{{$data->fc_akta_pendirian_perusahaan}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
            <form action="/permohonan-pkwt/terima/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label class="mb-3">Surat Keputusan</label>
                    <input type="file" nama_perusahaan="surat_keputusan" class="form-control">
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
            <form action="/permohonan-pkwt/tolak/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label class="mb-3">Masukkan Pesan</label>
                    <textarea class="form-control" id="pesan" nama_perusahaan="pesan" style="height: 150px"></textarea>
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
            <form action="/permohonan-pkwt/update/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label class="mb-3">Masukkan Keterangan Terbaru</label>
                    <input class="form-control" id="keterangan" nama_perusahaan="keterangan">
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
            <label for=""><b>Setelah dilakukan pemeriksaan, dengan ini permohonan dari {{$data->pkwt_perusahaan->nama_perusahaan}} :</b></label><br>
            <div class="mt-2">
                <a class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#terima"><i class="bi bi-check-circle-fill" style="height:100px;color: white;"></i> Terima</a>
                <a class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#tolak"><i class="bi bi-x-circle-fill" style="height:100px;color: white;"></i> Kembalikan</a>
            </div>
        </div>
    </div>
@else

@endif

</div>
@endsection
