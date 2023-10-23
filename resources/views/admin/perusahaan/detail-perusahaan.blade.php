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
            <img src="../../assets/img/company-icon.png" alt="Profile" class="rounded-circle" style="width: 500px;">
            <h2 class="mb-1">{{$detail->name}}</h2>
            <h3 class="mb-2 text-muted text-center">{{$detail->email}}</h3>
          </div>
        </div>

      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body">
            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <div class="mx-5">
                    <h5 class="card-title mx-5 mb-4">Detail Perusahaan</h5>
                </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 label ">Nama</div>
                        <div class="col-lg-5 col-md-8 label">Jumlah Tenaga Kerja <i>(Orang)</i></div>
                        <div class="col-lg-5 col-md-6">{{$detail->name}}</div>
                        <div class="col-lg-2 col-md-8">Laki-laki <b>{{$detail->men}}</b></div>
                        <div class="col-lg-2 col-md-8">Wanita <b>{{$detail->woman}}</b></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-4 label">Alamat</div>
                        <div class="col-lg-5 col-md-8 label">Status Hubungan Kerja <i>(Orang)</i></div>
                        <div class="col-lg-5 col-md-8">{{$detail->address}}</div>
                        <div class="col-lg-2 col-md-8">PKWT <b>{{$detail->pkwt}}</b></div>
                        <div class="col-lg-3 col-md-8">Outsourcing <b>{{$detail->outsourcing}}</b></div>
                        <div class="col-lg-2 col-md-8">WNA <b>{{$detail->wna}}</b></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-4 label">Nama Pemilik</div>
                        <div class="col-lg-5 col-md-4 label">No Kepesertaan BPJS Ketenagakerjaan</div>
                        <div class="col-lg-5 col-md-8">{{$detail->owner}}</div>
                        <div class="col-lg-4 col-md-8">{{$detail->number_ketenagakerjaan}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-4 label">Email</div>
                        <div class="col-lg-5 col-md-4 label">No Kepesertaan BPJS Kesehatan</div>
                        <div class="col-lg-5 col-md-8">{{$detail->email}}</div>
                        <div class="col-lg-4 col-md-8">{{$detail->number_kesehatan}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-4 label">Jenis Usaha</div>
                        <div class="col-lg-9 col-md-8">{{$detail->type}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-4 label">Sektor</div>
                        <div class="col-lg-9 col-md-8">{{$detail->sector}}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 label">Status Perusahaan</div>
                        <div class="col-lg-9 col-md-8">{{$detail->status}}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9 col-md-4 label">Surat Keputusan Izin Usaha</div>
                        <div class="col-lg-9 col-md-8">No : {{$detail->number_letter}}</div>
                        <div class="col-lg-6 col-md-8">Tanggal : {{$detail->date_latter}}</div>
                    </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
