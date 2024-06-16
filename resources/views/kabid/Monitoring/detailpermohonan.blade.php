@extends('layout.kabid')

@section('title')


@section('content')

<div class="container-fluid">
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-bordered w-100" style="background-color: white;">
                    <tr>
                        <td colspan="2">
                            <b>Detail Permohonan</b>
                            <div class="text-center">
                                <tr>
                                    <td>
                                        <b>Nama Perusahaan</b>
                                        <p>PT Sinar Mas</p>
                                    </td>
                                    <td>
                                        <b>Peruntukkan</b>
                                        <p>Perpanjangan Peraturan Perusahaan</p>
                                    </td>
                                </tr>
                            </div>
                        </td>
                        <td>
                            <div id="visiContent">
                                <b>Status</b>
                            </div>
                            <div>
                                <div>
                                    Diterima
                                </div>
                            </div>
                        </td>
                        <td>
                            <b>Jenis Permohonan</b>
                            <p>
                               Pengesahan Peraturan Perusahaan
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="container mt-1 mb-5">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-bordered text-center" style="background-color: white;">
                    <thead>
                        <tr>
                            <td colspan="9">
                                <div class="btn-group">
                                    <h5><p class="ml-3 text-center"><b>Nama Mediator :</b> Amiruddin Anshori</p></h5>
                                </div>
                            </td>
                            <!-- Termasuk modal edit dan hapus sasaran -->
                            
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>Persyaratan</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contoh data persyaratan -->
                        <tr>
                            <td>1</td>
                            <td>Fotocopy WLKP yang masih berlaku</td>
                            <td> <div class="text-center">
                                <a href="" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                    <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                </a>
                            </div></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Fotocopy Akta Pendirian Perusahaan</td>
                            <td> <div class="text-center">
                                <a href="" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                    <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                </a>
                            </div></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Fotocopy Akta Pendirian Perusahaan</td>
                            <td> <div class="text-center">
                                <a href="" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                    <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                </a>
                            </div></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Permohonan Pengesahan PP</td>
                            <td> <div class="text-center">
                                <a href="" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                    <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                </a>
                            </div></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Surat pernyataan bahwa di Perusahaan belum terbentuk SP/SB</td>
                            <td> <div class="text-center">
                                <a href="" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                    <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                </a>
                            </div></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Surat pernyataan bahwa PP sudah dimintakan saran dan pertimbangan dari wakil pekerja, SP/SB.
                            </td>
                            <td> <div class="text-center">
                                <a href="" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                    <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                </a>
                            </div></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Surat pernyataan sudah / belum memiliki struktur upah dan skala upah dan sudah dilaksanakan</td>
                            <td> <div class="text-center">
                                <a href="" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                    <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                </a>
                            </div></td>
                        </tr>
                        <!-- Tambahkan baris persyaratan lainnya sesuai kebutuhan -->
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>

   
</div>

@endsection