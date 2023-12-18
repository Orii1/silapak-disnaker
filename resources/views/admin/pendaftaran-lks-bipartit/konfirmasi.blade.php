@extends('layout.admin')

@section('content')
<div class="pagetitle">
    <h1>Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Permohonan Pendaftaran LKS Bipartit</li>
            <li class="breadcrumb-item active">{{$data->lks_user->name}}</li>
        </ol>
    </nav>
</div>

<div class="mx-1">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                        {{$data->peruntukan}}, {{$data->lks_user->name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-3 mb-2">
    <label for=""><b>Konfirmasi Permohonan {{$data->lks_user->name}} :</b></label>
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
                        <label for="">Permohonan pencatatan LKS Bipartit</label><br>

                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <a href="/storage/{{$data->user_id}}/lks/{{$data->permohonan_pencatatan_lks_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <a href="/storage/{{$data->user_id}}/lks/{{$data->daftar_susunan_pengurus_lks_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <a href="/storage/{{$data->user_id}}/lks/{{$data->berita_acara_pembentukan_lks_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                        <a href="/storage/{{$data->user_id}}/lks/{{$data->fc_wlkp}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
        <form action="/konfirmasi/permohonan-lks/{{$data->id}}" method="POST" enctype="multipart/form-data">
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
