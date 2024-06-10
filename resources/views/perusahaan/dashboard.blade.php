@extends('layout.header2')

@section('content')
<div class="pagetitle-company">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/perusahaan/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div>

<div class="mx-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                        Selamat datang, {{$user->user_perusahaan->nama_perusahaan}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                       {{$dayname}}, {{$datestring}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                                Profile Perusahaan Anda <br>
                                <span><i>(Informasi Lengkap mengenai Profile Perusahaan Anda)</i></span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-end me-3">
                                <div class="my-4">
                                    <a href="/profileperusahaan/{{$user->id}}" class="btn btn-primary btn-lg"><i class="bi bi-building-fill-exclamation"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                                Cek Permohonan Perusahaan Anda <br>
                                <span><i>(Informasi Status Permohonan Perusahaan Anda yang telah diajukan sebelumnya)</i></span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-end me-3">
                                <div class="my-4">
                                    <a href="/cek-permohonan/{{$user->user_perusahaan->id}}" class="btn btn-primary btn-lg"><i class="bi bi-hourglass-split"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="me-4">
                    <div class="text-center">
                        <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                            <div class="mb-3">
                                Ajukan Permohonan Anda
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 ps-5">
                            <a href="/permohonan/pengesahan-peraturan-perusahaan">
                                <div class="cardd">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3 d-flex align-items-center">
                                                <img src="/assets/img/permohonan.png" class="img-fluid" style="width: 100px;" alt="">
                                            </div>
                                            <div class="col-9">
                                                <div class="card-menu" style="padding-top: 40px; padding-bottom: 35px;">
                                                    Pengesahan Peraturan Perusahaan
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 ps-5">
                            <a href="/permohonan/pendaftaran-pkb">
                                <div class="cardd">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3 d-flex align-items-center">
                                                <img src="/assets/img/pkb.png" class="img-fluid" style="width: 100px;" alt="">
                                            </div>
                                            <div class="col-9">
                                                <div class="card-menu" style="padding-top: 40px; padding-bottom: 35px;">
                                                    Pendaftaran Perjanjian Kerja Bersama
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 ps-5">
                            <a href="/permohonan/pendaftaran-perjanjian-kerja-waktu-tertentu">
                                <div class="cardd">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3 d-flex align-items-center">
                                                <img src="/assets/img/pkwt.png" class="img-fluid" style="width: 100px;" alt="">
                                            </div>
                                            <div class="col-9">
                                                <div class="card-menu" style="padding-top: 40px; padding-bottom: 35px;">
                                                    Pendaftaran Perjanjian Kerja Waktu Tertentu
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 ps-5">
                            <a href="/permohonan/pencatatan-serikat-kerja">
                                <div class="cardd">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3 d-flex align-items-center">
                                                <img src="/assets/img/spsb.png" class="img-fluid" style="width: 100px;" alt="">
                                            </div>
                                            <div class="col-9">
                                                <div class="card-menu" style="padding-top: 40px; padding-bottom: 35px;">
                                                    Pencatatan Serikat Pekerja/Serikat Buruh
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 ps-5">
                            <a href="/permohonan/pendaftaran-lks-bipartit">
                                <div class="cardd">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3 d-flex align-items-center">
                                                <img src="/assets/img/lks.png" class="img-fluid" style="width: 100px;" alt="">
                                            </div>
                                            <div class="col-9">
                                                <div class="card-menu" style="padding-top: 40px; padding-bottom: 35px;">
                                                    Pendaftaran Lembaga Kerja Sama Bipartit
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 ps-5">
                            <a href="/permohonan/pencatatan-penyelesaian-perselisihan-internal">
                                <div class="cardd">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3 d-flex align-items-center">
                                                <img src="/assets/img/hi.png" class="img-fluid" style="width: 100px;" alt="">
                                            </div>
                                            <div class="col-9">
                                                <div class="card-menu" style="padding-top: 40px; padding-bottom: 35px;">
                                                    Pencatatan Penyelesaian Perselisihan Hubungan Industrial
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 ps-5">
                            <a href="/permohonan/pelaporan-pemutusan-hubungan-kerja">
                                <div class="cardd">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3 d-flex align-items-center">
                                                <img src="/assets/img/phk.png" class="img-fluid" style="width: 100px;" alt="">
                                            </div>
                                            <div class="col-9">
                                                <div class="card-menu" style="padding-top: 40px; padding-bottom: 35px;">
                                                    Pelaporan Pemutusan Hubungan Kerja
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


@endsection
