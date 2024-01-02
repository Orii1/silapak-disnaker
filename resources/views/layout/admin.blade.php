<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin - Sistem Informasi Layanan Ketenagakerjaan Hubungan Industrial</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/banjarbaru.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Template Main CSS File -->
  <link href="../../assets/css/styleadmin.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <div class="ms-2">
            <a href="/admin/dashboard" class="logo d-flex align-items-center">
                <img src="../../assets/img/banjarbaru.png" alt="">
                <div class="ms-2"><span class="d-none d-lg-block">SILAKHI</span></div>
            </a>
        </div>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <div class="mx-5">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="../../assets/img/adminprofile.png" alt="Profile" class="rounded-circle mx-2">
                <span class="d-none d-md-block">Admin</span>
              </a>
        </div>
      </ul>
    </nav>

  </header>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin/profile">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin/data-perusahaan">
            <i class="bi bi-building"></i>
          <span>Perusahaan</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Permohonan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            @if ($pp_not == "0")
            <a class="position-relative" href="/admin/permohonan-pengesahan-pp">
                <i class="bi bi-circle"></i>Pengesahan Peraturan Perusahaan
            </a>
            @else
            <a class="position-relative" href="/admin/permohonan-pengesahan-pp">
                <i class="bi bi-circle"></i>Pengesahan Peraturan Perusahaan<span class="badge text-bg-danger">{{$pp_not}}</span>
            </a>
            @endif
          </li>
          <li>
            @if ($pkb_not == "0")
            <a href="/admin/permohonan-pendaftaran-pkb">
                <i class="bi bi-circle"></i>Pendaftaran Perjanjian Kerja Bersama
            </a>
            @else
            <a href="/admin/permohonan-pendaftaran-pkb">
                <i class="bi bi-circle"></i>Pendaftaran Perjanjian Kerja Bersama<span class="badge text-bg-danger">{{$pkb_not}}</span>
            </a>
            @endif
          </li>
          <li>
            @if ($pkwt_not == "0")
            <a href="/admin/permohonan-pendaftaran-pkwt">
                <i class="bi bi-circle"></i>Pendaftaran Perjanjian Kerja Waktu Tertentu
              </a>
            @else
            <a href="/admin/permohonan-pendaftaran-pkwt">
              <i class="bi bi-circle"></i>Pendaftaran Perjanjian Kerja Waktu Tertentu<span class="badge text-bg-danger">{{$pkwt_not}}</span>
            </a>
            @endif
          </li>
          <li>
            @if ($spsb_not == "0")
            <a href="/admin/permohonan-pencatatan-spsb">
                <i class="bi bi-circle"></i>Pencatatan Serikat Pekerja/Serikat Buruh
            </a>
            @else
            <a href="/admin/permohonan-pencatatan-spsb">
              <i class="bi bi-circle"></i>Pencatatan Serikat Pekerja/Serikat Buruh<span class="badge text-bg-danger">{{$spsb_not}}</span>
            </a>
            @endif
          </li>
          <li>
            @if ($lks_not == "0")
            <a href="/admin/permohonan-pendaftaran-lks">
                <i class="bi bi-circle"></i>Pendaftaran Lembaga Kerja Sama Bipartit
            </a>
            @else
            <a href="/admin/permohonan-pendaftaran-lks">
              <i class="bi bi-circle"></i>Pendaftaran Lembaga Kerja Sama Bipartit<span class="badge text-bg-danger">{{$lks_not}}</span>
            </a>
            @endif
          </li>
          <li>
            @if ($hi_not == "0")
            <a href="/admin/permohonan-pencatatan-hi">
                <i class="bi bi-circle"></i>Pencatatan Penyelesaian Perselisihan Hubungan Industrial
            </a>
            @else
            <a href="/admin/permohonan-pencatatan-hi">
                <i class="bi bi-circle"></i>Pencatatan Penyelesaian Perselisihan Hubungan Industrial<span class="badge text-bg-danger">{{$hi_not}}</span>
            </a>
            @endif
          </li>
          <li>
            @if ($phk_not == "0")
            <a href="/admin/permohonan-pelaporan-phk">
                <i class="bi bi-circle"></i>Pelaporan Pemutusan Hubungan Kerja
            </a>
            @else
            <a href="/admin/permohonan-pelaporan-phk">
                <i class="bi bi-circle"></i>Pelaporan Pemutusan Hubungan Kerja<span class="badge text-bg-danger">{{$phk_not}}</span>
            </a>
            @endif
        </li>
    </ul>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin/asset">
          <i class="bi bi-card-list"></i>
          <span>Asset & Template</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed " href="/logout">
            <i class="bi bi-box-arrow-right"></i>
          <span>Log Out</span>
        </a>
      </li>

    </ul>

  </aside>

  <main id="main" class="main">

    @yield('content')

  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="../../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../../assets/vendor/quill/quill.min.js"></script>
  <script src="../../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>

  <script src="../../assets/js/mainadmin.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
