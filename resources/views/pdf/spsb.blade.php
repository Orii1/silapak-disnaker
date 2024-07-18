<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ public_path('assets/css/mail.css') }}">
</head>
<body style="font-family: Arial, sans-serif; margin: 0; color: #000;">
    @include('pdf.kop')
    <div class="title" style="text-align: center; margin-bottom: 20px;">
        <h2 style="margin: 0; font-size: 16px; font-weight: bold;">TANDA BUKTI PENCATATAN</h2>
    </div>
    <p style=" text-indent: 40px; text-align:justify; padding-top:20px;">
        Berdasarkan Pasal 2 ayat (1) Keputusan Menteri  Tenaga Kerja dan Transmigrasi Nomor : Kep.16/Men/2001 tanggal 15 Pebruari 2001,
        tentang Tata Cara Pencatatan Serikat Pekerja / Serikat Buruh telah diterima pemberitahuan pembentukan/ pencatatan Serikat
        Pekerja/Serikat Buruh yang bernama  SERIKAT PEKERJA {{$nama_sp}}. Alamat Sekretariat : {{$alamat}}
        Dengan Surat Nomor : {{$no_permohonan}}  tanggal {{$tgl_permohonan}}.
    </p>
    <p style=" text-indent: 40px; text-align:justify;">Kelengkapan persyaratan sesuai Pasal 2 ayat (2) Keputusan Menteri Tenaga Kerja dan Transmigrasi Nomor : Kep.16/Men/2001, telah dipenuhi dan telah kami catat dalam buku pencatatan  dengan  nomor  Bukti  Pencatatan  Nomor  :  {{$no_pencatatan}}  tanggal  {{$tgl_pencatatan}}. </p>

    <p style="text-align:right; padding-top:40px; padding-right:20px;">KEPALA DINAS</p>
    <p style="text-align:right; padding-top:100px; margin:0; padding-right:20px;">(............................)</p>
</body>
</html>
