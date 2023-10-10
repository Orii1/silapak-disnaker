@extends('layout.header')

@section('content')

<section class="box">

    <section>
        <h1 style="padding: 30px;">Pendaftaran Perjanjian Kerja Waktu Tertentu, {{$user->name}}</h1>
    </section>



    <div class="mt-0 mx-3">
        <table class="table table-bordered align-middle mb-0 bg-white">
            <form action="/permohonan/pencatatan-serikat-kerja" method="POST" enctype="multipart/form-data">
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
                            <label for="">Surat permohonan pencacatan PKWT</label><br>
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
                            <label for="">Daftar nama pekerja / buruh yang di PKWT</label><br>
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
                            <label for="">Asli PKWT yang sudah ditandatangani oleh para pihak (pengusaha dan pekerja)</label><br>
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
                            <label for="">Fotocopy WLKP yang masih berlaku</label><br>
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
                            <label for="">Fotocopy akta pendirian Perusahaan</label><br>
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
              <button class="btn btn-warning btn-lg btn-block" id="btn" type="submit"><a style="color: #ffffff">Simpan</a></label></button>
        </div>
    </form>
    </div>
</section>
@endsection
