@extends('layout.admin')

@section('content')

{{-- MAIN --}}
<div class="pagetitle">
    <h1>Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
            <li class="breadcrumb-item">Permohonan Pengesahan Peraturan Perusahaan</li>
            <li class="breadcrumb-item active">{{$data->pp_perusahaan->nama_perusahaan}}</li>
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
                                        <p>{{$data->pp_perusahaan->nama_perusahaan}}</p>
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
                            @if ($data->pp_status->id_status == '3')
                            <div class="">
                                <div class="">
                                    <label for="">Permohonan Telah Selesai. Diselesaikan pada tanggal {{$data->updated_at->isoFormat('D MMMM Y')}} <a class="btn btn-success btn-sm" href="/storage/{{$data->user_id}}/pp/sk/{{$data->sk}}" title="Surat Keputusan" target="_blank"><i class="bi bi-file-earmark-check-fill"></i></a></label>
                                </div>
                            </div>
                            @elseif ($data->pp_status->id_status == '4')
                            <div class="">
                                <div class="">
                                    <label for="">Permohonan Telah Dikembalikan. Dikembalikan pada tanggal {{$data->updated_at->isoFormat('D MMMM Y')}}, Menunggu Pemohon Memperbaiki Persyaratan</label>
                                </div>
                            </div>
                            @elseif ($data->pp_status->id_status == '2')
                                <div class="">
                                    <div class="">
                                        <label for="">{{$data->pp_status->keterangan}}<br>
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
                                @if ($data->pp_status->id_status == "2")
                                <div class="text-start">
                                    <span class="badge rounded-pill text-bg-warning"><label style="color: white;">Diproses</label></span>
                                </div>
                                @elseif ($data->pp_status->id_status == "3")
                                    <div class="text-start">
                                        <span class="badge rounded-pill text-bg-success">Diterima</span>
                                    </div>
                                @elseif ($data->pp_status->id_status == '4')
                                    <div class="text-start">
                                        <span class="badge rounded-pill text-bg-danger">Dikembalikan</span>
                                    </div>
                                @elseif ($data->pp_status->id_status == '1')
                                    <div class="text-start">
                                        <span class="badge rounded-pill text-bg-info"><label style="color: white;">Menunggu Konfirmasi</label></span>
                                    </div>
                                @else
                                    <div class="text-start">Status Tidak Diketahui</div>
                                @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="mt-3 mb-2">
    <label for=""><b>Konfirmasi Permohonan {{$data->pp_perusahaan->nama_perusahaan}} :</b></label>
    <a class="btn btn-info" type="button" data-bs-toggle="modal" data-bs-target="#konfirmasi" style="color: white;"> <b>Konfirmasi</b></a>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card">
    <div class="container my-3">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-bordered text-center" style="background-color: white;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Persyaratan</th>
                            <th>File</th>
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
                            <a href="/storage/{{$data->pp_perusahaan->id}}/pp/{{$data->fc_wlkp}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                            <a href="/storage/{{$data->pp_perusahaan->id}}/pp/{{$data->fc_akta_pendirian_perusahaan}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                            <label for="">Fotocopy sertifikat kepesertaan BPJS Ketenagakerjaan dan BPJS Kesehatan dan/atau bukti pembayaran iuran terakhir</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/{{$data->pp_perusahaan->id}}/pp/{{$data->fc_sertifikat_peserta_bpjs_ketenagakerjaan}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                            <label for="">Permohonan Pengesahan PP</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/{{$data->pp_perusahaan->id}}/pp/{{$data->permohonan_pengesahan_pp}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                            <label for="">Surat pernyataan bahwa PP sudah dimintakan saran dan pertimbangan dari wakil pekerja, SP/SB.</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/{{$data->pp_perusahaan->id}}/pp/{{$data->surat_pernyataan_saran_spsb}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                            <label for="">Surat pernyataan bahwa di Perusahaan belum terbentuk SP/SB</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/{{$data->pp_perusahaan->id}}/pp/{{$data->surat_pernyataan_belum_terbentuk_spsb}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                            <label for=""> Surat pernyataan sudah / belum memiliki struktur upah dan skala upah dan sudah dilaksanakan</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/{{$data->pp_perusahaan->id}}/pp/{{$data->surat_pernyataan_struktur_skala_upah}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                            </a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="text-center">
                            8
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <label for="">Struktur dan skala upah asli untuk ditunjuk ke pegawai / petugas pengoreksi PP</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/{{$data->pp_perusahaan->id}}/pp/{{$data->struktur_skala_upah_asli}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                            </a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="text-center">
                            9
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <label for="">Draft PP sebanyak 3 eksemplar yang sudah di paraf oleh pimpinan Perusahaan</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/{{$data->pp_perusahaan->id}}/pp/{{$data->draft_pp}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="konfirmasi" tabindex="-1" aria-labelledby="konfirmasiLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="konfirmasiLabel">Konfirmasi Permohonan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/konfirmasi/permohonan-pp/{{$data->id_pp}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <label class="mb-3">Pilih Mediator untuk mengecek persyaratan pemohon</label>
                <select class="form-select" name="id_pegawai" required>
                    <option selected disabled>Pilih Mediator</option>
                    @foreach ($mediator as $item)
                        <option value="{{$item->id_pegawai}}">{{$item->nama_pegawai}}</option>
                    @endforeach
                </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
      </div>
    </div>
</div>

{{-- END MAIN --}}
@endsection
