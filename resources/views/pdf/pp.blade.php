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
    <div class="header">
        <table>
            <tr>
                <td class="logo">
                    <img src="{{ public_path('assets/img/banjarbaru.png') }}" alt="Banjarbaru Logo">
                </td>
                <td class="text">
                    <h1>PEMERINTAH KOTA BANJARBARU</h1>
                    <h2>DINAS KOPERASI DAN TENAGA KERJA KOTA BANJARBARU</h2>
                    <p>Jalan Soekarno Hatta, Trikora, Banjarbaru, Kalimantan Selatan</p>
                    <p>Telp: (0511) 6749523</p>
                    <p>E-mail Admin : <a href="">admin@diskopukmnaker.banjarbarukota.go.id</a> &nbsp; E-mail Dinas : <a
                            href="">hubunganindustrialbjb@gmail.com</a>
                    </p>
                </td>
            </tr>
        </table>
    </div>

    <div class="content">
        <div class="title">
            <p>SURAT KEPUTUSAN</p>
            <p>KEPALA DINAS TENAGA KERJA KOTA BATAM</p>
            <p>NOMOR : </p>
            <p>TENTANG PENGESAHAN PERATURAN PERUSAHAAN</p>
            <p>{{$profile->nama_perusahaan}}</p>
        </div>

        <table style="margin-bottom: 150px;">
            <tr>
                <td style="width: 20%; vertical-align: top; padding-top: 10px;">Menimbang :</td>
                <td style="width: 80%;">
                    <ol>
                        <li>bahwa untuk menjamin adanya kepastian hak dan kewajiban pekerja dan pengusaha dalam pelaksanaan hubungan kerja selain yang telah dibentuk oleh peraturan perundang-undangan, maka perusahaan perlu membuat Peraturan Perusahaan.</li>
                        <li>bahwa Peraturan perusahaan wajib diajukan oleh perusahaan ke Dinas Tenaga Kerja untuk diteliti dan disahkan oleh Dinas Tenaga Kerja sebagaimana dimaksud Keputusan Menteri Tenaga Kerja dan Transmigrasi Nomor: Kep. 48/MEN/IV/2004.</li>
                        <li>bahwa Peraturan perusahaan dari {{$profile->nama_perusahaan}}, setelah diadakan penelitian dapat memenuhi syarat untuk disahkan sebagaimana dimaksud dengan Keputusan Menteri Tenaga Kerja dan Transmigrasi Nomor: Kep. 48/MEN/IV/2004 untuk itu perlu ditetapkan surat keputusan pengesahan.</li>
                    </ol>
                </td>
            </tr>

            <tr>
                <td style="width: 20%; vertical-align: top; padding-top: 10px;">Mengingat :</td>
                <td style="width: 80%;">
                    <ol>
                        <li>Keputusan Menteri Tenaga Kerja dan Transmigrasi Nomor: Kep. 48/MEN/IV/2004 tentang Peraturan Perusahaan dan Perundingan Pembuatan Perjanjian Perburuhan.</li>
                        <li>Peraturan Menteri Tenaga Kerja dan Transmigrasi Nomor: Per. 08/MEN/III/2006 Tentang Perubahan Keputusan Mentari Tenaga Kerja dan Transmigrasi Nomor Kep 48/MEN/IV/2001 tentang Tata cara Pembuatan dan Pengesahan Feraturan Ferusahaan serta Pembuatan dan Pendaftaran Perjanjian Kerja Bersama.</li>
                        <li>Perda No. 12 Tahun 2007 tentang Pembentukan Susunan Organisasi dan Tata Kerja Dinas Daerah Kota Banjarbaru tanggal 14 November 2024 Lembaran Daerah Nomor 12 Tahun 2024.</li>
                        <li>Surat permohonan Pengesah Peraturan Perusahaan dari Pimpinan Perusahaan {{$profile->nama_perusahaan}}</li>
                      </ol>
                </td>
            </tr>
        </table>

        <p style="text-align: center; font-size: 14px;">MEMUTUSKAN</p>


        <table>
            <tr>
                <td style="width: 20%; vertical-align: top;">Pertama :</td>
                <td style="width: 80%;">
                    Mengesahkan Peraturan Perusahaan dari <br>
                    <p style="margin-bottom: 0px;">Nama Perusahaan : {{$profile->nama_perusahaan}}</p>
                    <p style="margin-bottom: 0px;">Alamat : {{$profile->alamat}}</p>
                    <p style="margin-bottom: 0px;">Jenis Usaha : {{$profile->sektor}}</p>
                    <p>Peruraturan Perusahaan tersebut diatas berlaku <b>2 (dua) Tahun</b></p>
                </td>
            </tr>

            <tr>
                <td style="width: 20%; vertical-align: top;">Kedua :</td>
                <td style="width: 80%; text-align:justify">
                    Pengusaha Wajib memberikan naskah Peraturan Perusahaan ini kepada setiap pekerja atau sekurang-kurangnya menempelkan ditempat yang mudah terbaca oleh pekerja.
                </td>
            </tr>

            <tr>
                <td style="width: 20%; vertical-align: top">Ketiga :</td>
                <td style="width: 80%; text-align:justify">
                    Disamping ketentuan-ketentuan yang tercantum dalam Peraturan Perusahaan ini/pengusaha dan pekerja wajib menaati ketentuan-ketentuan peraturan perundang-undangan Ketenagakerjaan yang berlaku.
                </td>
            </tr>

            <tr>
                <td style="width: 20%; vertical-align: top">Keempat :</td>
                <td style="width: 80%; text-align:justify">
                    Keputusan ini berlaku sejak tanggal ditetapkan dengan ketentuan bilamana dikemudian hari ternyata terdapat kesalahan/kekeliruan dalam surat keputusan ini akan diadakan perbaikan sebagaimana semestinya.
                </td>
            </tr>
        </table>

        <table class="signature-table">
            <tr>
                <td>
                    <p>Mengesahkan,<br> Kepala Dinas <br>Dinas Koperasi dan Tenaga Kerja<br>Kota Banjarbaru</p>
                    <div style="margin-top: 100px;"></div>
                    <p>SARTONO <br>NIP. 123456789</p>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
