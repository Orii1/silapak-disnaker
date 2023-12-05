@extends('layout.admin')

@section('content')
<div class="pagetitle">
    <h1>Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Permohonan Pencatatan Perselisihan Hubungan Internal</li>
            <li class="breadcrumb-item active">{{$data->hi_user->name}}</li>
        </ol>
    </nav>
</div>

<div class="mx-1">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                        {{$data->peruntukan}}, {{$data->hi_user->name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-2 mb-2">
    <label for=""><b>Konfirmasi Permohonan {{$data->hi_user->name}} :</b></label>
    <a class="btn btn-info" type="button" data-bs-toggle="modal" data-bs-target="#konfirmasi" style="color: white;"> <b>Konfirmasi</b></a>
</div>

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
                        <label for="">Permohonan pencatatan Penyelesaian Perseslisihan Hubungan Industrial</label><br>
                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <a href="/storage/{{$data->user_id}}/perselisihan_hi/{{$data->permohonan_pencatatan_pphi}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <a href="/storage/{{$data->user_id}}/perselisihan_hi/{{$data->surat_permintaan_perundingan_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <a href="/storage/{{$data->user_id}}/perselisihan_hi/{{$data->daftar_hadir_perundingan_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <a href="/storage/{{$data->user_id}}/perselisihan_hi/{{$data->risalah_perundingan_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="modal fade" id="konfirmasi" tabindex="-1" aria-labelledby="konfirmasiLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="konfirmasiLabel">Konfirmasi Permohonan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/konfirmasi/permohonan-hi/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <label class="mb-3">Masukkan Status Pemrosesan</label>
                <input type="text" name="keterangan" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
      </div>
    </div>
</div>
@endsection
