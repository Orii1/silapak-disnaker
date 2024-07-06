@extends('layout.kabid')

@section('title')


@section('content')

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
            {{-- <button type="button" class="btn btn-danger mb-2">
                <i class="bi bi-printer"></i> Cetak PDF
            </button> --}}
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="mx-3 my-3">
                    <table class="table">
                        <thead class="table">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Jenis Permohonan</th>
                                <th>Jumlah Permohonan</th>
                                <th>Diterima</th>
                                <th>Diproses</th>
                                <th>Dikembalikan</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>1</td>
                                <td>Pengesahan Peraturan Perusahaan</td>
                                <td>{{$jumlah_pp}}</td>
                                <td><span class="badge bg-success">{{$terima_pp}}</span></td>
                                <td><span class="badge bg-warning">{{$proses_pp}}</span></td>
                                <td><span class="badge bg-danger">{{$tolak_pp}}</span></td>
                                <td>
                                    <div class="text-center">
                                        <a title="Detail" href="/kabid/rekapitulasi-pp" class="btn btn-primary btn-sm" id=""><i class="bi bi-arrow-right-square-fill"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Pendaftaran Perjanjian Kerja Bersama</td>
                                <td>{{$jumlah_pkb}}</td>
                                <td><span class="badge bg-success">{{$terima_pkb}}</span></td>
                                <td><span class="badge bg-warning">{{$proses_pkb}}</span></td>
                                <td><span class="badge bg-danger">{{$tolak_pkb}}</span></td>
                                <td>
                                    <div class="text-center">
                                        <a title="Detail" href="/kabid/rekapitulasi-pkb" class="btn btn-primary btn-sm" id=""><i class="bi bi-arrow-right-square-fill"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Pendaftaran Perjanjian Kerja Waktu Tertentu</td>
                                <td>{{$jumlah_pkwt}}</td>
                                <td><span class="badge bg-success">{{$terima_pkwt}}</span></td>
                                <td><span class="badge bg-warning">{{$proses_pkwt}}</span></td>
                                <td><span class="badge bg-danger">{{$tolak_pkwt}}</span></td>
                                <td>
                                    <div class="text-center">
                                        <a title="Detail" href="/kabid/rekapitulasi-pkwt" class="btn btn-primary btn-sm" id=""><i class="bi bi-arrow-right-square-fill"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Pencatatan Serikat Pekerja/Serikat Buruh</td>
                                <td>{{$jumlah_spsb}}</td>
                                <td><span class="badge bg-success">{{$terima_spsb}}</span></td>
                                <td><span class="badge bg-warning">{{$proses_spsb}}</span></td>
                                <td><span class="badge bg-danger">{{$tolak_spsb}}</span></td>
                                <td>
                                    <div class="text-center">
                                        <a title="Detail" href="" class="btn btn-primary btn-sm" id=""><i class="bi bi-arrow-right-square-fill"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Pendaftaran Lembaga Kerja Sama Bipartit</td>
                                <td>{{$jumlah_lks}}</td>
                                <td><span class="badge bg-success">{{$terima_lks}}</span></td>
                                <td><span class="badge bg-warning">{{$proses_lks}}</span></td>
                                <td><span class="badge bg-danger">{{$tolak_lks}}</span></td>
                                <td>
                                    <div class="text-center">
                                        <a title="Detail" href="" class="btn btn-primary btn-sm" id=""><i class="bi bi-arrow-right-square-fill"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Pencatatan Penyelesaian Perselisihan Hubungan Internal</td>
                                <td>{{$jumlah_hi}}</td>
                                <td><span class="badge bg-success">{{$terima_hi}}</span></td>
                                <td><span class="badge bg-warning">{{$proses_hi}}</span></td>
                                <td><span class="badge bg-danger">{{$tolak_hi}}</span></td>
                                <td>
                                    <div class="text-center">
                                        <a title="Detail" href="" class="btn btn-primary btn-sm" id=""><i class="bi bi-arrow-right-square-fill"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Pelaporan Pemutusan Hubungan Kerja</td>
                                <td>{{$jumlah_phk}}</td>
                                <td><span class="badge bg-success">{{$terima_phk}}</span></td>
                                <td><span class="badge bg-warning">{{$proses_phk}}</span></td>
                                <td><span class="badge bg-danger">{{$tolak_phk}}</span></td>
                                <td>
                                    <div class="text-center">
                                        <a title="Detail" href="" class="btn btn-primary btn-sm" id=""><i class="bi bi-arrow-right-square-fill"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

@endsection
