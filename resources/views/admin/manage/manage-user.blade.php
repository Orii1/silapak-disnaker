@extends('layout.admin')

@section('content')

<div class="pagetitle">
    <h1>Manajemen User</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Data User</li>
        </ol>
    </nav>
</div>

<div class="mb-2">
    <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tambahPeg"><i class="bi bi-person-fill-add"></i> Tambah</a>
</div>

<div class="card">
    <div class="mt-1 mx-3 table-responsive">
        <table class="table align-middle mb-3 bg-white">
            <thead>
                <tr>
                    <th>
                        <div class="text-center">
                            Nama Pegawai
                        </div>
                    </th>
                    <th>
                        <div class="text-center">
                            NIP
                        </div>
                    </th>
                    <th>
                        <div class="text-center">
                            Jabatan
                        </div>
                    </th>
                    <th>
                        <div class="text-center">
                            Jenis Kelamin
                        </div>
                    </th>
                    <th>
                        <div class="text-center">
                            Aksi
                        </div>
                    </th>
                </tr>
            </thead>
            @foreach ($user as $item)
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="ms-3">
                                    <p class="fw-bold mb-0">{{$item->user_pegawai->nama_pegawai}}</p>
                                    <p class="text-muted mb-0">{{$item->email}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            {{$item->user_pegawai->nip}}
                        </td>
                        <td>
                            <div class="text-center">
                                {{$item->user_pegawai->jabatan}}
                            </div>
                        </td>
                        <td>
                            <div class="text-center ms-0" style="font-size: 13px;">
                                {{$item->user_pegawai->jenis_kelamin}}
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <a title="Detail" href="/admin/edit-pegawai/{{$item->id}}" class="btn btn-primary"><i class="bi bi-info-square-fill"></i></a>
                                <button title="Hapus" data-user-id="{{$item->id}}" class="btn btn-danger delete-button"><i class="bi bi-trash-fill"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</div>

<div class="modal fade" id="tambahPeg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tambahPegLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="tambahPegLabel">Tambah Pegawai</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="/admin/pegawai/store" method="POST">
            @csrf
            <input type="hidden" value="Mediator HI" name="jabatan">
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input name="email" type="email" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input name="password" type="password" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input name="nip" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Pegawai</label>
                <input name="nama_pegawai" type="text" class="form-control">
            </div>
            <div class="mb-4">
                <label class="form-label">Jenis_Kelamin</label>
                <select class="form-select" name="jenis_kelamin" required>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Agama</label>
                <input name="agama" type="text" class="form-control">
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
      </div>
    </div>
</div>

<script>
    document.querySelectorAll('.delete-button').forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.getAttribute('data-user-id');

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Anda akan menghapus user ini!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Tidak, batalkan'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `/admin/delete-pegawai/${userId}`;
                }
            });
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection
