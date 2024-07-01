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
        <table class="table table-striped">
        <thead>
            <tr>
                <th>Nomor</th>
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
                    <a href="/kabid/monitoring/detailpermohonan" >
                        <i class="fas fa-info-circle"></i> Detail
                    </a>
                </td>               
            </tr>
            @endforeach
          
            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
        </tbody>
        </table>
    </div>

    <div class="tab-pane fade" id="pendaftaranpkb">
        <table class="table table-striped">
        <thead>
            <tr>
                <th>Nomor</th>
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
                    <a href="/kabid/monitoring/detailpermohonan" >
                        <i class="fas fa-info-circle"></i> Detail
                    </a>
                </td>               
            </tr>
            @endforeach
            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
        </tbody>
        </table>
    </div>

    <div class="tab-pane fade" id="pendaftaranpkwt">
        <table class="table table-striped">
        <thead>
            <tr>
                <th>Nomor</th>
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
                    <a href="/kabid/monitoring/detailpermohonan" >
                        <i class="fas fa-info-circle"></i> Detail
                    </a>
                </td>               
            </tr>
            @endforeach
            
            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
        </tbody>
        </table>
    </div>

    <div class="tab-pane fade" id="pencatatanspsb">
        <table class="table table-striped">
        <thead>
            <tr>
                <th>Nomor</th>
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
                    <a href="/kabid/monitoring/detailpermohonan" >
                        <i class="fas fa-info-circle"></i> Detail
                    </a>
                </td>               
            </tr>
            @endforeach
            
            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
        </tbody>
        </table>
    </div>

    <div class="tab-pane fade" id="pendaftaranlks">
        <table class="table table-striped">
        <thead>
            <tr>
                <th>Nomor</th>
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
                    <a href="/kabid/monitoring/detailpermohonan" >
                        <i class="fas fa-info-circle"></i> Detail
                    </a>
                </td>               
            </tr>
            @endforeach
            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
        </tbody>
        </table>
    </div>

    <div class="tab-pane fade" id="p3hi">
        <table class="table table-striped">
        <thead>
            <tr>
                <th>Nomor</th>
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
                    <a href="/kabid/monitoring/detailpermohonan" >
                        <i class="fas fa-info-circle"></i> Detail
                    </a>
                </td>               
            </tr>
            @endforeach
            
            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
        </tbody>
        </table>
    </div>

    <div class="tab-pane fade" id="pelaporanphk">
        <table class="table table-striped">
        <thead>
            <tr>
                <th>Nomor</th>
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
                    <a href="/kabid/monitoring/detailpermohonan" >
                        <i class="fas fa-info-circle"></i> Detail
                    </a>
                </td>               
            </tr>
            @endforeach
            
            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
        </tbody>
        </table>
    </div>

</div> 

@endsection