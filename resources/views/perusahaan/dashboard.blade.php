<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Sistem Informasi Layanan Perindustrian dan Ketenagakerjaan</title>
    <link rel="icon" href="assets/img/banjarbaru.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <header id="header" class="fixed-top header-dashboard-perusahaan">
        <div class="container d-flex align-items-center">
            <h1 class="logoo me-auto"><img src="assets/img/banjarbaru.png" style="width: 40px;" alt="banjarbaru"><a href="#">SILAPAK</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                <li><a class="dash" href="#cta">Profile</a></li>
                <li><a class="dash" href="#about">Buat Permohonan</a></li>
                <li><a class="dash" href="#about">Cek Permohonan</a></li>
                <li><a class="dash border border-white rounded-5" href="/logout">Keluar</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header>

    <section class="box">
        <section>
            <h1 style="padding: 30px;">Selamat Datang, {{$user_name}}</h1>
        </section>

        <section class="align-items-center d-flex justify-content-center">
            <div class="card" style="border-radius: 1rem;">
                <div style="width: 1500px; height: 900px;">
                    <div class="mt-4 text-center">
                        <label style="font-size: 25px;">Ajukan Permohonan Anda</label>
                    </div>
                    <div class="card card-select" style="border-radius: 1rem; width: 400px; height:150px;">

                    </div>
                    </div>
                </div>
            </div>
        </section>



    </section>

</body>
</html>
