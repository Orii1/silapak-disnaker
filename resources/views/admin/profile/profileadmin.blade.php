@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('content')
    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Data Profile</li>
        </ol>
      </nav>
    </div>

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <img src="../assets/img/adminprofile.png" alt="Profile" class="rounded-circle">
              <h2 class="mb-3">Admin</h2>
              <h3 class="mb-2 text-muted text-center">Dinas Koperasi Usaha Kecil Menengah dan Tenaga Kerja Banjarbaru</h3>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Info</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Ganti Password</button>
                </li>

              </ul>

              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Tentang</h5>
                  <p class="small">Admin merupakan seorang yang mengelola website serta melakukan pemantauan dari aktivitas yang dilakukan pada website yang dikelola. Serta memberikan <i>Feedback</i> (umpan balik) bagi pengguna website atau pengaju permohonan.</p>
                   @foreach ($profile as $p )
                   <h5 class="card-title">Detail Profile</h5>
                   <div class="row">
                     <div class="col-lg-3 col-md-4 label ">Nama</div>
                     <div class="col-lg-9 col-md-8">{{$p->name}}</div>
                   </div>

                   <div class="row">
                     <div class="col-lg-3 col-md-4 label">Alamat</div>
                     <div class="col-lg-9 col-md-8">{{$p->address}}</div>
                   </div>

                   <div class="row">
                     <div class="col-lg-3 col-md-4 label">Dari</div>
                     <div class="col-lg-9 col-md-8">{{$p->owner}}</div>
                   </div>

                   <div class="row">
                     <div class="col-lg-3 col-md-4 label">Email</div>
                     <div class="col-lg-9 col-md-8">{{$p->email}}</div>
                   </div>
                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <form action="/admin/change-password/{{$p->id}}" method="POST">
                    @csrf
                    @if (Session('error'))
                        <div class="alert alert-danger">
                            {{Session('error')}}
                        </div>
                    @endif

                    @if (Session('invalid'))
                        <div class="alert alert-danger">
                            {{Session('invalid')}}
                        </div>
                    @endif
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-5 col-form-label">Password Sekarang</label>
                      <div class="col-md-8 col-lg-7">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newpassword" class="col-md-4 col-lg-5 col-form-label">Password Baru</label>
                      <div class="col-md-8 col-lg-7">
                        <input name="newpassword" type="password" class="form-control" id="newpassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-5 col-form-label">Masukan Lagi Password Baru</label>
                      <div class="col-md-8 col-lg-7">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="mt-4">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Ganti Password</button>
                        </div>
                    </div>
                  </form>

                </div>
                @endforeach
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

    @if (Session::has('message'))
    <script>
        toastr.success("{{Session::get('message')}}");
    </script>
  @endif
@endsection
