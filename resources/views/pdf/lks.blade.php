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
    <div class="content">
        <div class="title">
            <p>SURAT KEPUTUSAN</p>
            <p>KEPALA DINAS KOPERASI USAHA MIKRO DAN TENAGA KERJA KOTA BANJARARU</p>
            <p>NOMOR : 500.15.13.2/{{$nomor}}/HIJ/DISKOP,UM&NAKER</p>
            <p>TENTANG PEMBENTUKAN LEMBAGA KERJA SAMA (LKS) BIPARTIT</p>
            <p>{{$profile->nama_perusahaan}}</p>
            <p>KEPALA DINAS KOPERASI, USAHA MIKRO DAN TENAGA KERJA KOTA BANJARBARU,</p>
        </div>
    </div>

    <table>
        <tr style="margin: 0;">
            <td style="width: 15%; vertical-align: top;">Membaca :</td>
            <td style="width: 100%; text-align:justify; vertical-align: top;">
                <ol style="margin:0; list-style-type: none;">
                    <li style="margin-bottom:20px;">Surat Manager Unit Pelaksana Pengatur Distribusi Kalselteng Nomor 0119/SDM.15.01/F13060000/2024 tanggal 27 Februari 2024 Perihal  Pembentukan Berita Acara LKS Bipartit Tahun 2024</li>
                </ol>
            </td>
        </tr>
        <tr style="margin: 0;">
            <td style="width: 15%; vertical-align: top;">Menimbang :</td>
            <td style="width: 100%; text-align:justify; vertical-align: top;">
                <ol type="a" style="margin:0;">
                    <li style="margin-bottom:20px;">bahwa Laporan Pembentukan LKS Bipartit {{$profile->nama_perusahaan}}.  telah memenuhi Peraturan Menteri Tenaga Kerja dan Transmigrasi  Republik Indonesia Nomor PER- 32/MEN/VII/2008 tentang Tata Cara Pembentukan dan Susunan Keanggotaan Lembaga Kerja Sama Bipartit</li>
                    <li style="margin-bottom:20px;">bahwa sehubungan dengan hal tersebut maka susunan pengurus Lembaga Kerja Sama  (LKS) Bipartit    {{$profile->nama_perusahaan}}. perlu dicatatkan dan ditetapkan dengan Keputusan Kepala Dinas Koperasi, Usaha Mikro dan Tenaga Kerja Kota Banjarbaru</li>
                </ol>
            </td>
        </tr>
        <tr style="margin: 0;">
            <td style="width: 15%; vertical-align: top;">Mengingat :</td>
            <td style="width: 100%; text-align:justify; vertical-align: top;">
                <ol style="margin:0;">
                    <li style="margin-bottom:20px;">Undang-Undang Nomor 9 Tahun 1999 tentang Pembentukan Kotamadya Daerah Tingkat II Banjarbaru (Lembaran Negara Republik Indonesia Tahun 1999 Nomor 43, Tambahan Lembaran Negara Republik Indonesia Nomor 3822);</li>
                    <li style="margin-bottom:20px;">Undang-Undang Nomor 21 Tahun 2000 tentang Serikat Pekerja/ Serikat Buruh;</li>
                    <li style="margin-bottom:20px;">Undang-Undang Nomor 13 Tahun 2003 tentang Ketenagakerjaan (Lembaran Negara Republik Indonesia Tahun 2003 Nomor 39, Tambahan Lembaran Negara Republik Indonesia Nomor 4279);</li>
                    <li style="margin-bottom:20px;">Undang-Undang Nomor 2 Tahun 2004 tentang Penyelesaian Perselisihan Hubungan Industrial (Lembaran Negara RI Tahun 2004 Nomor 6, Tambahan Lembaran Negara RI Nomor 4356);</li>
                    <li style="margin-bottom:20px;">Peraturan Menteri Tenaga Kerja dan Transmigrasi Republik Indonesia Nomor: Per-32/Men/XII/2008 tentang Tata Cara Pembentukan dan Susunan Keanggotaan Lembaga Kerja Sama Bipartit;</li>
                </ol>
            </td>
        </tr>
        <tr style="margin: 0;">
            <td style="width: 15%; vertical-align: top;"></td>
            <td style="width: 100%; text-align:justify; vertical-align: top;">
                <ol start="6" style="margin:0;">
                    <li style="margin-bottom:20px;">Peraturan Daerah Kota Banjarbaru Nomor 10 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Kota Banjarbaru (Lembaran Daerah Kota Banjarbaru Tahun 2016 Nomor 10);</li>
                    <li style="margin-bottom:20px;">Peraturan Walikota Banjarbaru Nomor 72 Tahun 2023 tentang Kedudukan, Susunan Organisasi, Tugas Pokok dan Fungsi serta Tata Kerja Dinas Koperasi Usaha Mikro dan Tenaga Kerja Kota Banjarbaru (Berita Daerah Kota Banjarbaru Tahun 2023 Nomor 72).</li>
                </ol>
            </td>
        </tr>
        <tr>
            <td style="text-align:center; padding-top:30px; padding-bottom:10px;" colspan="2">MEMUTUSKAN</td>
        </tr>
        <tr>
            <td style="width: 20%; vertical-align: top;  padding-bottom:20px;">Menetapkan :</td>
        </tr>
        <tr>
            <td style="width: 20%; vertical-align: top;">KESATU :</td>
            <td style="width: 30%; text-align:justify; vertical-align: top;  padding-bottom:10px;">
                Mencatat kepengurusan Lembaga Kerja Sama  (LKS) Bipartit {{$profile->nama_perusahaan}}dengan Susunan Pengurus sebagaimana tercantum dalam lampiran keputusan ini.
            </td>
        </tr>
        <tr>
            <td style="width: 20%; vertical-align: top;">KEDUA :</td>
            <td style="width: 30%; text-align:justify; vertical-align: top; padding-bottom:10px;">
                Susunan     pengurus    Lembaga    Kerja    Sama    (LKS)  Bipartit   {{$profile->nama_perusahaan}}tersebut tercatat dengan Nomor  Pencatatan 500.15.13.2/{{$nomor}}/HIJ/DISKOP,UM&NAKER tanggal {{$tgl}}
            </td>
        </tr>
        <tr>
            <td style="width: 20%; vertical-align: top;">KETIGA :</td>
            <td style="width: 30%; text-align:justify; vertical-align: top; padding-bottom:10px;">
                Masa kerja pengurus Lembaga Kerja Sama (LKS) Bipartit sebagaimana diktum KESATU adalah selama 3 (Tiga) tahun.
            </td>
        </tr>
        <tr>
            <td style="width: 20%; vertical-align: top;">KEEMPAT :</td>
            <td style="width: 30%; text-align:justify; vertical-align: top; padding-bottom:10px;">
               Apabila pada masa berlakunya Keputusan  Lembaga Kerja Sama (LKS) Bipartit  sebagaimana  diktum  KETIGA  terjadi perubahan susunan kepengurusan maka pemimpin perusahaan wajib melaporkan kepada Dinas Koperasi, UM dan Tenaga Kerja Kota Banjarbaru.
            </td>
        </tr>
        <tr>
            <td style="width: 20%; vertical-align: top;">KELIMA :</td>
            <td style="width: 30%; text-align:justify; vertical-align: top;">
                Keputusan ini mulai berlaku pada tanggal ditetapkan.
            </td>
        </tr>
    </table>


    <p style="text-align:right; padding-top:30px;">KEPALA DINAS</p>
    <p style="text-align:right; padding-top:100px; margin:0;">(...........................)</p>

</body>
</html>
