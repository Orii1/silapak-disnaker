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
                        <a href="/storage/lks/{{$data->permohonan_pencatatan_lks_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                        </a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fc_akta_pendirian_perusahaan" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-download" style="height:100px;color: white;"></i>
                        </button>
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
                        <a href="/storage/lks/{{$data->daftar_susunan_pengurus_lks_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                        </a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fc_akta_pendirian_perusahaan" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-download" style="height:100px;color: white;"></i>
                        </button>
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
                        <a href="/storage/lks/{{$data->berita_acara_pembentukan_lks_bipartit}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                        </a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fc_akta_pendirian_perusahaan" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-download" style="height:100px;color: white;"></i>
                        </button>
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
                        <a href="/storage/lks/{{$data->fc_wlkp}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                        </a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fc_akta_pendirian_perusahaan" style="color: rgb(255, 235, 20);">
                            <i class="bi bi-download" style="height:100px;color: white;"></i>
                        </button>
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
            <form action="/permohonan-lks/terima/{{$data->id}}" method="POST" enctype="multipart/form-data">
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
            <form action="/permohonan-lks/terima/{{$data->id}}" method="POST" enctype="multipart/form-data">
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

    <div class="mt-4">
        <div class="text-center">
            <label><b>Setelah dilakukan pemeriksaan, dengan ini permohonan dari {{$data->lks_user->name}} :</b></label><br>
            <div class="mt-2">
                <a class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#terima"><i class="bi bi-check-circle-fill" style="height:100px;color: white;"></i> Terima</a>
                <a class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#tolak"><i class="bi bi-x-circle-fill" style="height:100px;color: white;"></i> Kembalikan</a>
            </div>
        </div>
    </div>
</div>
@endsection
