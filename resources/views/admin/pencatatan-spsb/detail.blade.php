@extends('layout.admin')

@section('content')
<div class="pagetitle">
    <h1>Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Permohonan Pencatatan Serikat Pekerja/Serikat Buruh</li>
            <li class="breadcrumb-item active">{{$data->spsb_user->name}}</li>
        </ol>
    </nav>
</div>

<div class="mx-1">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                        {{$data->peruntukan}}, {{$data->spsb_user->name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if ($data->status == '1')
    <div class="mt-2 mb-2">
        <div class="mx-2">
            <label for=""><b>Permohonan Telah Selesai. Diselesaikan pada tanggal {{$data->updated_at->isoFormat('D MMMM Y')}}</b></label>
        </div>
    </div>
@elseif ($data->status == '2')
    <div class="mt-2 mb-2">
        <div class="mx-2">
            <label for=""><b>Permohonan Telah Dikembalikan. Dikembalikan pada tanggal {{$data->updated_at->isoFormat('D MMMM Y')}}, Menunggu Pemohon Memperbaiki Persyaratan</b></label>
        </div>
    </div>
@elseif ($data->status == '0')
    <div class="mt-2 mb-2">
        <div class="mx-2">
            <label for="">Keterangan : <b><i>{{$data->keterangan}} </i></b></label>
            <a data-bs-toggle="modal" data-bs-target="#update" class="btn btn-info btn-sm" title="Perbaharui Keterangan Pemrosesan">
                <i class="bi bi-clock-fill" style="color: white"></i>
            </a>
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
                        <a href="/storage/{{$data->user_id}}/spsb/{{$data->surat_permohonan}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <a href="/storage/{{$data->user_id}}/spsb/{{$data->ad_art}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <a href="/storage/{{$data->user_id}}/spsb/{{$data->nama_pembentuk}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <a href="/storage/{{$data->user_id}}/spsb/{{$data->nama_pengurus}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <a href="/storage/{{$data->user_id}}/spsb/{{$data->ba_pembentukan}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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

    @if ($data->status == '0')
    <div class="mt-4">
        <div class="text-center">
            <label for=""><b>Setelah dilakukan pemeriksaan, dengan ini permohonan dari {{$data->spsb_user->name}} :</b></label><br>
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
