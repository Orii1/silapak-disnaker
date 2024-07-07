@extends('layout.admin')

@section('content')
<div class="pagetitle">
    <h1>Manajemen User</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Edit Data Pegawai</li>
        </ol>
    </nav>
</div>

<div class="card">
    <div class="pagetitle">
        <div class="text-center mt-3">
            <h1>Edit Data Pegawai</h1>
        </div>
    </div>
    <div class="col-12">
        <div class="mx-3 my-3">
            <form action="/admin/pegawai/update/{{$data->id}}" method="POST">
                @csrf
                @method('PUT')
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <input type="hidden" value="Mediator HI" name="jabatan">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input value="{{$data->email}}" name="email" type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input name="password" type="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NIP</label>
                            <input value="{{$data->user_pegawai->nip}}" name="nip" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Nama Pegawai</label>
                            <input value="{{$data->user_pegawai->nama_pegawai}}" name="nama_pegawai" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis_Kelamin</label>
                            <select class="form-select" name="jenis_kelamin" required>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Agama</label>
                            <input value="{{$data->user_pegawai->agama}}" name="agama" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
