<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Sistem Informasi Layanan Ketenagakerjaan Hubungan Industrial</title>
    <link rel="icon" href="assets/img/banjarbaru.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="header fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><img src="assets/img/banjarbaru.png" alt="banjarbaru"><a href="#">SILAKHI</a></h1>

            <nav id="navbar" class="navbar" >
                <ul>
                <li><a class="header-scrolled getstarted scrollto" href="#about">Tentang Kami</a></li>
                <li><a class="header-scrolled getstarted scrollto" href="#services">Layanan Kami</a></li>
                <li><a class="header-scrolled getstarted scrollto border border-white rounded-5" href="/login">Masuk</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <section id="cta" class="cta">
        <div class="container text-center">
            <h1 data-aos="fade-up">Selamat Datang di SILAKHI</h1>
            <h1 data-aos="fade-up" data-aos-delay="100">Sistem Informasi Layanan Ketenagakerjaan Hubungan Industrial</h1>
            <h2 data-aos="fade-up" data-aos-delay="200">Mencetak Dokumen Anda Secara Mandiri</h2>
            <h3 data-aos="fade-up" data-aos-delay="300">"Ayo Lengkapi Sarana HI Buhan Pian, Sakira Bausaha Nyaman, Bagawi Tanang"</h3>
        </div>
    </section>

{{--Section Tentang Kami  --}}
    <section id="about" class="section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Tentang Kami</h2>
            </div>

            <div class="row content">
              <div class="col-lg-6">
                <p>
                  SILAKHI (Sistem Informasi Layanan Ketenagakerjaan dan Hubungan Industrial) adalah layanan daring <i>(Online)</i> yang dapat membantu anda dalam mengajukan izin perusahaan anda. Beberapa Layanan Kami yaitu :
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Pengesahan Peraturan Perusahaan</li>
                  <li><i class="ri-check-double-line"></i> Pendaftaran Perjanjian Kerja Bersama</li>
                  <li><i class="ri-check-double-line"></i> Pendaftaran Perjanjian Kerja Waktu Tertentu</li>
                  <li><i class="ri-check-double-line"></i> Pencatatan Serikat Pekerja/Serikat Buruh</li>
                  <li><i class="ri-check-double-line"></i> Pendaftaran Lembaga Kerja Sama Bipartit</li>
                  <li><i class="ri-check-double-line"></i> Pencatatan Penyelesaian Perselisihan Hubungan Internal</li>
                  <li><i class="ri-check-double-line"></i> Pelaporan Pemutusan Hubungan Kerja</li>
                </ul>
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0">
                <p>
                  Dengan menggunakan SILAKHI anda dapat mengetahui progress permohonan anda dengan jelas tanpa harus datang ketempat, lengkapi Sarana HI buhan Pian, Sakira Beusaha Nyaman, Bagawi Tanang.
                </p>
              </div>
            </div>

          </div>
    </section>
{{-- Akhir Section Tentang Kami --}}


{{-- Section Layanan Kami --}}
    <section id="services" class="services section-bgg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Syarat Syarat Pengajuan</h2>
                <p>Lengkapi Persyaratan Anda Sebelum Melakukan Pengajuan. Syarat syarat dapat dilihat dibawah ini :</p>
            </div>

            @include('dashboard.modal')
            <div class="row mb-4">

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <button class="btn-no-border" data-bs-toggle="modal" data-bs-target="#pp">
                            <div class="icon-box">
                                <div class="text-center">
                                    <div class="icon"><img src="/assets/img/permohonan.png" alt=""></div>
                                    <h4><a>Pengesahan Peraturan Perusahaan</a></h4>
                                </div>
                            </div>
                        </button>
                    </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <button class="btn-no-border" data-bs-toggle="modal" data-bs-target="#pkb">
                        <div class="icon-box">
                            <div class="text-center">
                                <div class="icon"><img src="/assets/img/pkb.png" alt=""></i></div>
                                <h4><a>Pendaftaran Perjanjian Kerja Bersama</a></h4>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                    <button class="btn-no-border" data-bs-toggle="modal" data-bs-target="#pkwt">
                        <div class="icon-box">
                            <div class="text-center">
                                <div class="icon"><img src="/assets/img/pkwt.png" alt=""></div>
                                <h4><a>Pendaftaran Perjanjian Kerja Waktu Tertentu</a></h4>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                    <button class="btn-no-border" data-bs-toggle="modal" data-bs-target="#spsb">
                        <div class="icon-box">
                            <div class="text-center">
                                <div class="icon"><img src="/assets/img/spsb.png" alt=""></div>
                                <h4><a>Pencatatan Serikat Buruh/Serikat Pekerja</a></h4>
                            </div>
                        </div>
                    </button>
                </div>
            </div>

            <div class="row justify-content-center">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <button class="btn-no-border" data-bs-toggle="modal" data-bs-target="#lks">
                            <div class="icon-box">
                                <div class="text-center">
                                    <div class="icon"><img src="/assets/img/lks.png" alt=""></div>
                                    <h4><a>Pendaftaran Lembaga Kerja Sama Bipartit</a></h4>
                                </div>
                            </div>
                        </button>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <button class="btn-no-border" data-bs-toggle="modal" data-bs-target="#hi">
                            <div class="icon-box">
                                <div class="text-center">
                                    <div class="icon"><img src="/assets/img/hi.png" alt=""></div>
                                    <h4><a>Pencatatan Penyelesaian Perselisihan Hubungan Internal</a></h4>
                                </div>
                            </div>
                        </button>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                        <button class="btn-no-border" data-bs-toggle="modal" data-bs-target="#phk">
                            <div class="icon-box">
                                <div class="text-center">
                                    <div class="icon"><img src="/assets/img/phk.png" alt=""></div>
                                    <h4><a>Pelaporan Pemutusan Hubungan Kerja</a></h4>
                                </div>
                            </div>
                        </button>
                    </div>
            </div>
        </div>
    </section>
{{-- Akhir Section Layanan Kami --}}


<footer id="footer" data-aos="fade-up">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>SILAKHI</h3>
            <p>
              Jalan Soekarno Hatta <br>
              Trikora<br>
              Banjarbaru, Kalimantan Selatan <br><br>
              <strong>Phone:</strong> 0511-6749523<br>
              <strong>Email:</strong> admin@diskopukmnaker.banjarbarukota.go.id<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#cta">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Syarat Pengajuan</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Layanan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a>Pengesahan PP</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>Pendaftaran PKB</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>Pendaftaran PKWT</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>Pencatatan SP/SB</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>Pendaftaran LKS Bipartit</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>Pencatatan Perselisihan HI</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>Pelaporan PHK</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Sosial Media Kami</h4>
            <p>Beberapa Sosial Media Kami</p>
            <div class="social-links mt-3">
              <a href="https://diskopukmnaker.banjarbarukota.go.id/" target="_blank" class="twitter"><i class='bx bxs-color'></i></a>
              <a href="https://www.instagram.com/diskopukmnaker.banjarbaru/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong></strong>
      </div>
      <div class="credits">
        Pemerintah Kota Banjarbaru
      </div>
    </div>
</footer>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>


<script src="assets/js/main.js"></script>

</html>
