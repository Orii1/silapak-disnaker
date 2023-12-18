@extends('layout.master')

@section('content')
        <div class="container">
          <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                  <div class="d-flex justify-content-center py-4">
                    <a href="index.html" class="logo d-flex align-items-center w-auto">
                      <img src="assets/img/banjarbaru.png" alt="">
                      <span class="d-none d-lg-block">SILAKHI</span>
                    </a>
                  </div><!-- End Logo -->

                  <div class="card mb-3">

                    <div class="card-body">

                      <div class="pt-2 pb-0">
                        <h5 class="card-title text-center pb-2 fs-7">Sistem Informasi Layanan Ketenagakerjaan Hubungan Industrial</h5>
                        <p class="text-center small" style="color: #9b9b9b">Masukkan Email dan Password Anda</p>
                      </div>

                      <form method="POST">
                        @csrf
                        @if (Session('error'))
                        <div class="alert alert-danger">
                            {{Session('error')}}
                        </div>
                        @endif
                        <div class="col-12 mb-2">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                        </div>

                        <div class="col-12 mb-4">
                            <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Password" required>
                        </div>


                        <div class="col-12 mb-2">
                            <button class="btn btn-primary w-100" type="submit">Masuk</button>
                        </div>
                        <div class="col-12 mb-4">
                            <a href="/register" class="btn btn-outline-primary w-100" type="submit">Daftar</a>
                        </div>
                        <div class="col-12 mb-4">
                            <p class="small mb-0">Lupa Password? <a href="#">Reset Password</a></p>
                        </div>

                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </section>

        </div>
@endsection
