<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ public_path('assets/css/mail.css') }}">
    <title>Laporan Pemutusan Hubungan Kerja</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; color: #000;">
    @include('pdf.kop')
    <div class="title" style="text-align: center; margin-bottom: 20px;">
        <h2 style="margin: 0; font-size: 16px; font-weight: bold;">TANDA TERIMA</h2>
        <h2 style="margin: 0; text-decoration: underline; font-size: 16px; font-weight: bold;">LAPORAN PEMUTUSAN HUBUNGAN KERJA</h2>
        <p style="margin: 0;">Nomor: 500.15.15/{{ $nomor }}/HIJ/BPL/DISKOPUM & NAKER/2024</p>
    </div>
    <div class="content" style="margin-bottom: 20px;">
        <p>Yang Bertanda tangan di bawah ini :</p>
        <div style="margin-left: 40px;">
            <label style="margin-right: 30px;">Nama</label><label>: {{$nama}}</label><br>
            <label style="margin-right: 15px;">Jabatan</label><label>: {{$jabatan}}</label><br>
            <label style="margin-right: 45px;">NIP</label><label>: {{$nip}}</label>
        </div>
        <p style="text-align: justify ">Telah menerima laporan pemutusan hubungan kerja dengan alasan pekerja telah melakukan pelanggaran ketentuan dalam perjanjian kerja dari perusahaan {{$profile->nama_perusahaan}} berdasarkan surat perusahaan Nomor: {{$no_surat}}, tanggal {{$tgl_surat}} Hal Laporan Pemutusan Hubungan Kerja, yang dilengkapi dengan lampiran :</p>
        <ol style="margin: 0; padding-left: 20px;">
            <li>Surat Pemberitahuan Pemutusan Hubungan kerja dari pihak perusahaan (pengusaha);</li>
            <li>Surat Tanggapan atas Pemberitahuan Pemutusan Hubungan Kerja dari dari pihak perusahaan (pengusaha) oleh pekerja/buruh;</li>
            <li>Fotocopy Perjanjian Bersama (PB) yang telah di tandatangani oleh para pihak (pengusaha dan pekerja).</li>
        </ol>
    </div>
    <div class="footer" style="text-align: right; margin-top: 40px;">
        <p style="margin-bottom: 70px;">KEPALA DINAS,</p>
        <p style="margin:0;">{{$nama}}</p>
        <p>NIP:{{$nip}}</p>
    </div>
    <div class="tembusan" style="margin-top: 20px;">
        <p>Tembusan disampaikan kepada Yth :</p>
        <ol style="padding-left: 20px;">
            <li>Wali Kota Banjarbaru (sebagai laporan)</li>
            <li>Kepala BPJS Ketenagakerjaan Kantor Cabang Banjarmasin</li>
        </ol>
    </div>
</body>
</html>
