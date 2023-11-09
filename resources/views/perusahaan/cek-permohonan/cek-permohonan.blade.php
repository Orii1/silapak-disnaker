@extends('layout.header2')

@section('content')
<div class="pagetitle-company">
    <h1>Informasi Permohonan Anda</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/perusahaan/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Cek Permohonan Anda</li>
        </ol>
    </nav>
</div>

<div class="mx-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">
                            <div class="ms-5 my-2">
                                <img src="../../assets/img/info-icon.jpg" width="50px;" alt="icon">
                            </div>
                        </div>
                        <div class="col-11">
                            <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                                Permohonan Perusahaan Anda
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mx-4">
    <div class="card">
        <div class="card-body">
            <ul class="mt-2 nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#pp">Pengesahan PP</button>
                  </li>

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pkb">Pendaftaran PKB</button>
                  </li>

                  <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pkwt">Pendaftaran PKWT</button>
                  </li>

                  <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#spsb">Pencatatan SP/SB</button>
                  </li>

                  <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#lks">Pendaftaran LKS</button>
                  </li>

                  <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#hi">Penyelesaian Perselisishan Hubungan Internal</button>
                  </li>

                  <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#phk">Pelaporan PHK</button>
                  </li>

            </ul>

            <div class="tab-content">

                <div class="tab-pane fade show active profile-overview" id="pp">
                    <div class="mt-1 mb-5">

                        <div class="ms-3">
                            <div class="card-title" style="font-size: 16px;">
                                Permohonan Pengesahan Peraturan Perusahaan
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                    <tr>
                                        <th><div class="text-center">No</div></th>
                                        <th><div class="text-center">Perusahaan</div></th>
                                        <th><div class="text-center">Permohonan</div></th>
                                        <th><div class="text-center">Tanggal Diajukan</div></th>
                                        <th><div class="text-center">Status</div></th>
                                        <th><div class="text-center">Aksi</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pp_submission as $item)
                                        <tr>
                                            <td><div class="text-center">{{$loop->iteration}}</div></td>
                                            <td><div class="text-center">{{$item->pp_user->name}}</div></td>
                                            <td><div class="text-center">Pengesahan Peraturan Perusahaan</div></td>
                                            <td><div class="text-center">{{$item->updated_at->format('Y-m-d')}}</div></td>
                                            @if ($item->status == "0")
                                            <td><div class="text-center">
                                                <span class="badge rounded-pill text-bg-warning"><label style="color: white;">Diproses</label></span>
                                            </div></td>
                                                <td><div class="text-center"></div></td>
                                            @elseif ($item->status == "1")
                                                <td><div class="text-center">
                                                    <span class="badge rounded-pill text-bg-success">Diterima</span>
                                                </div></td>
                                                <td><div class="text-center"><a href="{{route('sk-pp-download',['id'=>$item->id])}}" class="btn btn-success btn-sm" title="Surat Keputusan"><i class="bi bi-cloud-arrow-down-fill"></i></a></div></td>
                                            @elseif ($item->status == '2')
                                            <td><div class="text-center">
                                                <span class="badge rounded-pill text-bg-danger">Dikembalikan</span>
                                            </div></td>
                                                <td><div class="text-center"><a href="/edit-permohonan-pp/{{$item->id}}" class="btn btn-danger btn-sm" title="Info"><i class="bi bi-info-circle-fill"></i></a></div></td>
                                            @else
                                                <td><div class="text-center">Status Tidak Diketahui</div></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="pkb">
                    <div class="mt-1 mb-5">

                        <div class="ms-3">
                            <div class="card-title" style="font-size: 16px;">
                                Permohonan Pendaftaran Perjanjian Kerja Bersama
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                    <tr>
                                        <th><div class="text-center">No</div></th>
                                        <th><div class="text-center">Perusahaan</div></th>
                                        <th><div class="text-center">Permohonan</div></th>
                                        <th><div class="text-center">Tanggal Diajukan</div></th>
                                        <th><div class="text-center">Status</div></th>
                                        <th><div class="text-center">Aksi</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pkb_submission as $item)
                                        <tr>
                                            <td><div class="text-center">{{$loop->iteration}}</div></td>
                                            <td><div class="text-center">{{$item->pkb_user->name}}</div></td>
                                            <td><div class="text-center">Pendafatran Perjanjian Kerja Bersama</div></td>
                                            <td><div class="text-center">{{$item->updated_at->format('Y-m-d')}}</div></td>
                                            @if ($item->status == "0")
                                            <td><div class="text-center">
                                                <span class="badge rounded-pill text-bg-warning"><label style="color: white;">Diproses</label></span>
                                            </div></td>
                                                <td><div class="text-center"></div></td>
                                            @elseif ($item->status == "1")
                                                <td><div class="text-center">
                                                    <span class="badge rounded-pill text-bg-success">Diterima</span>
                                                </div></td>
                                                <td><div class="text-center"><a href="{{route('sk-pkb-download',['id'=>$item->id])}}" class="btn btn-success btn-sm" title="Surat Keputusan"><i class="bi bi-cloud-arrow-down-fill"></i></a></div></td>
                                            @elseif ($item->status == '2')
                                            <td><div class="text-center">
                                                <span class="badge rounded-pill text-bg-danger">Dikembalikan</span>
                                            </div></td>
                                                <td><div class="text-center"><a href="" class="btn btn-danger btn-sm" title="Info"><i class="bi bi-info-circle-fill"></i></a></div></td>
                                            @else
                                                <td><div class="text-center">Status Tidak Diketahui</div></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="pkwt">
                    <div class="mt-1 mb-5">

                        <div class="ms-3">
                            <div class="card-title" style="font-size: 16px;">
                                Permohonan Pendaftaran Perjanjian Kerja Waktu Tertentu
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                    <tr>
                                        <th><div class="text-center">No</div></th>
                                        <th><div class="text-center">Perusahaan</div></th>
                                        <th><div class="text-center">Permohonan</div></th>
                                        <th><div class="text-center">Tanggal Diajukan</div></th>
                                        <th><div class="text-center">Status</div></th>
                                        <th><div class="text-center">Aksi</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pkwt_submission as $item)
                                        <tr>
                                            <td><div class="text-center">{{$loop->iteration}}</div></td>
                                            <td><div class="text-center">{{$item->pkwt_user->name}}</div></td>
                                            <td><div class="text-center">Pendaftaran Perjanjian Kerja Waktu Tertentu</div></td>
                                            <td><div class="text-center">{{$item->updated_at->format('Y-m-d')}}</div></td>
                                            @if ($item->status == "0")
                                            <td><div class="text-center">
                                                <span class="badge rounded-pill text-bg-warning"><label style="color: white;">Diproses</label></span>
                                            </div></td>
                                                <td><div class="text-center"></div></td>
                                            @elseif ($item->status == "1")
                                                <td><div class="text-center">
                                                    <span class="badge rounded-pill text-bg-success">Diterima</span>
                                                </div></td>
                                                <td><div class="text-center"><a href="{{route('sk-pkwt-download',['id'=>$item->id])}}" class="btn btn-success btn-sm" title="Surat Keputusan"><i class="bi bi-cloud-arrow-down-fill"></i></a></div></td>
                                            @elseif ($item->status == '2')
                                            <td><div class="text-center">
                                                <span class="badge rounded-pill text-bg-danger">Dikembalikan</span>
                                            </div></td>
                                                <td><div class="text-center"><a href="" class="btn btn-danger btn-sm" title="Info"><i class="bi bi-info-circle-fill"></i></a></div></td>
                                            @else
                                                <td><div class="text-center">Status Tidak Diketahui</div></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="spsb">
                    <div class="mt-1 mb-5">

                        <div class="ms-3">
                            <div class="card-title" style="font-size: 16px;">
                                Permohonan Pencatatan Serikat Pekerja/Serikat Buruh
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                    <tr>
                                        <th><div class="text-center">No</div></th>
                                        <th><div class="text-center">Perusahaan</div></th>
                                        <th><div class="text-center">Permohonan</div></th>
                                        <th><div class="text-center">Tanggal Diajukan</div></th>
                                        <th><div class="text-center">Status</div></th>
                                        <th><div class="text-center">Aksi</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($spsb_submission as $item)
                                        <tr>
                                            <td><div class="text-center">{{$loop->iteration}}</div></td>
                                            <td><div class="text-center">{{$item->spsb_user->name}}</div></td>
                                            <td><div class="text-center">Pencatatan Serikat Pekerja/Serikat Buruh</div></td>
                                            <td><div class="text-center">{{$item->updated_at->format('Y-m-d')}}</div></td>
                                            @if ($item->status == "0")
                                            <td><div class="text-center">
                                                <span class="badge rounded-pill text-bg-warning"><label style="color: white;">Diproses</label></span>
                                            </div></td>
                                                <td><div class="text-center"></div></td>
                                            @elseif ($item->status == "1")
                                                <td><div class="text-center">
                                                    <span class="badge rounded-pill text-bg-success">Diterima</span>
                                                </div></td>
                                                <td><div class="text-center"><a href="{{route('sk-spsb-download',['id'=>$item->id])}}" class="btn btn-success btn-sm" title="Surat Keputusan"><i class="bi bi-cloud-arrow-down-fill"></i></a></div></td>
                                            @elseif ($item->status == '2')
                                            <td><div class="text-center">
                                                <span class="badge rounded-pill text-bg-danger">Dikembalikan</span>
                                            </div></td>
                                                <td><div class="text-center"><a href="" class="btn btn-danger btn-sm" title="Info"><i class="bi bi-info-circle-fill"></i></a></div></td>
                                            @else
                                                <td><div class="text-center">Status Tidak Diketahui</div></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="lks">
                    <div class="mt-1 mb-5">

                        <div class="ms-3">
                            <div class="card-title" style="font-size: 16px;">
                                Permohonan Pendaftaran Lembaga Kerja Sama Bipartit
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                    <tr>
                                        <th><div class="text-center">No</div></th>
                                        <th><div class="text-center">Perusahaan</div></th>
                                        <th><div class="text-center">Permohonan</div></th>
                                        <th><div class="text-center">Tanggal Diajukan</div></th>
                                        <th><div class="text-center">Status</div></th>
                                        <th><div class="text-center">Aksi</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lks_submission as $item)
                                        <tr>
                                            <td><div class="text-center">{{$loop->iteration}}</div></td>
                                            <td><div class="text-center">{{$item->lks_user->name}}</div></td>
                                            <td><div class="text-center">Pendaftaran LKS Bipartit</div></td>
                                            <td><div class="text-center">{{$item->updated_at->format('Y-m-d')}}</div></td>
                                            @if ($item->status == "0")
                                            <td><div class="text-center">
                                                <span class="badge rounded-pill text-bg-warning"><label style="color: white;">Diproses</label></span>
                                            </div></td>
                                                <td><div class="text-center"></div></td>
                                            @elseif ($item->status == "1")
                                                <td><div class="text-center">
                                                    <span class="badge rounded-pill text-bg-success">Diterima</span>
                                                </div></td>
                                                <td><div class="text-center"><a href="{{route('sk-lks-download',['id'=>$item->id])}}" class="btn btn-success btn-sm" title="Surat Keputusan"><i class="bi bi-cloud-arrow-down-fill"></i></a></div></td>
                                            @elseif ($item->status == '2')
                                            <td><div class="text-center">
                                                <span class="badge rounded-pill text-bg-danger">Dikembalikan</span>
                                            </div></td>
                                                <td><div class="text-center"><a href="" class="btn btn-danger btn-sm" title="Info"><i class="bi bi-info-circle-fill"></i></a></div></td>
                                            @else
                                                <td><div class="text-center">Status Tidak Diketahui</div></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="hi">
                    <div class="mt-1 mb-5">

                        <div class="ms-3">
                            <div class="card-title" style="font-size: 16px;">
                                Permohonan Pencatatan Penyelesaian Perselisihan Hubungan Internal
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                    <tr>
                                        <th><div class="text-center">No</div></th>
                                        <th><div class="text-center">Perusahaan</div></th>
                                        <th><div class="text-center">Permohonan</div></th>
                                        <th><div class="text-center">Tanggal Diajukan</div></th>
                                        <th><div class="text-center">Status</div></th>
                                        <th><div class="text-center">Aksi</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hi_submission as $item)
                                        <tr>
                                            <td><div class="text-center">{{$loop->iteration}}</div></td>
                                            <td><div class="text-center">{{$item->hi_user->name}}</div></td>
                                            <td><div class="text-center">Pencatatan Penyelesaian Perselisihan Hubungan Internal</div></td>
                                            <td><div class="text-center">{{$item->updated_at->format('Y-m-d')}}</div></td>
                                            @if ($item->status == "0")
                                            <td><div class="text-center">
                                                <span class="badge rounded-pill text-bg-warning"><label style="color: white;">Diproses</label></span>
                                            </div></td>
                                                <td><div class="text-center"></div></td>
                                            @elseif ($item->status == "1")
                                                <td><div class="text-center">
                                                    <span class="badge rounded-pill text-bg-success">Diterima</span>
                                                </div></td>
                                                <td><div class="text-center"><a href="{{route('sk-hi-download',['id'=>$item->id])}}" class="btn btn-success btn-sm" title="Surat Keputusan"><i class="bi bi-cloud-arrow-down-fill"></i></a></div></td>
                                            @elseif ($item->status == '2')
                                            <td><div class="text-center">
                                                <span class="badge rounded-pill text-bg-danger">Dikembalikan</span>
                                            </div></td>
                                                <td><div class="text-center"><a href="" class="btn btn-danger btn-sm" title="Info"><i class="bi bi-info-circle-fill"></i></a></div></td>
                                            @else
                                                <td><div class="text-center">Status Tidak Diketahui</div></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="phk">
                    <div class="mt-1 mb-5">

                        <div class="ms-3">
                            <div class="card-title" style="font-size: 16px;">
                                Permohonan Pelaporan Pemutusan Hubungan Kerja
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                    <tr>
                                        <th><div class="text-center">No</div></th>
                                        <th><div class="text-center">Perusahaan</div></th>
                                        <th><div class="text-center">Permohonan</div></th>
                                        <th><div class="text-center">Tanggal Diajukan</div></th>
                                        <th><div class="text-center">Status</div></th>
                                        <th><div class="text-center">Aksi</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($phk_submission as $item)
                                        <tr>
                                            <td><div class="text-center">{{$loop->iteration}}</div></td>
                                            <td><div class="text-center">{{$item->phk_user->name}}</div></td>
                                            <td><div class="text-center">Pelaporan PHK</div></td>
                                            <td><div class="text-center">{{$item->updated_at->format('Y-m-d')}}</div></td>
                                            @if ($item->status == "0")
                                            <td><div class="text-center">
                                                <span class="badge rounded-pill text-bg-warning"><label style="color: white;">Diproses</label></span>
                                            </div></td>
                                                <td><div class="text-center"></div></td>
                                            @elseif ($item->status == "1")
                                                <td><div class="text-center">
                                                    <span class="badge rounded-pill text-bg-success">Diterima</span>
                                                </div></td>
                                                <td><div class="text-center"><a href="{{route('sk-phk-download',['id'=>$item->id])}}" class="btn btn-success btn-sm" title="Surat Keputusan"><i class="bi bi-cloud-arrow-down-fill"></i></a></div></td>
                                            @elseif ($item->status == '2')
                                            <td><div class="text-center">
                                                <span class="badge rounded-pill text-bg-danger">Dikembalikan</span>
                                            </div></td>
                                                <td><div class="text-center"><a href="" class="btn btn-danger btn-sm" title="Info"><i class="bi bi-info-circle-fill"></i></a></div></td>
                                            @else
                                                <td><div class="text-center">Status Tidak Diketahui</div></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

{{-- <div class="mt-4 mx-5">
    @foreach ($pp_submission as $item)
        <a href="/permohonan-pengesahan-pp/{{$item->id}}">
            <div class="card" style="height: 60px; display: flex; align-items: center;">
                <div class="mt-3 text-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" style="font-size: 20px;">
                           <b>{{$item->pp_user->name}}</b>
                        </li>
                        <li class="breadcrumb-item" style="font-size: 19px;">
                            {{$item->status}}
                        </li>
                    </ol>
                </div>
            </div>
        </a>
    @endforeach
</div> --}}

@endsection
