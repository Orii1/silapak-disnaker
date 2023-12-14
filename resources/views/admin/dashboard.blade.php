@extends('layout.admin')

@section('title')

@section('content')

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
</div>

<div class="row">
    <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h5 class="card-title"><span></span></h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <div class="ps-3">
                            <h6><b>Permohonan Diterima {{$total_terima}}</b></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h5 class="card-title"><span></span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">

                    </div>
                    <div class="ps-3">
                        <h6><b>Permohonan Dikembalikan {{$total_tolak}}</b></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h5 class="card-title"><span></span></h5>

                <div class="d-flex align-items-center">

                </div>
                <div class="ps-3">
                    <h6><b>Permohonan Menunggu {{$total}}</b></h6>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
