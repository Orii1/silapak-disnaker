@extends('layout.admin')

@section('content')
    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Data Perusahaan</li>
                <li class="breadcrumb-item active">Detail Perusahaan</li>
            </ol>
        </nav>
    </div>

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="../../assets/img/company-icon.png" alt="Profile" class="rounded-circle"
                            style="width: 500px;">
                        <h2 class="mb-1">{{ $detail->user_perusahaan->nama_perusahaan }}</h2>
                        <h3 class="mb-4 text-muted text-center">{{ $detail->email }}</h3>
                        @if ($detail->status_akun == 'inactive')
                            <button class="btn btn-primary activate mb-3" data-user-id="{{ $detail->id }}">Aktifkan</button>
                        @else
                        @endif
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <div class="text-center">
                                <h5 class="card-title">Detail Perusahaan</h5>
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    <a href="/download/data-perusahaan/{{$detail->id}}" target="_blank" class="btn btn-danger btn-sm"><i class="bi bi-printer-fill"></i> Cetak PDF</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="label">Nama Perusahaan</div><br>
                                        <label>{{$detail->user_perusahaan->nama_perusahaan}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="label">Alamat</div><br>
                                        <label>{{$detail->user_perusahaan->alamat}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="label">Nama Pemilik</div><br>
                                        <label>{{$detail->user_perusahaan->pemilik}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="label">Email</div><br>
                                        <label>{{$detail->email}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="label">Jenis Usaha</div><br>
                                        <label>{{$detail->user_perusahaan->perusahaan_tipeperusahaan->nama_tipe}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="label">Modal</div><br>
                                        <label>{{$detail->user_perusahaan->perusahaan_modal->nama_modal}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="label">Sektor</div><br>
                                        <label>{{$detail->user_perusahaan->sektor}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="label">Status Perusahaan</div><br>
                                        <label>{{$detail->user_perusahaan->perusahaan_statusperusahaan->nama_status}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="label">Surat Keputusan Izin Usaha</div><br>
                                        <label>No : {{$detail->user_perusahaan->nomor_surat_izin_usaha}}</label>
                                        <label>Tanggal : {{$detail->tgl_surat_izin_usaha}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="label">Jumlah Tenaga Kerja <i>(Orang)</i></div><br>
                                        <label>Laki-laki <b>{{$detail->user_perusahaan->laki_laki}}</b></label>
                                        <label>Wanita <b>{{$detail->user_perusahaan->perempuan}}</b></label>
                                    </div>
                                    <div class="row">
                                        <div class="label">Status Hubungan Kerja <i>(Orang)</i></div><br>
                                        <label>PKWT <b>{{$detail->user_perusahaan->pkwt}}</b></label>
                                        <label>Outsourcing <b>{{$detail->user_perusahaan->outsourcing}}</b></label>
                                        <label>WNA <b>{{$detail->user_perusahaan->wna}}</b></label>
                                    </div>
                                    <div class="row">
                                        <div class="label">No Kepesertaan BPJS Ketenagakerjaan</div><br>
                                        <label>{{$detail->user_perusahaan->no_bpjs_ketenagakerjaan}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="label">No Kepesertaan BPJS Kesehatan</div><br>
                                        <label>{{$detail->user_perusahaan->no_bpjs_kesehatan}}</label>
                                    </div>
                                    <div class="row">
                                        <div class="d-flex align-content-center flex-wrap">
                                            <div style="border:0; width: 100%;" allowfullscreen>
                                                @include('map2')
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>lat : {{$detail->user_perusahaan->latitude}}</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>lng : {{$detail->user_perusahaan->longtitude}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.activate').forEach(button => {
          button.addEventListener('click', function() {
              const userId = this.getAttribute('data-user-id');

              Swal.fire({
                  title: 'Apakah Anda yakin?',
                  text: 'Anda akan mengaktifkan user ini!',
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonText: 'Ya, aktifkan!',
                  cancelButtonText: 'Tidak, batalkan'
              }).then((result) => {
                  if (result.isConfirmed) {
                      window.location.href = `/aktivasi-user/${userId}`;
                  }
              });
          });
      });
      </script>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
