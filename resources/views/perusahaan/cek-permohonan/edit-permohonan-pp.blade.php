@extends('layout.header2')

@section('content')
<div class="pagetitle-company">
    <h1>Edit Permohonan Anda</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/perusahaan/dashboard">Home</a></li>
            <li class="breadcrumb-item">Cek Permohonan</li>
            <li class="breadcrumb-item active">Edit Permohonan Anda</li>
        </ol>
    </nav>
</div>

<div class="mx-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">
                            <div class="ms-5 my-2">
                                <img src="../../assets/img/info-icon.jpg" width="50px;" alt="icon">
                            </div>
                        </div>
                        <div class="col-11">
                            <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                                Edit Permohonan Perusahaan Anda
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mx-4">
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="p-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <b>Pesan : </b>
                                </div>
                                <div class="col-md-9">
                                    {{$pengesahanpp->pesan}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mx-4">
    <div class="card">
        <div class="card-body">
            <div class="p-4">
                <div class="table-responsivee">
                    <form action="/edit-permohonan-pp/{{$pengesahanpp->id}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <table class="table align-middle mb-0 bg-white">
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
                                    <th>
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
                                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <a href="/storage/{{$pengesahanpp->user_id}}/pp/{{$pengesahanpp->fc_wlkp}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                            <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="file" class="form-control" name="fc_wlkp" required>
                                                    </div>
                                                </div>
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
                                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pengesahanpp->user_id}}/pp/{{$pengesahanpp->fc_akta_pendirian_perusahaan}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="fc_akta_pendirian_perusahaan" required>
                                                </div>
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
                                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/pp/{{$pengesahanpp->user_id}}/{{$pengesahanpp->fc_sertifikat_peserta_bpjs_ketenagakerjaan}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="fc_sertifikat_peserta_bpjs_ketenagakerjaan" required>
                                                </div>
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
                                                <label for="">Permohonan Pengesahan PP</label>
                                                    <a href="" class="btn btn-primary btn-sm" title="Template"><i class="bi bi-file-text-fill"></i></a><br>
                                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pengesahanpp->user_id}}/pp/{{$pengesahanpp->permohonan_pengesahan_pp}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="permohonan_pengesahan_pp" required>
                                                </div>
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
                                                <label for="">Surat pernyataan bahwa PP sudah dimintakan saran dan pertimbangan dari wakil pekerja, SP/SB</label>
                                                    <a href="" class="btn btn-primary btn-sm" title="Template"><i class="bi bi-file-text-fill"></i></a><br>
                                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pengesahanpp->user_id}}/pp/{{$pengesahanpp->surat_pernyataan_saran_spsb}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="surat_pernyataan_saran_spsb" required>
                                                </div>
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
                                                <label for="">Surat pernyataan bahwa di Perusahaan belum terbentuk SP/SB</label>
                                                    <a href="" class="btn btn-primary btn-sm" title="Template"><i class="bi bi-file-text-fill"></i></a><br>
                                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pengesahanpp->user_id}}/pp/{{$pengesahanpp->surat_pernyataan_belum_terbentuk_spsb}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="surat_pernyataan_belum_terbentuk_spsb" required>
                                                </div>
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
                                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pengesahanpp->user_id}}/pp/{{$pengesahanpp->surat_pernyataan_struktur_skala_upah}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="surat_pernyataan_struktur_skala_upah" required>
                                                </div>
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
                                                <label for="">Struktur upah dan skala upah asli untuk ditunjuk ke pegawai / petugas pengoreksi PP</label><br>
                                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pengesahanpp->user_id}}/pp/{{$pengesahanpp->struktur_skala_upah_asli}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="struktur_skala_upah_asli" required>
                                                </div>
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
                                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pengesahanpp->user_id}}/pp/{{$pengesahanpp->draf_pp}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="draf_pp" required>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                        </table>

                        <div class="d-grid gap-2 col-2 mt-4 mx-auto">
                            <button class="btn btn-primary btn-block" id="btn" type="submit"><a style="color: #ffffff;"><b>Kirim Ulang</b></a></label></button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
