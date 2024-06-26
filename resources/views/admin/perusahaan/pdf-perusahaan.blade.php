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
                    <h3>Data Perusahaan {{$data->user_perusahaan->nama_perusahaan}}</h3>
                </div>

                <table style="width:100%; border: 1px solid black;">

                    <tr>
                      <th>Nama Perusahaan</th>
                      <td>{{$data->user_perusahaan->nama_perusahaan}}</td>
                    </tr>
                    <tr>
                      <th>Alamat</th>
                      <td>{{$data->user_perusahaan->alamat}}</td>
                    </tr>
                    <tr>
                      <th>Nama Pemilik</th>
                      <td>{{$data->user_perusahaan->pemilik}}</td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td>{{$data->email}}</td>
                    </tr>
                    <tr>
                      <th>Jenis Usaha</th>
                      <td>{{$data->user_perusahaan->perusahaan_tipeperusahaan->nama_tipe}}</td>
                    </tr>
                    <tr>
                      <th>Modal</th>
                      <td>{{$data->user_perusahaan->perusahaan_modal->nama_modal}}</td>
                    </tr>
                    <tr>
                      <th>Sektor</th>
                      <td>{{$data->user_perusahaan->sektor}}</td>
                    </tr>
                    <tr>
                      <th>Status Perusahaan</th>
                      <td>{{$data->user_perusahaan->perusahaan_statusperusahaan->nama_status}}</td>
                    </tr>
                    <tr>
                      <th>Surat Keputusan Izin Usaha</th>
                      <td>No : {{$data->user_perusahaan->nomor_surat_izin_usaha}}<br>Tanggal : {{$data->user_perusahaan->tgl_surat_izin_usaha}}</td>
                    </tr>
                    <tr>
                      <th>Jumlah Tenaga Kerja</th>
                      <td>Laki-laki : {{$data->user_perusahaan->laki_laki}}<br>Wanita : {{$data->user_perusahaan->perempuan}}</td>
                    </tr>
                    <tr>
                      <th>Status Hubungan Kerja</th>
                      <td>PKWT : {{$data->user_perusahaan->pkwt}}<br>Outsourcing : {{$data->user_perusahaan->outsourcing}}<br>WNA : {{$data->user_perusahaan->wna}}</td>
                    </tr>
                    <tr>
                      <th>No Kepesertaan BPJS Ketenagakerjaan</th>
                      <td>{{$data->user_perusahaan->no_bpjs_ketenagakerjaan}}</td>
                    </tr>
                    <tr>
                      <th>No Kepesertaan BPJS Kesehatan</th>
                      <td>{{$data->user_perusahaan->no_bpjs_kesehatan}}</td>
                    </tr>
                    <tr>
                      <th>Titik Lokasi</th>
                      <td>Lat : {{$data->user_perusahaan->latitude}}<br>Lng : {{$data->user_perusahaan->longtitude}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
</body>

