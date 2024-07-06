<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #000;
        }
        .header table {
            width: 100%;
            border: none;
        }
        .header .logo {
            width: 15%;
        }
        .header .logo img {
            width: 80px;
            height: auto;
        }

        .header .text h1,
        .header .text h2,
        .header .text h3,
        .header .text p {
            margin: 0;
        }

        .header .text h1 {
            font-size: 14px;
            font-weight: bold;
        }

        .header .text h2 {
            font-size: 16px;
            font-weight: bold;
            margin-top: 5px;
        }

        .header .text h3 {
            font-size: 14px;
            font-weight: bold;
            margin-top: 5px;
        }

        .header .text p {
            font-size: 12px;
            margin-top: 2px;
        }
        .content table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .content th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        .content th {
            background-color: #f2f2f2;
        }
        .header table, .header table td {
            border: none;
        }
    </style>
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
                    <p>E-mail Admin : <a href="">admin@diskopukmnaker.banjarbarukota.go.id</a> &nbsp; E-mail Dinas : <a href="">hubunganindustrialbjb@gmail.com</a></p>
                </td>
            </tr>
        </table>
    </div>

    <div class="content">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Perusahaan</th>
                    <th>Peruntukkan</th>
                    <th>Tanggal Diajukan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($filteredRecords as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->pp_perusahaan->nama_perusahaan }}</td>
                        <td>{{ $item->peruntukan }}</td>
                        <td>{{ $item->updated_at->locale('id')->isoFormat('D MMMM Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
