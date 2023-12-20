@extends('layout.admin')

@section('content')
<div class="pagetitle">
    <h1>Asset</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Manajemen Asset</li>
      </ol>
    </nav>
</div>

<div class="card">
    <div class="card-body">
        <ul class="mt-1 mb-2 nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
                <div class="mx-4">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#pp">PP</button>
                </div>
            </li>

            <li class="nav-item">
                <div class="mx-4">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pkb">PKB</button>
                </div>
            </li>

            <li class="nav-item">
                <div class="mx-4">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pkwt">PKWT</button>
                </div>
            </li>

            <li class="nav-item">
                <div class="mx-4">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#spsb">SPSB</button>
                </div>
            </li>

            <li class="nav-item">
                <div class="mx-4">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#lks">LKS</button>
                </div>
            </li>

            <li class="nav-item">
                <div class="mx-4">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#hi">HI</button>
                </div>
            </li>

            <li class="nav-item">
                <div class="mx-4">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#phk">PHK</button>
                </div>
            </li>

        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active profile-overview" id="pp">
                <div class="mt-3 disabled-text text-center">
                    Asset Permohonan Pengesahan Peraturan Perusahaan
                </div>
                <div class="card-title my-1">
                    <label>Alur Perizinan</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="alur_perizinan" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                    <label>Dasar Hukum</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="dasar_hukum" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Durasi Pemrosesan</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="durasi_pemrosesan" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Kontak</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="kontak" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Retribusi</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="retribusi" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Maklumat</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="maklumat" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Visi Misi</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="visi_misi" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Motto</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="motto" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-pane fade" id="pkb">
                <div class="mt-3 disabled-text text-center">
                    Asset Permohonan Pendaftaran Perjanjian Kerja Bersama
                </div>
                <div class="card-title my-1">
                    <label>Alur Perizinan</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="alur_perizinan" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                    <label>Dasar Hukum</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="dasar_hukum" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                    <label>Durasi Pemrosesan</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="durasi_pemrosesan" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                    <label>Kontak</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="kontak" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                    <label>Retribusi</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="retribusi" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                    <label>Maklumat</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="maklumat" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                    <label>Visi Misi</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="visi_misi" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                    <label>Motto</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="visi_misi" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pkwt">
                <div class="mt-3 disabled-text text-center">
                    Asset Permohonan Pendaftaran Perjanjian Kerja Waktu Tertentu
                </div>
                <div class="card-title my-1">
                    <label>Alur Perizinan</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="alur_perizinan" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                    <label>Dasar Hukum</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="dasar_hukum" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Durasi Pemrosesan</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="durasi_pemrosesan" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Kontak</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="kontak" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Retribusi</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="retribusi" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Maklumat</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="maklumat" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Visi Misi</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="visi_misi" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Motto</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="motto" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-pane fade" id="spsb">
                <div class="mt-3 disabled-text text-center">
                    Asset Permohonan Pencatatan Serikat Pekerja/Serikat Buruh
                </div>
                <div class="card-title my-1">
                    <label>Alur Perizinan</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="alur_perizinan" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                    <label>Dasar Hukum</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="dasar_hukum" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Durasi Pemrosesan</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="durasi_pemrosesan" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Kontak</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="kontak" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Retribusi</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="retribusi" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Maklumat</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="maklumat" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Visi Misi</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="visi_misi" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Motto</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="motto" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-pane fade" id="lks">
                <div class="mt-3 disabled-text text-center">
                    Asset Permohonan Pendaftaran Lembaga Kerja Sama Bipartit
                </div>
                <div class="card-title my-1">
                    <label>Alur Perizinan</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="alur_perizinan" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                    <label>Dasar Hukum</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="dasar_hukum" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Durasi Pemrosesan</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="durasi_pemrosesan" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Kontak</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="kontak" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Retribusi</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="retribusi" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Maklumat</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="maklumat" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Visi Misi</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="visi_misi" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Motto</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="motto" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-pane fade" id="hi">
                <div class="mt-3 disabled-text text-center">
                    Asset Permohonan Pencatatan Penyelesaian Perselisihan Hubungan Internal
                </div>
                <div class="card-title my-1">
                    <label>Alur Perizinan</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="alur_perizinan" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                    <label>Dasar Hukum</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="dasar_hukum" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Durasi Pemrosesan</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="durasi_pemrosesan" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Kontak</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="kontak" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Retribusi</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="retribusi" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Maklumat</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="maklumat" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Visi Misi</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="visi_misi" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Motto</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="motto" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-pane fade" id="phk">
                <div class="mt-3 disabled-text text-center">
                    Asset Permohonan Pelaporan Pemutusan Hubungan Kerja
                </div>
                <div class="card-title my-1">
                    <label>Alur Perizinan</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="alur_perizinan" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                    <label>Dasar Hukum</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="dasar_hukum" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Durasi Pemrosesan</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="durasi_pemrosesan" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Kontak</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="kontak" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Retribusi</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="retribusi" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Maklumat</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="maklumat" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Visi Misi</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="visi_misi" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>


                    <label>Motto</label><br>
                    <div class="row">
                        <div class="col-9 mb-4">
                            <input type="file" name="motto" class="my-1 form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <a href="" class="btn btn-primary">Kirim</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>



@endsection
