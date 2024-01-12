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
                    <label>Alur Perizinan <a href="/storage/asset/{{$asset_pp->alur_perizinan}}" target="_blank" title="Alur Perizinan Saat Ini"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/alur-perizinan/store/1" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="file" name="alur_perizinan" class="my-1 form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                    <label>Dasar Hukum <a href="" title="{{$asset_pp->dasar_hukum}}"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/dasar-hukum/store/1" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="text" name="dasar_hukum" class="form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                    <label>Durasi Pemrosesan <a href="" title="{{$asset_pp->durasi_pemrosesan}}"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/durasi-pemrosesan/store/1" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="text" name="durasi_pemrosesan" class="form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="tab-pane fade" id="pkb">
                <div class="mt-3 disabled-text text-center">
                    Asset Permohonan Pendaftaran Perjanjian Kerja Bersama
                </div>
                <div class="card-title my-1">
                    <label>Alur Perizinan <a href="/storage/asset/{{$asset_pkb->alur_perizinan}}" target="_blank" title="Alur Perizinan Saat Ini"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/alur-perizinan/store/2" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="file" name="alur_perizinan" class="my-1 form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                    <label>Dasar Hukum <a href="" title="{{$asset_pkb->dasar_hukum}}"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/dasar-hukum/store/2" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="text" name="dasar_hukum" class="form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                    <label>Durasi Pemrosesan <a href="" title="{{$asset_pkb->durasi_pemrosesan}}"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/durasi-pemrosesan/store/2" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="text" name="durasi_pemrosesan" class="form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="tab-pane fade" id="pkwt">
                <div class="mt-3 disabled-text text-center">
                    Asset Permohonan Pendaftaran Perjanjian Kerja Waktu Tertentu
                </div>
                <div class="card-title my-1">
                    <label>Alur Perizinan <a href="/storage/asset/{{$asset_pkwt->alur_perizinan}}" title="Alur Perizinan Saat Ini"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/alur-perizinan/store/3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="file" name="alur_perizinan" class="my-1 form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                    <label>Dasar Hukum <a href="" title="{{$asset_pkwt->dasar_hukum}}" target="_blank"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/dasar-hukum/store/3" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="text" name="dasar_hukum" class="form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                    <label>Durasi Pemrosesan <a title="{{$asset_pkwt->durasi_pemrosesan}}"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/durasi-pemrosesan/store/3" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="text" name="durasi_pemrosesan" class="form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="tab-pane fade" id="spsb">
                <div class="mt-3 disabled-text text-center">
                    Asset Permohonan Pencatatan Serikat Pekerja/Serikat Buruh
                </div>
                <div class="card-title my-1">
                    <label>Alur Perizinan <a href="/storage/asset/{{$asset_spsb->alur_perizinan}}" title="Alur Perizinan Saat Ini"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/alur-perizinan/store/4" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="file" name="alur_perizinan" class="my-1 form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                    <label>Dasar Hukum <a href="" title="{{$asset_spsb->dasar_hukum}}"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/dasar-hukum/store/4" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="text" name="dasar_hukum" class="form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                    <label>Durasi Pemrosesan <a href="" title="{{$asset_spsb->durasi_pemrosesan}}"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/durasi-pemrosesan/store/4" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="text" name="durasi_pemrosesan" class="form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="tab-pane fade" id="lks">
                <div class="mt-3 disabled-text text-center">
                    Asset Permohonan Pendaftaran Lembaga Kerja Sama Bipartit
                </div>
                <div class="card-title my-1">
                    <label>Alur Perizinan <a href="/storage/asset/{{$asset_lks->alur_perizinan}}" title="Alur Perizinan Saat Ini"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/alur-perizinan/store/5" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="file" name="alur_perizinan" class="my-1 form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                    <label>Dasar Hukum <a href="" title="{{$asset_lks->dasar_hukum}}"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/dasar-hukum/store/5" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="text" name="dasar_hukum" class="form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                    <label>Durasi Pemrosesan <a href="" title="{{$asset_lks->durasi_pemrosesan}}"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/durasi-pemrosesan/store/5" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="text" name="durasi_pemrosesan" class="form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="tab-pane fade" id="hi">
                <div class="mt-3 disabled-text text-center">
                    Asset Permohonan Pencatatan Penyelesaian Perselisihan Hubungan Internal
                </div>
                <div class="card-title my-1">
                    <label>Alur Perizinan <a href="/storage/asset/{{$asset_hi->alur_perizinan}}" title="Alur Perizinan Saat Ini"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/alur-perizinan/store/6" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="file" name="alur_perizinan" class="my-1 form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                    <label>Dasar Hukum <a href="" title="{{$asset_hi->dasar_hukum}}"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/dasar-hukum/store/6" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="text" name="dasar_hukum" class="form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                    <label>Durasi Pemrosesan <a href="" title="{{$asset_hi->durasi_pemrosesan}}"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/durasi-pemrosesan/store/6" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="text" name="durasi_pemrosesan" class="form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="tab-pane fade" id="phk">
                <div class="mt-3 disabled-text text-center">
                    Asset Permohonan Pelaporan Pemutusan Hubungan Kerja
                </div>
                <div class="card-title my-1">
                    <label>Alur Perizinan <a href="/storage/asset/{{$asset_phk->alur_perizinan}}" title="Alur Perizinan Saat Ini"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/alur-perizinan/store/7" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="file" name="alur_perizinan" class="my-1 form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                    <label>Dasar Hukum <a href="" title="{{$asset_phk->dasar_hukum}}"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/dasar-hukum/store/7" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="text" name="dasar_hukum" class="form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                    <label>Durasi Pemrosesan <a href="" title="{{$asset_phk->durasi_pemrosesan}}"><i class="bi bi-info-square-fill"></i></a></label><br>
                    <form action="/durasi-pemrosesan/store/7" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-9 mb-4">
                                <input type="text" name="durasi_pemrosesan" class="form-control" required>
                            </div>
                            <div class="col-3 mb-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="card-title my-1">
            <label>Kontak <a href="" title="Alur Perizinan Saat Ini"><i class="bi bi-info-square-fill"></i></a></label><br>
            <form action="/kontak/store/1" method="POST">
                @csrf
                <div class="row">
                    <div class="col-9 mb-4">
                        <input type="number" name="kontak" class="form-control" required>
                    </div>
                    <div class="col-3 mb-4">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>

            <label>Retribusi <a href="" title="Alur Perizinan Saat Ini"><i class="bi bi-info-square-fill"></i></a></label><br>
            <form action="/retribusi/store/1" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-9 mb-4">
                        <input type="file" name="retribusi" class="my-1 form-control" required>
                    </div>
                    <div class="col-3 mb-4">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>

            <label>Maklumat <a href="" title="Alur Perizinan Saat Ini"><i class="bi bi-info-square-fill"></i></a></label><br>
            <form action="/maklumat/store/1" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-9 mb-4">
                        <input type="file" name="maklumat" class="my-1 form-control" required>
                    </div>
                    <div class="col-3 mb-4">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>

            <label>Visi Misi <a href="" title="Alur Perizinan Saat Ini"><i class="bi bi-info-square-fill"></i></a></label><br>
            <form action="/visi-misi/store/1" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-9 mb-4">
                        <input type="file" name="visi_misi" class="my-1 form-control" required>
                    </div>
                    <div class="col-3 mb-4">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>

            <label>Motto <a href="" title="Alur Perizinan Saat Ini"><i class="bi bi-info-square-fill"></i></a></label><br>
            <form action="/motto/store/1" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-9 mb-4">
                        <input type="file" name="motto" class="my-1 form-control" required>
                    </div>
                    <div class="col-3 mb-4">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection
