@extends('layout.kabid')

@section('title')


@section('content')

<body>
    <div class="container mt-0">
        <div class="pagetitle">
            <h1>Rekapitulasi</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/kabid/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Rekapitulasi</li>
              </ol>
            </nav>
        </div>
        <div class="d-flex justify-content-start mb-2">
            <!-- Button Cetak PDF -->
            <button type="button" class="btn btn-danger mb-2">
                <i class="bi bi-printer"></i> Cetak PDF
            </button>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table">
                    <tr>
                        <th>No</th>
                        <th>Jenis Permohonan</th>
                        <th>Jumlah Permohonan</th>
                        <th>Diterima</th>
                        <th>Diproses</th>
                        <th>Ditolak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pengesahan Peraturan Perusahaan</td>
                        <td>10</td>
                        <td><span class="badge bg-success">5</span></td>
                        <td><span class="badge bg-warning">3</span></td>
                        <td><span class="badge bg-danger">2</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pendaftaran Perjanjian Kerja Bersama</td>
                        <td>8</td>
                        <td><span class="badge bg-success">4</span></td>
                        <td><span class="badge bg-warning">2</span></td>
                        <td><span class="badge bg-danger">2</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Pendaftaran Perjanjian Kerja Waktu Tertentu</td>
                        <td>15</td>
                        <td><span class="badge bg-success">10</span></td>
                        <td><span class="badge bg-warning">3</span></td>
                        <td><span class="badge bg-danger">2</span></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Pencatatan Serikat Pekerja/Serikat Buruh</td>
                        <td>15</td>
                        <td><span class="badge bg-success">10</span></td>
                        <td><span class="badge bg-warning">3</span></td>
                        <td><span class="badge bg-danger">2</span></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Pendaftaran Lembaga Kerja Sama Bipartit</td>
                        <td>15</td>
                        <td><span class="badge bg-success">10</span></td>
                        <td><span class="badge bg-warning">3</span></td>
                        <td><span class="badge bg-danger">2</span></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Pencatatan Penyelesaian Perselisihan Hubungan Internal</td>
                        <td>15</td>
                        <td><span class="badge bg-success">10</span></td>
                        <td><span class="badge bg-warning">3</span></td>
                        <td><span class="badge bg-danger">2</span></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Pelaporan Pemutusan Hubungan Kerja</td>
                        <td>15</td>
                        <td><span class="badge bg-success">10</span></td>
                        <td><span class="badge bg-warning">3</span></td>
                        <td><span class="badge bg-danger">2</span></td>
                    </tr>
                    <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                </tbody>
            </table>
           
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

@endsection 