@extends('layout.header2')

@section('content')

<div class="pagetitle-company">
    <h1>Ajuan Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Permohonan Pengesahan Peraturan Perusahaan</li>
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
                                <img src="../../assets/img/permohonan.png" width="50px;" alt="icon">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                                Permohonan Pengesahan Peraturan Perusahaan, {{$user->name}}
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
    <div class="mt-3 mb-5">
        <table class="table table-bordered align-middle mb-0 bg-white">
            <form action="/permohonan/pengesahan-peraturan-perusahaan" method="POST" enctype="multipart/form-data">
            @csrf
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
                            <input type="file" name="fc_wlkp" id="">
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
                        <div class="text-center">
                            <input type="file" name="fc_akta_pendirian_perusahaan" id="">
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
                        <div class="text-center">
                            <input type="file" name="fc_sertifikat_peserta_bpjs_ketenagakerjaan" id="">
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
                            <label for="">Permohonan Pendaftaran PP</label><br>
                            <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <input type="file" name="permohonan_pengesahan_pp" id="">
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
                            <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <input type="file" name="surat_pernyataan_saran_spsb" id="">
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
                            <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <input type="file" name="surat_pernyataan_belum_terbentuk_spsb" id="">
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
                        <div class="text-center">
                            <input type="file" name="surat_pernyataan_struktur_skala_upah" id="">
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
                        <div class="text-center">
                            <input type="file" name="struktur_skala_upah_asli" id="">
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
                        <div class="text-center">
                            <input type="file" name="draf_pp" id="">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="col-md-4 pt-1 mt-4">
              <button class="btn btn-warning btn-lg btn-block" id="btn" type="submit"><a style="color: #ffffff">Simpan</a></label></button>
        </div>
    </form>
    </div>
</div>
    </div>
</div>

{{-- <section class="box">
    <section>
        <h1 style="padding: 30px;">Pengesahan Peraturan Perusahaan, {{$user->name}}</h1>
    </section>

        <div class="mt-0 mx-3">
            <table class="table table-bordered align-middle mb-0 bg-white">
                <form action="/permohonan/pengesahan-peraturan-perusahaan" method="POST" enctype="multipart/form-data">
                @csrf
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
                                <input type="file" name="fc_wlkp" id="">
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
                            <div class="text-center">
                                <input type="file" name="fc_akta_pendirian_perusahaan" id="">
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
                            <div class="text-center">
                                <input type="file" name="fc_sertifikat_peserta_bpjs_ketenagakerjaan" id="">
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
                                <label for="">Permohonan Pendaftaran PP</label><br>
                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <input type="file" name="permohonan_pengesahan_pp" id="">
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
                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <input type="file" name="surat_pernyataan_saran_spsb" id="">
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
                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <input type="file" name="surat_pernyataan_belum_terbentuk_spsb" id="">
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
                            <div class="text-center">
                                <input type="file" name="surat_pernyataan_struktur_skala_upah" id="">
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
                            <div class="text-center">
                                <input type="file" name="struktur_skala_upah_asli" id="">
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
                            <div class="text-center">
                                <input type="file" name="draf_pp" id="">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="col-md-4 pt-1 mt-4">
                  <button class="btn btn-warning btn-lg btn-block" id="btn" type="submit"><a style="color: #ffffff">Simpan</a></label></button>
            </div>
        </form>
        </div>
</section> --}}

@endsection
