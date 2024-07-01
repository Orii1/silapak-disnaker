@extends('layout.admin')

@section('title')

@section('content')

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Buku Registrasi</li>
      </ol>
    </nav>
</div>



<div class="card mb-3">
    <div class="card-body">
        <ul class="mt-1 nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <div class="">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#pengesahanpp">Pengesahan PP</button>
                </div>
              </li>

              <li class="nav-item">
                <div class="">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pendaftaranpkb">Pendaftaran PKB</button>
                </div>
              </li>

              <li class="nav-item">
                <div class="">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pendaftaranpkwt">Pendaftaran PKWT</button>
                </div>
              </li>

              <li class="nav-item">
                <div class="">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pencatatanspsb">Pencatatan SP/SB</button>
                </div>
              </li>


              <li class="nav-item">
                <div class="">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pendaftaranlks">Pendaftaran LKS</button>
                </div>
              </li>


              <li class="nav-item">
                <div class="">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#p3hi">P3HI</button>
                </div>
              </li>


              <li class="nav-item">
                <div class="">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pelaporanphk">Pelaporan PHK</button>
                </div>
              </li>

        </ul>
    </div>
</div>

<div class="tab-content">
    <div class="tab-pane fade show active profile-overview" id="pengesahanpp">
        <div class="card">
            <div class="mx-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Peruntukkan</th>
                            <th>Tanggal SK Disahkan</th>
                            <th>Masa Aktivasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_pp as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->pp_perusahaan->nama_perusahaan}}</td>
                            <td>{{$item->peruntukan}}</td>
                            <td>{{ $item->pp_status->updated_at->isoFormat('D MMMM Y') }}</td>
                            <td><span class="badge bg-info">2 Tahun</span></td>
                            <td>
                                <div class="text-start">
                                    <a title="Detail" href="/permohonan-pengesahan-pp/{{$item->id_pp}}" class="btn btn-primary btn-sm" id=""><i class="bi bi-info-circle-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="pendaftaranpkb">
        <div class="card">
            <div class="mx-3">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Peruntukkan</th>
                            <th>Tanggal SK Disahkan</th>
                            <th>Masa Aktivasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_pkb as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->pkb_perusahaan->nama_perusahaan}}</td>
                            <td>{{$item->peruntukan}}</td>
                            <td>{{ $item->pkb_status->updated_at->isoFormat('D MMMM Y') }}</td>
                            <td><span class="badge bg-info">2 Tahun</span></td>
                            <td>
                                <div class="text-start">
                                    <a title="Detail" href="/permohonan-pendaftaran-pkb/{{$item->id_pkb}}" class="btn btn-primary btn-sm" id=""><i class="bi bi-info-circle-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="pendaftaranpkwt">
        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Peruntukkan</th>
                        <th>Tanggal SK Disahkan</th>
                        <th>Masa Aktivasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_pkwt as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->pkwt_perusahaan->nama_perusahaan}}</td>
                        <td>{{$item->peruntukan}}</td>
                        <td>{{ $item->pkwt_status->updated_at->isoFormat('D MMMM Y') }}</td>
                        <td><span class="badge bg-info">2 Tahun</span></td>
                        <td>
                            <div class="text-start">
                                <a title="Detail" href="/permohonan-pendaftaran-pkwt/{{$item->id_pkwt}}" class="btn btn-primary btn-sm" id=""><i class="bi bi-info-circle-fill"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="tab-pane fade" id="pencatatanspsb">
        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Peruntukkan</th>
                        <th>Tanggal SK Disahkan</th>
                        <th>Masa Aktivasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_spsb as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->spsb_perusahaan->nama_perusahaan}}</td>
                        <td>{{$item->peruntukan}}</td>
                        <td>{{ $item->spsb_status->updated_at->isoFormat('D MMMM Y') }}</td>
                        <td><span class="badge bg-info">2 Tahun</span></td>
                        <td>
                            <div class="text-start">
                                <a title="Detail" href="/permohonan-pencatatan-spsb/{{$item->id_spsb}}" class="btn btn-primary btn-sm" id=""><i class="bi bi-info-circle-fill"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                    <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>

    <div class="tab-pane fade" id="pendaftaranlks">
        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Peruntukkan</th>
                        <th>Tanggal SK Disahkan</th>
                        <th>Masa Aktivasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_lks as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->lks_perusahaan->nama_perusahaan}}</td>
                        <td>{{$item->peruntukan}}</td>
                        <td>{{ $item->lks_status->updated_at->isoFormat('D MMMM Y') }}</td>
                        <td><span class="badge bg-info">2 Tahun</span></td>
                        <td>
                            <div class="text-start">
                                <a title="Detail" href="/permohonan-pendaftaran-lks/{{$item->id_lks}}" class="btn btn-primary btn-sm" id=""><i class="bi bi-info-circle-fill"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="tab-pane fade" id="p3hi">
        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Peruntukkan</th>
                        <th>Tanggal SK Disahkan</th>
                        <th>Masa Aktivasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_hi as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->hi_perusahaan->nama_perusahaan}}</td>
                        <td>{{$item->peruntukan}}</td>
                        <td>{{ $item->hi_status->updated_at->isoFormat('D MMMM Y') }}</td>
                        <td><span class="badge bg-info">2 Tahun</span></td>
                        <td>
                            <div class="text-start">
                                <a title="Detail" href="/permohonan-penyelesaian-hi/{{$item->id_hi}}" class="btn btn-primary btn-sm" id=""><i class="bi bi-info-circle-fill"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="tab-pane fade" id="pelaporanphk">
        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Peruntukkan</th>
                        <th>Tanggal SK Disahkan</th>
                        <th>Masa Aktivasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_phk as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->phk_perusahaan->nama_perusahaan}}</td>
                        <td>{{$item->peruntukan}}</td>
                        <td>{{ $item->phk_status->updated_at->isoFormat('D MMMM Y') }}</td>
                        <td><span class="badge bg-info">2 Tahun</span></td>
                        <td>
                            <div class="text-start">
                                <a title="Detail" href="/permohonan-pelaporan-phk/{{$item->id_phk}}" class="btn btn-primary btn-sm" id=""><i class="bi bi-info-circle-fill"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection
