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
    <div class="col-xxl-6">
        <div class="card">
            <div class="card-title mx-4">
                Selamat datang Admin
            </div>
        </div>
    </div>
    <div class="col-xxl-6">
        <div class="card">
            <div class="card-title mx-4">
                {{$dayname}}, {{$datestring}}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card border-diterima">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card-title">
                            <div class="d-flex align-items-center my-2">
                                <p class="text-secondary mb-0" style="font-size: 17px;">Permohonan Diterima</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-title">
                            <p class="text-success mb-0" style="font-size: 30px;">{{$total_terima}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card border-dikembalikan">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card-title">
                            <div class="d-flex align-items-center my-2">
                                <p class="text-secondary mb-0" style="font-size: 17px;">Permohonan Dikembalikan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-title">
                            <p class="text-danger mb-0" style="font-size: 30px;">{{$total_tolak}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card border-menunggu">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card-title">
                            <div class="d-flex align-items-center my-2">
                                <p class="text-secondary mb-0" style="font-size: 17px;">Permohonan Menunggu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-title">
                            <p class="text-info mb-0" style="font-size: 30px;">{{$total}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xxl-12">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Permohonan Masuk</h5>
              <div id="barChart"></div>
              <script>
                    var pp = {{$pp_all}}
                    var pkb = {{$pkb_all}}
                    var pkwt = {{$pkwt_all}}
                    var spsb = {{$spsb_all}}
                    var lks = {{$lks_all}}
                    var hi = {{$hi_all}}
                    var phk = {{$phk_all}}
                    document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#barChart"), {
                        series: [{
                        data: [pp, pkb, pkwt, spsb, lks, hi, phk,]
                        }],
                        chart: {
                        type: 'bar',
                        height: 300
                        },
                        plotOptions: {
                        bar: {
                            borderRadius: 4,
                            horizontal: true,
                        }
                        },
                        dataLabels: {
                        enabled: 'jumlah'
                        },
                        xaxis: {
                        categories: ['Pengesahan PP', 'Pendaftaran PKB', 'Pendaftaran PKWT', 'Pencatatan SPSB', 'Pendaftaran LKS', 'Pencatatan Perselisihan', 'Pelaporan PHK'
                        ],
                        }
                  }).render();
                });
              </script>
            </div>
          </div>
    </div>
</div>
@endsection
