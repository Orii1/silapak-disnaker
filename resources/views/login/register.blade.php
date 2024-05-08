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
                  <h5 class="card-title text-center pb-2 fs-7">Membuat Akun Perusahaan Anda</h5>
                  <p class="text-center small" style="color: #9b9b9b">Masukkan data perusahaan Anda</p>
                </div>

                <form method="POST" id="registerForm">
                  @csrf
                  @if (Session('error'))
                  <div class="alert alert-danger">
                      {{Session('error')}}
                  </div>
                  @endif
                  
                  <div id="formStep1" class="col-12 mb-4">
                     <input type="email" name="email" id="email" placeholder="Email Perusahaan" class="form-control" required/>
                  </div>

                  <div id="formStep2" class="col-12 mb-4" style="display: none;">
                     <input type="text" name="company_name" id="company_name" placeholder="Nama Perusahaan" class="form-control" required/>
                     <input type="text" name="company_address" id="company_address" placeholder="Alamat Perusahaan" class="form-control mt-3" required/>
                     <div class="col-12 mb-4">
                        <button class="btn btn-outline-primary w-100" type="button" onclick="backStep()">Kembali</button>
                    </div>
                  </div>

                  <div class="col-12 mb-4">
                      <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Password" required>
                  </div>

                  <div class="col-12 mb-4">
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" name="cek" id="cek" required>
                        <label class="form-check-label" for="cek" style="font-size: 13px;">
                            Dengan ini saya menyetujui <a href="">Peraturan dan Ketentuan</a> Perizinan Online.
                        </label>
                    </div>
                  </div>

                  <div class="col-12 mb-2">
                      <button class="btn btn-primary w-100" type="button" onclick="nextStep()">Selanjutnya</button>
                  </div>
                  <div class="col-12 mb-5">
                      <a href="{{route('login')}}" class="btn btn-outline-primary w-100">Kembali</a>
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

<script>
  let currentStep = 1;
  const totalSteps = 2; // Jumlah langkah pada form

  function showStep(step) {
      document.querySelectorAll('#registerForm > div').forEach(div => {
          div.style.display = 'none';
      });

      document.querySelector(`#formStep${step}`).style.display = 'block';
  }

  function nextStep() {
      if (currentStep < totalSteps) {
          currentStep++;
          showStep(currentStep);
      }
  }

  function backStep() {
      if (currentStep > 1) {
          currentStep--;
          showStep(currentStep);
      }
  }

  showStep(currentStep); // Menampilkan langkah pertama saat halaman dimuat
</script>
