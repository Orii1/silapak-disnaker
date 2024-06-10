@extends('layout.kabid')

@section('title')


@section('content')
    <div class="container">
        <h1>Data Permohonan</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Perusahaan</th>
                    <th>Jenis Permohonan</th>
                    <th>Peruntukkan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nama Perusahaan 1</td>
                    <td>Jenis Permohonan 1</td>
                    <td>Peruntukkan 1</td>
                    <td><span class="badge bg-success">Diterima</span></td>
                    <td>
                        <a href="#" >
                            <i class="fas fa-info-circle"></i> Informasi
                        </a>
                    </td>
                                      
                </tr>
                <!-- Tambahkan baris lainnya sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
@endsection 