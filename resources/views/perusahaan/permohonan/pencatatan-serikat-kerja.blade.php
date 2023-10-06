@extends('layout.header')

@section('content')

<section class="box">
    <section>
        <h1 style="padding: 30px;">Pencatatan Serikat Pekerja/Serikat Buruh</h1>
    </section>



        <div class="mt-0 mx-3">
            <table class="table table-bordered align-middle mb-0 bg-white">
                <form action="" method="POST">
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

                @php($no=1)
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
                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <input type="file" name="surat_permohonan" id="">
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
                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <input type="file" name="ad_art" id="">
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
                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <input type="file" name="nama_pembentuk" id="">
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
                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <input type="file" name="nama_pengurus" id="">
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
                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <input type="file" name="ba_pembentukan" id="">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="col-md-4 pt-1 mt-4">
                  <button class="btn btn-warning btn-lg btn-block" type="submit"><a style="color: #ffffff">Simpan</a></label></button>
            </div>
        </form>
        </div>
</section>
@endsection
