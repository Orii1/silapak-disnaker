@extends('layout.kabid')

@section('title')
<script>
    function updateTime() {
        const options = { hour: '2-digit', minute: '2-digit', second: '2-digit' };
        const now = new Date();
        const formattedTime = now.toLocaleTimeString('id-ID', options);
        document.getElementById('current-time').innerText = 'Pukul : ' + formattedTime;
    }

    document.addEventListener('DOMContentLoaded', (event) => {
        updateTime();
        setInterval(updateTime, 1000);
    });
</script>
@section('content')

<div class="pagetitle">
    <h1>Dashboard Kepala Bidang</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
</div>

<div class="row">
    <div class="col-xxl-4">
        <div class="card">
            <div class="card-title mx-4">
                Selamat datang Kepala Bidang
            </div>
        </div>
    </div>
    <div class="col-xxl-4">
        <div class="card">
            <div class="card-title mx-4">
                {{$dayname}}, {{$datestring}}
            </div>
        </div>
    </div>
    <div class="col-xxl-4">
        <div class="card">
            <div class="card-title mx-4" id="current-time">
                <!-- Waktu saat ini akan ditampilkan di sini -->
            </div>
        </div>
    </div>
</div>

<!-- Menambahkan informasi tentang mediator -->
<div class="row mt-1">
    <div class="col-12">
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Informasi Permohonan Mediator</h5>
            </div>
            <div class="card-body">
                <div class="list-group">
                    <!-- Contoh data mediator -->
                    <div class="list-group-item d-flex justify-content-between align-items-center border-0">
                        <span style="font-size: 1.02em;">
                            <i class="bi bi-person-circle me-2"></i>
                            <strong>Mediator 1</strong>
                        </span>
                        <span class="badge bg-primary rounded-pill" style="font-size: 1.02em;">
                            5 permohonan sedang diperiksa
                        </span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center border-0">
                        <span style="font-size: 1.02em;">
                            <i class="bi bi-person-circle me-2"></i>
                            <strong>Mediator 2</strong>
                        </span>
                        <span class="badge bg-primary rounded-pill" style="font-size: 1.02em;">
                            3 permohonan sedang diperiksa
                        </span>
                    </div>
                    <!-- Tambahkan data mediator lainnya di sini -->
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
