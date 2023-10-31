@extends('layout.header')

@section('content')
<section class="box">
    <section>
        <h1 style="padding: 30px;">Pendaftaran Perjanjian Kerja Bersama, {{$user->name}}</h1>
    </section>



    <div class="mt-0 mx-3">
        <form action="/permohonan/pendaftaran-pkb" method="POST" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered align-middle mb-0 bg-white">
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
                                <label for="">Fotocopy sertifikat Kepesertaan BPJS Ketenagakerjaan dan BPJS Kesehatan serta Bukti Pembayaran iuran Kepesertaan terakhir</label><br>
                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <input type="file" name="fc_setifikat_peserta_bpjs_ketenagakerjaan" id="">
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
                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <input type="file" name="permohonan_pendaftaran_pkb" id="">
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
                                <label for=""> Surat Pernyataan sudah / belum memiliki strutur skala upah dan sudah dilaksanakan di Perusahaan</label><br>
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
                                6
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <label for="">Struktur skala upah asli untuk diperlihatkan ke pegawai / petugas pengoreksi PP</label><br>
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
                                7
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <label for="">Draft PKB sebanyak 3 eksemplar yang sudah diparaf oleh pimpinan dan ketua SP /SB</label><br>
                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <input type="file" name="draft_pkb" id="">
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
</section>

@endsection
