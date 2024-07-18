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
            <p>KEPUTUSAN KEPALA DINAS</p>
            <p>KOPERASI USAHA MIKRO DAN TENAGA KERJA KOTA BANJARARU</p>
            <p>NOMOR : 500.15.12.1/{{$nomor}}/DISKOP,UM & NAKER/2024</p>
            <p>TENTANG PENDAFTARAN PERJANJIAN KERJA BERSAMA</p>
            <p>{{$profile->nama_perusahaan}}</p>
            <p>KEPALA DINAS KOPERASI, USAHA MIKRO DAN TENAGA KERJA KOTA BANJARBARU,</p>
        </div>
    </div>

    <table>
        <tr style="margin: 0;">
            <td style="width: 15%; vertical-align: top;">Menimbang :</td>
            <td style="width: 100%; text-align:justify; vertical-align: top;">
                <ol type="a" style="margin:0;">
                    <li style="margin-bottom:20px;">bahwa  Perjanjian Kerja Bersama {{$profile->nama_perusahaan}} telah diadakan  koreksi dan telah memenuhi syarat untuk mendapatkan Tanda Bukti Pendaftaran sebagaimana dimaksud dengan Undang-Undang Nomor 13 Tahun 2003 tentang Ketenagakerjaan;</li>
                    <li style="margin-bottom:20px;">bahwa berdasarkan pertimbangan sebagaimana dimaksud huruf a, perlu menetapkan Keputusan Kepala Dinas Koperasi Usaha Mikro dan Tenaga Kerja Kota Banjarbaru tentang Pendaftaran Perjanjian Kerja Bersama {{$profile->nama_perusahaan}};</li>
                </ol>
            </td>
        </tr>
        <tr style="margin: 0;">
            <td style="width: 15%; vertical-align: top;">Mengingat :</td>
            <td style="width: 100%; text-align:justify; vertical-align: top;">
                <ol style="margin:0;">
                    <li style="margin-bottom:20px;">Undang – Undang  Nomor  9  Tahun  1999  tentang  Pembentukan Kotamadya Daerah Tingkat II Banjarbaru (Lembaran Negara Republik Indonesia Tahun 1999 Nomor 43, Tambahan Lembaran Negara Republik Indonesia Nomor 3822);</li>
                    <li style="margin-bottom:20px;">Undang-Undang Nomor 13 Tahun 2003 tentang Ketenagakerjaan (Lembaran Negara Republik Indonesia Tahun 2003 Nomor 39, Tambahan Lembaran Negara Republik Indonesia Nomor 4279) sebagaimana telah diubah beberapa kali terakhir dengan Undang-Undang Nomor 6 Tahun 2023 tentang Penetapan Peraturan Pemerintah Pengganti Undang-Undang Nomor 2 Tahun 2022 tentang Cipta Kerja Menjadi Undang-Undang (Lembaran Negara Republik Indonesia Tahun 2022 Nomor 238,Tambahan Lembaran Negara Republik Indonesia Nomor 6841);</li>
                    <li style="margin-bottom:20px;">Undang-Undang Nomor 12 Tahun 2011 tentang Pembentukan Peraturan PerUndang-Undangan (Lembaran Negara Republik Indonesia Tahun 2011 Nomor 82, Tambahan Lembaran Negara Republik Indonesia Nomor 5234) sebagaimana telah diubah beberapa kali terakhir dengan Undang-Undang Nomor 13 Tahun 2022 tentang Perubahan Kedua Atas Undang-Undang Nomor 12 Tahun 2011 tentang Pembentukan Peraturan PerUndang-Undangan (Lembaran Negara Republik Indonesia Tahun 2022 Nomor 143,Tambahan Lembaran Negara Republik Indonesia Nomor 6801);</li>
                    <li style="margin-bottom:20px;">Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah (Lembaran Negara Republik Indonesia Tahun 2014 Nomor 244, Tambahan Lembaran Negara Republik Indonesia Nomor 5587) sebagaimana telah diubah beberapa kali terakhir dengan Undang-Undang Nomor 6 Tahun 2023 tentang Penetapan Peraturan Pemerintah Pengganti Undang-Undang Nomor 2 Tahun 2022 tentang Cipta Kerja Menjadi Undang-Undang (Lembaran Negara Republik Indonesia Tahun 2022 Nomor 238,Tambahan Lembaran Negara Republik Indonesia Nomor 6841);</li>
                </ol>
            </td>
        </tr>
        <tr style="margin: 0;">
            <td style="width: 15%; vertical-align: top;"></td>
            <td style="width: 100%; text-align:justify; vertical-align: top;">
                <ol start="5" style="margin:0;">
                    <li style="margin-bottom:20px;">Peraturan Menteri Ketenagakerjaan Republik Indonesia Nomor 28 Tahun 2014 tentang Tata Cara Pembuatan dan Pengesahan Peraturan Perusahaan serta Pembuatan dan Pendaftaran Perjanjian Kerja Bersama (Berita Negara Republik Indonesia Tahun 2014 Nomor 2099);</li>
                    <li style="margin-bottom:20px;">Peraturan Daerah Kota Banjarbaru Nomor 10 Tahun 2014 tentang Pemberdayaan Tenaga Kerja Daerah (Lembaran Daerah Kota Banjarbaru Tahun 2014 Nomor 10);</li>
                    <li style="margin-bottom:20px;">Peraturan Daerah Kota Banjarbaru Nomor 10 Tahun 2016 tentang Pembentukan dan Susunan Organisasi Perangkat Daerah Kota Banjarbaru (Lembaran Daerah Kota Banjarbaru Tahun 2016 Nomor 10, Tambahan Lembaran Daerah Kota Banjarbaru Nomor 37);</li>
                    <li style="margin-bottom:20px;">Peraturan Walikota Banjarbaru Nomor 72 Tahun 2023 tentang Kedudukan, Susunan Organisasi, Tugas Pokok dan Fungsi serta Tata Kerja Dinas Koperasi, Usaha Mikro dan Tenaga Kerja Kota Banjarbaru (Berita Daerah Kota Banjarbaru Tahun 2023 Nomor 72);</li>
                </ol>
            </td>
        </tr>
        <tr>
            <td style="width: 20%; vertical-align: top;">Memperhatikan :</td>
            <td style="width: 30%; text-align:justify; vertical-align: top;">
                Surat  Permohonan dari Pimpinan Perusahaan {{$profile->nama_perusahaan}} Perihal Pendaftaran Perjanjian Kerja Bersama.
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
            <td style="width: 30%; text-align:justify; vertical-align: top;">
                Keputusan Kepala Dinas Koperasi, Usaha Mikro dan Tenaga Kerja Kota Banjarbaru tentang Pendaftaran Perjanjian Kerja Bersama {{$profile->nama_perusahaan}}
            </td>
        </tr>
        <tr>
            <td style="width: 20%; vertical-align: top;">KEDUA :</td>
            <td style="width: 30%; text-align:justify; vertical-align: top;">
                Menerima Pendaftaran Perjanjian Kerja Bersama dari :
                <table>
                    <tr>
                        <td>Nama Perusahaan</td>
                        <td> : {{$profile->nama_perusahaan}}</td>
                    </tr>
                    <tr>
                        <td>Alamat Perusahaan</td>
                        <td> : {{$profile->alamat}}</td>
                    </tr>
                    <tr>
                        <td>Jenis Usaha/Bidang Usaha </td>
                        <td> : {{$profile->sektor}}</td>
                    </tr>
                    <tr>
                        <td>Nomor Pengesahan  </td>
                        <td> : 500.15.12.1/{{$nomor}}/DISKOP,UM & NAKER/2024 </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="width: 20%; vertical-align: top;">KETIGA :</td>
            <td style="width: 30%; text-align:justify; vertical-align: top;">
                Peraturan Perusahaan sebagaimana dimaksud diktum KEDUA berlaku selama 2 (dua) tahun
            </td>
        </tr>
        <tr>
            <td style="width: 20%; vertical-align: top;">KEEMPAT :</td>
            <td style="width: 30%; text-align:justify; vertical-align: top;">
                Pengusaha  wajib memberitahukan  dan  menjelaskan  isi serta memberikan naskah Peraturan Perusahaan atau perubahannya kepada Pekerja/Buruh di hadapan Pejabat Dinas Koperasi Usaha Mikro dan Tenaga Kerja Kota Banjarbaru.
            </td>
        </tr>
        <tr>
            <td style="width: 20%; vertical-align: top;">KELIMA :</td>
            <td style="width: 30%; text-align:justify; vertical-align: top;">
                Keputusan ini mulai berlaku pada tanggal ditetapkan.
            </td>
        </tr>
    </table>

    <p style="text-align:right; padding-top:40px;">Ditetapkan di Banjarbaru</p>
    <p style="text-align:right;">KEPALA DINAS</p>
    <p style="text-align:right; padding-top:100px; margin:0;">(....................)</p>

</body>
</html>
