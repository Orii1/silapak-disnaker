@extends('layout.admin')

@section('content')
{{-- MODAL --}}

    {{-- Fotocopy WLKP yang masih berlaku --}}
    <div class="modal modal-xl fade" id="fc_wlkp" tabindex="-1" aria-labelledby="fc_wlkpLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="fc_wlkpLabel">Fotocopy WLKP yang masih berlaku - {{$data->pkb_user->name}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{asset('storage/pkb/'.$data->fc_wlkp)}}" style="width:1100px;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Fotocopy Akta Pendirian Perusahaan --}}
    <div class="modal modal-xl fade" id="fc_akta_pendirian_perusahaan" tabindex="-1" aria-labelledby="fc_akta_pendirian_perusahaanLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="fc_akta_pendirian_perusahaanLabel">Fotocopy Akta Pendirian Perusahaan - {{$data->pkb_user->name}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{asset('storage/pkb/'.$data->fc_akta_pendirian_perusahaan)}}" style="width:1100px;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Fotocopy sertifikat Kepesertaan BPJS Ketenagakerjaan dan BPJS Kesehatan serta Bukti Pembayaran iuran Kepesertaan terakhir --}}
    <div class="modal modal-xl fade" id="fc_setifikat_peserta_bpjs_ketenagakerjaan" tabindex="-1" aria-labelledby="fc_setifikat_peserta_bpjs_ketenagakerjaanLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="fc_setifikat_peserta_bpjs_ketenagakerjaanLabel">Fotocopy sertifikat Kepesertaan BPJS Ketenagakerjaan dan BPJS Kesehatan serta Bukti Pembayaran iuran Kepesertaan terakhir - {{$data->pkb_user->name}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{asset('storage/pkb/'.$data->fc_setifikat_peserta_bpjs_ketenagakerjaan)}}" style="width:1100px;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Fotocopy sertifikat Kepesertaan BPJS Ketenagakerjaan dan BPJS Kesehatan serta Bukti Pembayaran iuran Kepesertaan terakhir --}}
    <div class="modal modal-xl fade" id="permohonan_pendaftaran_pkb" tabindex="-1" aria-labelledby="permohonan_pendaftaran_pkbLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="permohonan_pendaftaran_pkbLabel">Permohonan pendaftaran PKB - {{$data->pkb_user->name}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{asset('storage/pkb/'.$data->permohonan_pendaftaran_pkb)}}" style="width:1100px;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

{{-- END MODAL --}}

{{-- MAIN --}}
<div class="pagetitle">
    <h1>Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Permohonan Pengesahan Peraturan Perusahaan</li>
            <li class="breadcrumb-item active">{{$data->pkb_user->name}}</li>
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
                            <label for="">Fotocopy WLKP yang masih berlaku</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a href="/storage/pkb/{{$data->fc_wlkp}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
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
                            <label for="">Fotocopy Akta Pendirian Perusahaan</label><br>
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#fc_akta_pendirian_perusahaan" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                            </button>
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
                            <label for="">Fotocopy sertifikat Kepesertaan BPJS Ketenagakerjaan dan BPJS Kesehatan serta Bukti Pembayaran iuran Kepesertaan terakhir</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#fc_setifikat_peserta_bpjs_ketenagakerjaan" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                            </button>
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
                            <label for="">Permohonan pendaftaran PKB</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#permohonan_pendaftaran_pkb" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                            </button>
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
                            <label for="">Surat Pernyataan sudah / belum memiliki strutur skala upah dan sudah dilaksanakan di Perusahaan</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#surat_pernyataan_saran_spsb" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                            </button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fc_akta_pendirian_perusahaan" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-download" style="height:100px;color: white;"></i>
                            </button>
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
                            <label for="">Struktur skala upah asli untuk diperlihatkan ke pegawai / petugas pengoreksi PP</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#surat_pernyataan_belum_terbentuk_spsb" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                            </button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fc_akta_pendirian_perusahaan" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-download" style="height:100px;color: white;"></i>
                            </button>
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
                            <label for="">Draft PKB sebanyak 3 eksemplar yang sudah diparaf oleh pimpinan dan ketua SP /SB</label><br>

                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#surat_pernyataan_struktur_skala_upah" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                            </button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fc_akta_pendirian_perusahaan" style="color: rgb(255, 235, 20);">
                                <i class="bi bi-download" style="height:100px;color: white;"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
    </table>
</div>

<div class="mt-4">
    <div class="text-center">
        <label for=""><b>Setelah dilakukan pemeriksaan, dengan ini permohonan dari {{$data->pkb_user->name}} :</b></label><br>
        <div class="mt-2">
            <a href="/permohonan-pkb/terima/{{$data->id}}" class="btn btn-success"><i class="bi bi-check-circle-fill" style="height:100px;color: white;"></i> Terima</a>
            <a href="/permohonan-pkb/tolak/{{$data->id}}" class="btn btn-danger"><i class="bi bi-x-circle-fill" style="height:100px;color: white;"></i> Tolak</a>
        </div>
    </div>
</div>
{{-- END MAIN --}}
@endsection
