@extends('layout.header2')

@section('content')
<style>
    .error-message {
        display: none;
        color: white;
        background-color: #dc3545;
        padding: 2px;
        border-radius: 5px;
        margin-top: 5px;
        font-size: 14px;
    }
</style>
<div class="pagetitle-company">
    <h1>Edit Permohonan Anda</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/perusahaan/dashboard">Home</a></li>
            <li class="breadcrumb-item">Cek Permohonan</li>
            <li class="breadcrumb-item active">Edit Permohonan Anda</li>
        </ol>
    </nav>
</div>

<div class="mx-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">
                            <div class="ms-5 my-2">
                                <img src="../../assets/img/info-icon.jpg" width="50px;" alt="icon">
                            </div>
                        </div>
                        <div class="col-11">
                            <div class="card-title" style="padding-top: 20px; padding-bottom: 15px;">
                                Edit Permohonan Perusahaan Anda
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mx-4">
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="p-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <b>Pesan : </b>
                                </div>
                                <div class="col-md-9">
                                    {{$pendaftaranpkwt->pkwt_status->status_cek->pesan}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mx-4">
    <div class="card">
        <div class="card-body">
            <div class="p-4">
                <div class="table-responsivee">
                    <form id="file-upload-form" action="/edit-permohonan-pkwt/{{$pendaftaranpkwt->id_pkwt}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <table class="table align-middle mb-0 bg-white">
                            <thead class="bg-light">
                                <tr>
                                    <th>
                                        <div class="text-center">
                                            No
                                        </div>
                                    </th>
                                    <th>
                                        <div class="text-center">
                                            Persyaratan
                                        </div>
                                    </th>
                                    <th>
                                        <div class="text-center">
                                            File
                                        </div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="text-center">
                                                1
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <label for="">Surat permohonan pencacatan PKWT</label><br>
                                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png | Max : 2 MB)</i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pendaftaranpkwt->pkwt_perusahaan->id}}/pkwt/{{$pendaftaranpkwt->srt_permohonan_pencatatan_pkwt}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="srt_permohonan_pencatatan_pkwt" id="file1" required>
                                                    <div class="error-message" id="error-message-1">Tipe file tidak valid. Harap unggah file dengan format pdf, jpg, jpeg, atau png.</div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="text-center">
                                                2
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <label for="">Daftar nama pekerja / buruh yang di PKWT</label><br>
                                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png | Max : 2 MB)</i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pendaftaranpkwt->pkwt_perusahaan->id}}/pkwt/{{$pendaftaranpkwt->daftar_nama_pekerja_pkwt}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="daftar_nama_pekerja_pkwt" id="file2" required>
                                                    <div class="error-message" id="error-message-2">Tipe file tidak valid. Harap unggah file dengan format pdf, jpg, jpeg, atau png.</div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="text-center">
                                                3
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <label for="">Asli PKWT yang sudah ditandatangani oleh para pihak (pengusaha dan pekerja)</label><br>
                                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png | Max : 2 MB)</i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pendaftaranpkwt->pkwt_perusahaan->id}}/pkwt/{{$pendaftaranpkwt->pkwt_asli}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="pkwt_asli" id="file3" required>
                                                    <div class="error-message" id="error-message-3">Tipe file tidak valid. Harap unggah file dengan format pdf, jpg, jpeg, atau png.</div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="text-center">
                                                4
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <label for="">Fotocopy WLKP yang masih berlaku</label><br>
                                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png | Max : 2 MB)</i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pendaftaranpkwt->pkwt_perusahaan->id}}/pkwt/{{$pendaftaranpkwt->fc_wlkp}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="fc_wlkp" id="file4" required>
                                                    <div class="error-message" id="error-message-4">Tipe file tidak valid. Harap unggah file dengan format pdf, jpg, jpeg, atau png.</div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="text-center">
                                                5
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <label for="">Fotocopy akta pendirian Perusahaan</label><br>
                                                <label style="color: red;"><i>(tipe file .pdf/.jpg/.png | Max : 2 MB)</i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/storage/{{$pendaftaranpkwt->pkwt_perusahaan->id}}/pkwt/{{$pendaftaranpkwt->fc_akta_pendirian_perusahaan}}" target="_blank" class="btn btn-warning" style="color: rgb(255, 235, 20);">
                                                        <i class="bi bi-eye-fill" style="height:100px;color: white;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" name="fc_akta_pendirian_perusahaan" id="file5" required>
                                                    <div class="error-message" id="error-message-5">Tipe file tidak valid. Harap unggah file dengan format pdf, jpg, jpeg, atau png.</div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                        </table>

                        <div class="d-grid gap-2 col-2 mt-5 mx-auto">
                            <button class="btn btn-primary btn-block" id="btn" type="submit"><a style="color: #ffffff;"><b>Kirim Ulang</b></a></label></button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('file-upload-form').addEventListener('submit', function(event) {
        const validExtensions = ['pdf', 'jpg', 'jpeg', 'png'];
        const files = [
            { input: document.getElementById('file1'), error: document.getElementById('error-message-1') },
            { input: document.getElementById('file2'), error: document.getElementById('error-message-2') },
            { input: document.getElementById('file3'), error: document.getElementById('error-message-3') },
            { input: document.getElementById('file4'), error: document.getElementById('error-message-4') },
            { input: document.getElementById('file5'), error: document.getElementById('error-message-5') }
        ];

        let invalidFile = false;

        files.forEach(file => {
            if (file.input.files[0]) {
                const fileExtension = file.input.files[0].name.split('.').pop().toLowerCase();
                if (!validExtensions.includes(fileExtension)) {
                    file.error.style.display = 'block';
                    invalidFile = true;
                } else {
                    file.error.style.display = 'none';
                }
            }
        });

        if (invalidFile) {
            event.preventDefault();
        }
    });

    const fileInputs = [
        { input: document.getElementById('file1'), error: document.getElementById('error-message-1') },
        { input: document.getElementById('file2'), error: document.getElementById('error-message-2') },
        { input: document.getElementById('file3'), error: document.getElementById('error-message-3') },
        { input: document.getElementById('file4'), error: document.getElementById('error-message-4') },
        { input: document.getElementById('file5'), error: document.getElementById('error-message-5') }
    ];

    fileInputs.forEach(file => {
        file.input.addEventListener('change', function() {
            const validExtensions = ['pdf', 'jpg', 'jpeg', 'png'];
            const selectedFile = file.input.files[0];
            if (selectedFile) {
                const fileExtension = selectedFile.name.split('.').pop().toLowerCase();
                if (!validExtensions.includes(fileExtension)) {
                    file.error.style.display = 'block';
                    file.input.value = ''; // Mengosongkan input file jika tipe file tidak valid
                } else {
                    file.error.style.display = 'none';
                }
            }
        });
    });
</script>
@endsection
