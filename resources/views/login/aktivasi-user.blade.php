@extends('layout.master')

@section('content')
<div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div class="card mb-3">
              <div class="card-body">

                <div class="pt-4 pb-2 text-center">
                  <img src="{{asset('assets/img/check.png')}}" style="height: 200px;" alt="">
                </div>

                <div class="text-center pb-5">
                    <b class="card-title" style="color: black; font-size: 20px;">Berhasil Membuat Akun</b>
                    <label class="mt-3" style="font-size: 16px;">Akun anda masih perlu aktivasi oleh Admin!</label>
                    <label class="mt-2" style="font-size: 16px;">Silahkan tunggu hingga akun telah di Aktivasi</label>
                    <div class="mt-3">
                        <a href="/">ke beranda</a>
                    </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

  </div>
@endsection
