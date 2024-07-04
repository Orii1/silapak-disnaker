@extends('layout.kabid')




@section('content')
    <div class="container">
        <div class="pagetitle">
            <h1>Monitoring</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/kabid/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Monitoring</li>
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
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pendaftaranlks">Pendaftaran LKB</button>
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
                                <th>Tanggal Diajukan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pp as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->pp_perusahaan->nama_perusahaan}}</td>
                                    <td>{{$item->peruntukan}}</td>
                                    <td>{{$item->updated_at->locale('id')->isoFormat('D MMMM Y')}}</td>
                                    <td>
                                        @if ($item->pp_status->id_status == '1')
                                            <span class="badge bg-info">Menunggu Konfirmasi</span>
                                        @elseif ($item->pp_status->id_status == '2')
                                            <span class="badge bg-warning">Diproses</span>
                                        @elseif ($item->pp_status->id_status == '3')
                                            <span class="badge bg-success">Diterima</span>
                                        @elseif ($item->pp_status->id_status == '4')
                                            <span class="badge bg-danger">Dikembalikan</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="text-start">
                                            <a title="Detail" href="{{$item->id_pp}}" class="btn btn-primary btn-sm" id=""><i class="bi bi-info-circle-fill"></i></a>
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
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Peruntukkan</th>
                                <th>Tanggal Diajukan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pkb as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->pkb_perusahaan->nama_perusahaan}}</td>
                                    <td>{{$item->peruntukan}}</td>
                                    <td>{{$item->updated_at->locale('id')->isoformat('D MMMM YYYY')}}</td>
                                    <td>
                                        @if ($item->pkb_status->id_status == '1')
                                            <span class="badge bg-info">Menunggu Konfirmasi</span>
                                        @elseif ($item->pkb_status->id_status == '2')
                                            <span class="badge bg-warning">Diproses</span>
                                        @elseif ($item->pkb_status->id_status == '3')
                                            <span class="badge bg-success">Diterima</span>
                                        @elseif ($item->pkb_status->id_status == '4')
                                            <span class="badge bg-danger">Dikembalikan</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="text-start">
                                            <a title="Detail" href="{{$item->id_pkb}}" class="btn btn-primary btn-sm" id=""><i class="bi bi-info-circle-fill"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="pendaftaranpkwt">
            <div class="card">
                <div class="mx-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Peruntukkan</th>
                                <th>Tanggal Diajukan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pkwt as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->pkwt_perusahaan->nama_perusahaan}}</td>
                                    <td>{{$item->peruntukan}}</td>
                                    <td>{{$item->updated_at->locale('id')->isoformat('D MMMM YYYY')}}</td>
                                    <td>
                                        @if ($item->pkwt_status->id_status == '1')
                                            <span class="badge bg-info">Menunggu Konfirmasi</span>
                                        @elseif ($item->pkwt_status->id_status == '2')
                                            <span class="badge bg-warning">Diproses</span>
                                        @elseif ($item->pkwt_status->id_status == '3')
                                            <span class="badge bg-success">Diterima</span>
                                        @elseif ($item->pkwt_status->id_status == '4')
                                            <span class="badge bg-danger">Dikembalikan</span>
                                        @endif
                                    </td>
                                    <td>
                                       <div class="text-start">
                                            <a title="Detail" href="{{$item->id_pkwt}}" class="btn btn-primary btn-sm" id=""><i class="bi bi-info-circle-fill"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="pencatatanspsb">
            <div class="card">
                <div class="mx-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Peruntukkan</th>
                                <th>Tanggal Diajukan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($spsb as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->spsb_perusahaan->nama_perusahaan}}</td>
                                    <td>{{$item->peruntukan}}</td>
                                    <td>{{$item->updated_at->locale('id')->isoformat('D MMMM YYYY')}}</td>
                                    <td>
                                        @if ($item->spsb_status->id_status == '1')
                                            <span class="badge bg-info">Menunggu Konfirmasi</span>
                                        @elseif ($item->spsb_status->id_status == '2')
                                            <span class="badge bg-warning">Diproses</span>
                                        @elseif ($item->spsb_status->id_status == '3')
                                            <span class="badge bg-success">Diterima</span>
                                        @elseif ($item->spsb_status->id_status == '4')
                                            <span class="badge bg-danger">Dikembalikan</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="text-start">
                                            <a title="Detail" href="{{$item->id_spsb}}" class="btn btn-primary btn-sm" id=""><i class="bi bi-info-circle-fill"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="pendaftaranlks">
            <div class="card">
                <div class="mx-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Peruntukkan</th>
                                <th>Tanggal Diajukan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lks as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->lks_perusahaan->nama_perusahaan}}</td>
                                    <td>{{$item->peruntukan}}</td>
                                    <td>{{$item->updated_at->locale('id')->isoformat('D MMMM YYYY')}}</td>
                                    <td>
                                        @if ($item->lks_status->id_status == '1')
                                            <span class="badge bg-info">Menunggu Konfirmasi</span>
                                        @elseif ($item->lks_status->id_status == '2')
                                            <span class="badge bg-warning">Diproses</span>
                                        @elseif ($item->lks_status->id_status == '3')
                                            <span class="badge bg-success">Diterima</span>
                                        @elseif ($item->lks_status->id_status == '4')
                                            <span class="badge bg-danger">Dikembalikan</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="text-start">
                                            <a title="Detail" href="{{$item->id_lks}}" class="btn btn-primary btn-sm" id=""><i class="bi bi-info-circle-fill"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="p3hi">
            <div class="card">
                <div class="mx-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Peruntukkan</th>
                                <th>Tanggal Diajukan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hi as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->hi_perusahaan->nama_perusahaan}}</td>
                                <td>{{$item->peruntukan}}</td>
                                <td>{{$item->updated_at->locale('id')->isoformat('D MMMM YYYY')}}</td>
                                <td>
                                    @if ($item->hi_status->id_status == '1')
                                        <span class="badge bg-info">Menunggu Konfirmasi</span>
                                    @elseif ($item->hi_status->id_status == '2')
                                        <span class="badge bg-warning">Diproses</span>
                                    @elseif ($item->hi_status->id_status == '3')
                                        <span class="badge bg-success">Diterima</span>
                                    @elseif ($item->hi_status->id_status == '4')
                                        <span class="badge bg-danger">Dikembalikan</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="text-start">
                                        <a title="Detail" href="{{$item->id_hi}}" class="btn btn-primary btn-sm" id=""><i class="bi bi-info-circle-fill"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="pelaporanphk">
            <div class="card">
                <div class="mx-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Peruntukkan</th>
                                <th>Tanggal Diajukan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($phk as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->phk_perusahaan->nama_perusahaan}}</td>
                                <td>{{$item->peruntukan}}</td>
                                <td>{{$item->updated_at->locale('id')->isoformat('D MMMM YYYY')}}</td>
                                <td>
                                    @if ($item->phk_status->id_status == '1')
                                        <span class="badge bg-info">Menunggu Konfirmasi</span>
                                    @elseif ($item->phk_status->id_status == '2')
                                        <span class="badge bg-warning">Diproses</span>
                                    @elseif ($item->phk_status->id_status == '3')
                                        <span class="badge bg-success">Diterima</span>
                                    @elseif ($item->phk_status->id_status == '4')
                                        <span class="badge bg-danger">Dikembalikan</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="text-start">
                                        <a title="Detail" href="{{$item->id_phk}}" class="btn btn-primary btn-sm" id=""><i class="bi bi-info-circle-fill"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
