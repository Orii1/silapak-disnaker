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
    {{-- <header id="header" class="fixed-top header-dashboard-perusahaan">
        <div class="container d-flex align-items-center">
            <h1 class="logoo me-auto"><img src="assets/img/banjarbaru.png" style="width: 40px;" alt="banjarbaru"><a href="#">SILAPAK</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                <li><a class="dash" href="#cta">Profile</a></li>
                <li><a class="dash" href=""></a></li>
                <li><a class="dash" href=""></a></li>
                <li><a class="dash" href=""></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header> --}}

    <section class="box">
        <form action="/dashboard/profile-perusahaan/{{$user->id}}" method="POST">
            @method("PUT")
            @csrf
            <input type="hidden" name="id" id="id" value="{{$user->id}}"/>
            <div class="p-5">
                <div class="card">
                    <div class="p-5">
                        <div class="mb-4">
                            <label for="name"><b>Nama Perusahaan</b></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nama Perusahaan" value="{{$user->name}}" disabled>
                        </div>
                        <div class="mb-4">
                            <label for="address"><b>Alamat Perusahaan</b></label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Alamat Perusahaan" value="{{$user->address}}" disabled>
                        </div>
                        <div class="mb-4">
                            <label for="owner"><b>Pemilik Perusahaan</b></label>
                            <input type="text" name="owner" id="owner" class="form-control" placeholder="Pemilik Perusahaan" value="{{$user->owner}}" disabled>
                        </div>
                        <div class="mb-4">
                            <label for="email"><b>Email</b></label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="{{$user->email}}" disabled>
                        </div>
                        <div class="mb-4">
                            <label for="type"><b>Tipe Perusahaan (Sesuai NIB)</b></label>
                            <select class="form-select" name="type" required>
                                <option selected disabled>{{$user->type}}</option>
                                <option value="Mikro">Mikro</option>
                                <option value="Kecil">Kecil</option>
                                <option value="Menengah">Menengah</option>
                                <option value="Besar">Besar</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="sector"><b>Sektor/Nama KBLI (Sesuai NIB)</b></label>
                            <input type="text" name="sector" id="sector" class="form-control" value="{{$user->sector}}" required>
                        </div>
                        <div class="mb-4">
                            <label for="status"><b>Status Perusahaan</b></label>
                            <select class="form-select" name="status" required>
                                <option selected disabled>{{$user->status}}</option>
                                <option value="Kantor Pusat">Kantor Pusat</option>
                                <option value="Kantor Cabang">Kantor Cabang</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="type"><b>Status Penanaman Modal</b></label>
                            <select class="form-select" name="modal" required>
                                <option selected disabled>{{$user->modal}}</option>
                                <option value="Perorangan">Perorangan</option>
                                <option value="Swasta Nasional">Swasta Nasional</option>
                                <option value="BUMN">BUMN</option>
                                <option value="BUMD">BUMD</option>
                                <option value="PMA">PMA</option>
                                <option value="PMDN">PMDN</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for=""><b>Surat Keputusan Izin Usaha (Nomor dan Tanggal Surat)</b></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="number_letter" id="number_letter" class="form-control" placeholder="Nomor Surat" value="{{$user->number_letter}}" required>
                                </div>
                                <div class="col-6">
                                    <input type="date" name="date_latter" id="date_latter" class="form-control" placeholder="Tanggal Surat" value="{{$user->date_latter}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for=""><b>Jumlah Tenaga Kerja</b></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="men" id="men" class="form-control" placeholder="Laki laki" value="{{$user->men}}" required>
                                </div>
                                <div class="col-6">
                                    <input type="text" name="woman" id="woman" class="form-control" placeholder="Perempuan" value="{{$user->woman}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for=""><b>Status Hubungan Kerja</b></label>
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" name="pkwt" id="pkwt" class="form-control" placeholder="PKWT" value="{{$user->pkwt}}" required>
                                </div>
                                <div class="col-4">
                                    <input type="text" name="outsourcing" id="outsourcing" class="form-control" placeholder="Outsourcing" value="{{$user->outsourcing}}" required>
                                </div>
                                <div class="col-4">
                                    <input type="text" name="wna" id="wna" class="form-control" placeholder="WNA" value="{{$user->wna}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for=""><b>Nomor Kepesertaan BPJS Ketenagakerjaan</b></label>
                            <input type="text" name="number_ketenagakerjaan" id="number_ketenagakerjaan" class="form-control"  value="{{$user->number_ketenagakerjaan}}" required>
                        </div>
                        <div class="mb-4">
                            <label for=""><b>Nomor Kepesertaan BPJS Kesehatan</b></label>
                            <input type="text" name="number_kesehatan" id="number_kesehatan" class="form-control"  value="{{$user->number_kesehatan}}" required>
                        </div>

                        <div class="mt-5">
                            <button class="btn btn-warning btn-lg btn-block" type="submit"><i class="fa-solid fa-floppy-disk"></i><b style="color: #ffffff;">Simpan</b></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
