@extends('layout.kabid')

@section('title')


@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekapitulasi Permohonan Perusahaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .badge {
            font-size: 90%;
        }
        .action-icon {
            color: #007bff;
            text-decoration: none;
        }
        .action-icon:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="mb-4">Rekapitulasi Permohonan Perusahaan</h1>

    <table class="table table-striped">
        <thead class="table-dark">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

@endsection 