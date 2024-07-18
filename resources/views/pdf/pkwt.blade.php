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
    <table>
        <tr>
            <td style="width: 15%; vertical-align: top; padding-bottom: 20px;">
                Banjarbaru, {{ \Carbon\Carbon::now()->locale('id')->isoFormat('DD MMMM Y') }}
            </td>
        </tr>
        <tr style="margin: 0;">
            <td style="width: 15%; vertical-align: top;">Kepada Yth</td>
        </tr>
        <tr style="margin: 0;">
            <td style="width: 15%; vertical-align: top;">Pimpinan {{$profile->nama_perusahaan}}</td>
        </tr>
        <tr style="margin: 0;">
            <td style="width: 15%; vertical-align: top;">Di -</td>
        </tr>
        <tr>
            <td style="width: 15%; vertical-align: top; margin-left:20px; text-decoration:underline;">Banjarbaru</td>
        </tr>
    </table>
    <div class="title" style="text-align: center; margin-bottom: 20px;">
        <h2 style="margin: 0; font-size: 16px; font-weight: bold;">TANDA BUKTI PENCATATAN</h2>
        <h2 style="margin: 0; text-decoration: underline; font-size: 16px; font-weight: bold;">PERJANJIAN KERJA WAKTU TERTENTU</h2>
        <p style="margin: 0;">500.15.2/{{ $nomor }}/BPCT/DISKOPUMNAKER/2024</p>
    </div>
    <p style=" text-indent: 40px; text-align:justify; padding-top:40px;">Berdasarkan Ketentuan Pasal 14 Peraturan Pemerintah Nomor 35 Tahun 2021 tentang Perjanjian Kerja Waktu Tertentu, Alih Daya, Waktu Kerja dan Waktu Istirahat, dan Pemutusan Hubungan Kerja telah diterima permohonan pencatatan atas Perjanjian Kerja Waktu Tertentu antara {{$profile->nama_perusahaan}}, beralamat di {{$profile->alamat}}, dengan pekerjanya sebagaimana daftar yang dilampirkan dalam surat Tanggal {{$tgl}}</p>
    <p style=" text-indent: 40px; text-align:justify;">Perjanjian Kerja dan dokumen yang dilampirkan telah diteliti dan telah kami catat dengan Nomor Bukti Pencatatan {{$no_pencatatan}}, tanggal {{$tgl_pencatatan}}. (Lampiran 1). </p>

    <p style="text-align:right; padding-top:40px; padding-right:20px;">KEPALA DINAS</p>
    <p style="text-align:right; padding-top:100px; margin:0; padding-right:20px;">(............................)</p>
</body>
</html>
