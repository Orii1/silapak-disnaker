<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{ public_path('assets/css/mail.css') }}">
</head>
<body>
    @include('pdf.kop')
    <p style="text-align:right; padding-right:20px;">Banjarbaru, {{ \Carbon\Carbon::now()->locale('id')->isoFormat('DD MMMM Y') }}</p>
    <table>
        <tr style="margin: 0;">
            <td style="width: 10%; vertical-align: top;">Nomor</td>
            <td style="vertical-align: top;">: {{$nomor}}</td>
        </tr>
        <tr style="margin: 0;">
            <td style="width: 10%; vertical-align: top;">Lampiran</td>
            <td style="vertical-align: top;">: {{$lampiran}}</td>
        </tr>
        <tr style="margin: 0;">
            <td style="width: 10%; vertical-align: top; padding-bottom:20px;">Hal</td>
            <td style="vertical-align: top;">: Panggilan Klarifikasi/Sidang Mediasi</td>
        </tr>
         <tr style="margin: 0;">
            <td style="width: 10%; vertical-align: top;">Yth</td>
            <td style="vertical-align: top;">1. Sdr{{$penerima1}}(Pengusaha)</td>
        </tr>
        <tr style="margin: 0;">
            <td style="width: 10%; vertical-align: top;"></td>
            <td style="vertical-align: top;">2. Sdr{{$penerima2}}(Pekerja/Buruh/SP/SB)</td>
        </tr>
        <tr style="margin: 0;">
            <td style="width: 10%; vertical-align: top; padding-top:10px;" col>Di - Tempat</td>
            <td style="vertical-align: top;"></td>
        </tr>
    </table>

    <p style=" text-indent: 40px; text-align:justify; padding-top:20px;">Sehubungan dengan permohonan penyelesaian perselisihan hubungan industrial Saudara sebagaimana surat nomor {{$no_permohonan}}. tanggal {{$tgl_permohonan}}  yang  kami terima pada tanggal {{$tgl}} dan sesuai dengan ketentuan Pasal 10  Undang- Undang Nomor 2 Tahun 2004 tentang Penyelesaian Perselisihan Hubungan Industrial juncto Peraturan Menteri Tenaga Kerja dan Transmigrasi tentang Pengangkatan dan pemberhentian Mediator Hubungan Industrial serta Tata Kerja Mediasi, dengan ini diminta  kehadiran  Saudara pada :
    </p>

    <table>
        <tr style="margin: 0;">
            <td style="width: 10%; vertical-align: top;">Hari</td>
            <td style="vertical-align: top;">: {{$hari}}</td>
        </tr>
        <tr style="margin: 0;">
            <td style="width: 10%; vertical-align: top;">Tanggal</td>
            <td style="vertical-align: top;">: {{$tanggal}}</td>
        </tr>
        <tr style="margin: 0;">
            <td style="width: 10%; vertical-align: top;">Pukul</td>
            <td style="vertical-align: top;">: {{$pukul}}</td>
        </tr>
        <tr style="margin: 0;">
            <td style="width: 10%; vertical-align: top;">Tempat</td>
            <td style="vertical-align: top;">: {{$tempat}}</td>
        </tr>
    </table>
    <p style=" text-indent: 40px; text-align:justify;">Masing-masing pihak diminta kehadirannya tepat waktu dengan membawa data/berkas yang diperlukan dalam proses penyelesaian perselisihan hubungan industrial. Demikian untuk diketahui dan dilaksanakan sebagaimana mestinya.</p>

    <p style="text-align:right; padding-top:40px; padding-right:20px;">KEPALA DINAS</p>
    <p style="text-align:right; padding-top:100px; margin:0; padding-right:20px;">(............................)</p>

</body>
</html>
