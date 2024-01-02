@extends('layout.admin')

@section('content')
    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Data Perusahaan</li>
                <li class="breadcrumb-item active">Detail Perusahaan</li>
            </ol>
        </nav>
    </div>

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="../../assets/img/company-icon.png" alt="Profile" class="rounded-circle"
                            style="width: 500px;">
                        <h2 class="mb-1">{{ $detail->name }}</h2>
                        <h3 class="mb-4 text-muted text-center">{{ $detail->email }}</h3>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <div class="text-center">
                                <h5 class="card-title">Detail Perusahaan</h5>
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    <a href="/download/data-perusahaan/{{$detail->id}}" target="_blank" class="btn btn-danger btn-sm"><i class="bi bi-printer-fill"></i> Cetak PDF</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="label">Nama Perusahaan</div><br>
                                        <label>{{$detail->name}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="label">Alamat</div><br>
                                        <label>{{$detail->address}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="label">Nama Pemilik</div><br>
                                        <label>{{$detail->owner}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="label">Email</div><br>
                                        <label>{{$detail->email}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="label">Jenis Usaha</div><br>
                                        <label>{{$detail->type}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="label">Modal</div><br>
                                        <label>{{$detail->modal}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="label">Sektor</div><br>
                                        <label>{{$detail->sector}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="label">Status Perusahaan</div><br>
                                        <label>{{$detail->status}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="label">Surat Keputusan Izin Usaha</div><br>
                                        <label>No : {{$detail->number_letter}}</label>
                                        <label>Tanggal : {{$detail->date_latter}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="label">Jumlah Tenaga Kerja <i>(Orang)</i></div><br>
                                        <label>Laki-laki <b>{{$detail->men}}</b></label>
                                        <label>Wanita <b>{{$detail->woman}}</b></label>
                                    </div>
                                    <div class="row">
                                        <div class="label">Status Hubungan Kerja <i>(Orang)</i></div><br>
                                        <label>PKWT <b>{{$detail->pkwt}}</b></label>
                                        <label>Outsourcing <b>{{$detail->outsourcing}}</b></label>
                                        <label>WNA <b>{{$detail->wna}}</b></label>
                                    </div>
                                    <div class="row">
                                        <div class="label">No Kepesertaan BPJS Ketenagakerjaan</div><br>
                                        <label>{{$detail->number_ketenagakerjaan}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="label">No Kepesertaan BPJS Kesehatan</div><br>
                                        <label>{{$detail->number_kesehatan}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="d-flex align-content-center flex-wrap">
                                            <div style="border:0; width: 100%;" allowfullscreen>
                                                @include('map2')
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>lat : {{$detail->lat}}</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>lng : {{$detail->lng}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
