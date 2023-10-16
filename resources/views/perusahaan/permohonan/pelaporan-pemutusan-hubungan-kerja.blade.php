@extends('layout.header')

@section('content')
<section class="box">
    <section>
        <h1 style="padding: 30px;">Pelaporan Pemutusan Hubungan Kerja, {{$user->name}}</h1>
    </section>



    <div class="mt-0 mx-3">
        <form action="/permohonan/pelaporan-pemutusan-hubungan-kerja" method="POST" enctype="multipart/form-data">
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
                                <label for="">Permohonan pelaporan PHK</label><br>
                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <input type="file" name="permohonan_pelaporan_phk" id="">
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
                                <label for="">Surat pemberitahuan PHK dari pengusaha ke pekerja / buruh</label><br>
                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <input type="file" name="surat_pemberitahuan_phk" id="">
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
                                <label for="">Surat tanggapan atas pemberitahuan dari pengusaha oleh pekerja / buruh</label><br>
                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <input type="file" name="surat_tanggapan_pemberitahuan_phk" id="">
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
                                <label for="">Perjanjian bersama Bipartit (jika terjadi kesepakatan / jika pekerja / buruh tidak menolak PHK)</label><br>
                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png)</i></label>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <input type="file" name="pb_bipartit" id="">
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
