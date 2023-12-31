@extends('layout.admin')

@section('content')
<div class="pagetitle">
    <h1>Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Permohonan Pendaftaran Perjanjian Kerja Waktu Tertentu</li>
            <li class="breadcrumb-item active">{{$data->pkwt_user->name}}</li>
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
                            <label for="">Surat permohonan pencacatan PKWT</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/pkwt/{{$data->srt_permohonan_pencatatan_pkwt}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                            <label for="">Daftar nama pekerja / buruh yang di PKWT</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/pkwt/{{$data->daftar_nama_pekerja_pkwt}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                            <label for="">Asli PKWT yang sudah ditandatangani oleh para pihak (pengusaha dan pekerja)</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/pkwt/{{$data->pkwt_asli}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                            <a href="/storage/pkwt/{{$data->fc_wlkp}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                            <a href="/storage/pkwt/{{$data->fc_akta_pendirian_perusahaan}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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

    <div class="mt-4">
        <div class="text-center">
            <label for=""><b>Setelah dilakukan pemeriksaan, dengan ini permohonan dari {{$data->pkwt_user->name}} :</b></label><br>
            <div class="mt-2">
                <a href="/permohonan-pkwt/terima/{{$data->id}}" class="btn btn-success"><i class="bi bi-check-circle-fill" style="height:100px;color: white;"></i> Terima</a>
                <a href="/permohonan-pkwt/tolak/{{$data->id}}" class="btn btn-danger"><i class="bi bi-x-circle-fill" style="height:100px;color: white;"></i> Tolak</a>
            </div>
        </div>
    </div>

</div>
@endsection
