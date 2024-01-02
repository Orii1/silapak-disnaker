<title>Data Perusahaan {{$data->name}}</title>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    text-align: left;
}
</style>
<body>
    <section class="section profile">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h3>Data Perusahaan {{$data->name}}</h3>
                </div>

                <table style="width:100%; border: 1px solid black;">

                    <tr>
                      <th>Nama Perusahaan</th>
                      <td>{{$data->name}}</td>
                    </tr>
                    <tr>
                      <th>Alamat</th>
                      <td>{{$data->address}}</td>
                    </tr>
                    <tr>
                      <th>Nama Pemilik</th>
                      <td>{{$data->owner}}</td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td>{{$data->email}}</td>
                    </tr>
                    <tr>
                      <th>Jenis Usaha</th>
                      <td>{{$data->type}}</td>
                    </tr>
                    <tr>
                      <th>Modal</th>
                      <td>{{$data->modal}}</td>
                    </tr>
                    <tr>
                      <th>Sektor</th>
                      <td>{{$data->sector}}</td>
                    </tr>
                    <tr>
                      <th>Status Perusahaan</th>
                      <td>{{$data->status}}</td>
                    </tr>
                    <tr>
                      <th>Surat Keputusan Izin Usaha</th>
                      <td>No : {{$data->number_letter}}<br>Tanggal : {{$data->date_latter}}</td>
                    </tr>
                    <tr>
                      <th>Jumlah Tenaga Kerja</th>
                      <td>Laki-laki : {{$data->men}}<br>Wanita : {{$data->woman}}</td>
                    </tr>
                    <tr>
                      <th>Status Hubungan Kerja</th>
                      <td>PKWT : {{$data->pkwt}}<br>Outsourcing : {{$data->outsourcing}}<br>WNA : {{$data->wna}}</td>
                    </tr>
                    <tr>
                      <th>No Kepesertaan BPJS Ketenagakerjaan</th>
                      <td>{{$data->number_ketenagakerjaan}}</td>
                    </tr>
                    <tr>
                      <th>No Kepesertaan BPJS Kesehatan</th>
                      <td>{{$data->number_kesehatan}}</td>
                    </tr>
                    <tr>
                      <th>Titik Lokasi</th>
                      <td>Lat : {{$lat}}<br>Lng : {{$lng}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
</body>

