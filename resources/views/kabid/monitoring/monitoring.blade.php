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
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pendaftaranlkb">Pendaftaran LKB</button>
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
            <table class="table ">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Perusahaan</th>
                    <th>Peruntukkan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nama Perusahaan 1</td>
                    <td>Peruntukkan 1</td>
                    <td><span class="badge bg-success">Diterima</span></td>
                    <td>
                        <a href="/kabid/monitoring/detailpermohonan" >
                            <i class="fas fa-info-circle"></i> Informasi
                        </a>
                    </td>               
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nama Perusahaan 1</td>
                    <td>Peruntukkan 2</td>
                    <td><span class="badge bg-success">Diterima</span></td>
                    <td>
                        <a href="/kabid/monitoring/detailpermohonan" >
                            <i class="fas fa-info-circle"></i> Informasi
                        </a>
                    </td>               
                </tr>
                <!-- Tambahkan baris lainnya sesuai kebutuhan -->
            </tbody>
            </table>
        </div>

        <div class="tab-pane fade" id="pendaftaranpkb">
            <table class="table">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Perusahaan</th>
                    <th>Peruntukkan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nama Perusahaan 1312</td>
                    <td>Peruntukkan 21</td>
                    <td><span class="badge bg-success">Diterima</span></td>
                    <td>
                        <a href="/kabid/monitoring/detailpermohonan" >
                            <i class="fas fa-info-circle"></i> Informasi
                        </a>
                    </td>               
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nama Perusahaan 1</td>
                    <td>Peruntukkan 2</td>
                    <td><span class="badge bg-success">Diterima</span></td>
                    <td>
                        <a href="/kabid/monitoring/detailpermohonan" >
                            <i class="fas fa-info-circle"></i> Informasi
                        </a>
                    </td>               
                </tr>
                <!-- Tambahkan baris lainnya sesuai kebutuhan -->
            </tbody>
            </table>
        </div>

        <div class="tab-pane fade" id="pendaftaranpkwt">
            <table class="table">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Perusahaan</th>
                    <th>Peruntukkan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nama Perusahaan 1312</td>
                    <td>Peruntukkan 21</td>
                    <td><span class="badge bg-success">Diterima</span></td>
                    <td>
                        <a href="/kabid/monitoring/detailpermohonan" >
                            <i class="fas fa-info-circle"></i> Informasi
                        </a>
                    </td>               
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nama Perusahaan 1</td>
                    <td>Peruntukkan 2</td>
                    <td><span class="badge bg-success">Diterima</span></td>
                    <td>
                        <a href="/kabid/monitoring/detailpermohonan" >
                            <i class="fas fa-info-circle"></i> Informasi
                        </a>
                    </td>               
                </tr>
                <!-- Tambahkan baris lainnya sesuai kebutuhan -->
            </tbody>
            </table>
        </div>

        <div class="tab-pane fade" id="pencatatanspsb">
            <table class="table">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Perusahaan</th>
                    <th>Peruntukkan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nama Perusahaan 1312</td>
                    <td>Peruntukkan 21</td>
                    <td><span class="badge bg-success">Diterima</span></td>
                    <td>
                        <a href="/kabid/monitoring/detailpermohonan" >
                            <i class="fas fa-info-circle"></i> Informasi
                        </a>
                    </td>               
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nama Perusahaan 1</td>
                    <td>Peruntukkan 2</td>
                    <td><span class="badge bg-success">Diterima</span></td>
                    <td>
                        <a href="/kabid/monitoring/detailpermohonan" >
                            <i class="fas fa-info-circle"></i> Informasi
                        </a>
                    </td>               
                </tr>
                <!-- Tambahkan baris lainnya sesuai kebutuhan -->
            </tbody>
            </table>
        </div>

        <div class="tab-pane fade" id="pendaftaranlkb">
            <table class="table">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Perusahaan</th>
                    <th>Peruntukkan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nama Perusahaan 1312</td>
                    <td>Peruntukkan 21</td>
                    <td><span class="badge bg-success">Diterima</span></td>
                    <td>
                        <a href="/kabid/monitoring/detailpermohonan" >
                            <i class="fas fa-info-circle"></i> Informasi
                        </a>
                    </td>               
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nama Perusahaan 1</td>
                    <td>Peruntukkan 2</td>
                    <td><span class="badge bg-success">Diterima</span></td>
                    <td>
                        <a href="/kabid/monitoring/detailpermohonan" >
                            <i class="fas fa-info-circle"></i> Informasi
                        </a>
                    </td>               
                </tr>
                <!-- Tambahkan baris lainnya sesuai kebutuhan -->
            </tbody>
            </table>
        </div>

        <div class="tab-pane fade" id="p3hi">
            <table class="table">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Perusahaan</th>
                    <th>Peruntukkan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nama Perusahaan 1312</td>
                    <td>Peruntukkan 21</td>
                    <td><span class="badge bg-success">Diterima</span></td>
                    <td>
                        <a href="/kabid/monitoring/detailpermohonan" >
                            <i class="fas fa-info-circle"></i> Informasi
                        </a>
                    </td>               
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nama Perusahaan 1</td>
                    <td>Peruntukkan 2</td>
                    <td><span class="badge bg-success">Diterima</span></td>
                    <td>
                        <a href="/kabid/monitoring/detailpermohonan" >
                            <i class="fas fa-info-circle"></i> Informasi
                        </a>
                    </td>               
                </tr>
                <!-- Tambahkan baris lainnya sesuai kebutuhan -->
            </tbody>
            </table>
        </div>

        <div class="tab-pane fade" id="pelaporanphk">
            <table class="table">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Perusahaan</th>
                    <th>Peruntukkan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>PT SINAR MAS</td>
                    <td>Peruntukkan 21</td>
                    <td><span class="badge bg-success">Diterima</span></td>
                    <td>
                        <a href="/kabid/monitoring/detailpermohonan" >
                            <i class="fas fa-info-circle"></i> Informasi
                        </a>
                    </td>               
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nama Perusahaan 1</td>
                    <td>Peruntukkan 2</td>
                    <td><span class="badge bg-success">Diterima</span></td>
                    <td>
                        <a href="/kabid/monitoring/detailpermohonan" >
                            <i class="fas fa-info-circle"></i> Informasi
                        </a>
                    </td>               
                </tr>
                <!-- Tambahkan baris lainnya sesuai kebutuhan -->
            </tbody>
            </table>
        </div>

    </div> 
@endsection 