<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Sistem Informasi Layanan Perindustrian dan Ketenagakerjaan</title>
    <link rel="icon" href="assets/img/banjarbaru.png">
</head>
<body>
    <section class="vh-100" style="background-color: #f3f3f3;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block ">
                    <div class="mt-5 text-center justify-content-center">
                      <img src="assets/img/banjarbaru.png" alt="banjarbaru" class="w-50 mt-5" style="border-radius: 1rem 0 0 1rem;" />
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex justify-content-center align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">

                      <form method="POST">
                        @csrf
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <label class="fs-3"><b>Sistem Informasi Layanan Perindustrian dan Ketenagakerjaan</b></label>
                        </div>

                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color: #9b9b9b"> Masukkan Email dan Password</h5>

                        <div class="form-outline mb-4">
                          <input type="email" name="email" id="email" placeholder="Email" class="form-control form-control-lg" />
                        </div>

                        <div class="form-outline mb-4">
                          <input type="password" name="password" id="password" placeholder="Password" class="form-control form-control-lg" />
                        </div>

                        <div class="row">
                            <div class="col-md-3 pt-1 mb-4">
                              <button class="btn btn-warning btn-lg btn-block" type="submit"><label style="color: #ffffff;">Masuk</label></button>
                            </div>

                            <div class="col-md-5 pt-1 mb-4">
                                <button class="btn btn-light btn-lg btn-block" type="button">Lupa Password</button>
                            </div>

                            <div class="col-md-2 pt-1 mb-4">
                              <button class="btn btn-light btn-lg btn-block" type="button"><a href="/register" style="color: black; text-decoration: none;">Daftar</a>
                              </button>
                          </div>
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
