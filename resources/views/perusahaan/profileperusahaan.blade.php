@extends('layout.header2')

@section('content')
<div class="pagetitle-company">
    <h1>Profile Perusahaan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Data Perusahaan</li>
        </ol>
    </nav>
</div>

<div class="mx-4">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 700px;">
            <div class="card-body">
                <img src="../../assets/img/company-icon.png" class="rounded mx-auto d-block" alt="" style="height: 130px;">
                <div class="text-center">
                    <div class="mb-3">
                        <b>{{$user->name}}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mx-4">
    <div class="card">
        <div class="card-body">
            <form action="/dashboard/profileperusahaan/{{$user->id}}" method="POST">
                @method("PUT")
                @csrf
                <input type="hidden" name="id" id="id" value="{{$user->id}}"/>
                <div class="p-0">
                        <div class="p-5">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-4">
                                        <label for="name"><b>Nama Perusahaan</b></label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Nama Perusahaan" value="{{$user->name}}" disabled>
                                    </div>
                                    <div class="mb-4">
                                        <label for="address"><b>Alamat Perusahaan</b></label>
                                        <input type="text" name="address" id="address" class="form-control" placeholder="Alamat Perusahaan" value="{{$user->address}}" disabled>
                                    </div>
                                    <div class="mb-4">
                                        <label for="owner"><b>Pemilik Perusahaan</b></label>
                                        <input type="text" name="owner" id="owner" class="form-control" placeholder="Pemilik Perusahaan" value="{{$user->owner}}" disabled>
                                    </div>
                                    <div class="mb-4">
                                        <label for="email"><b>Email</b></label>
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="{{$user->email}}" disabled>
                                    </div>
                                    <div class="mb-4">
                                        <label for="type"><b>Tipe Perusahaan (Sesuai NIB)</b></label>
                                        <select class="form-select" name="type" required>
                                            <option selected disabled>{{$user->type}}</option>
                                            <option value="Mikro">Mikro</option>
                                            <option value="Kecil">Kecil</option>
                                            <option value="Menengah">Menengah</option>
                                            <option value="Besar">Besar</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="sector"><b>Sektor/Nama KBLI (Sesuai NIB)</b></label>
                                        <input type="text" name="sector" id="sector" class="form-control" value="{{$user->sector}}" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="status"><b>Status Perusahaan</b></label>
                                        <select class="form-select" name="status" required>
                                            <option selected disabled>{{$user->status}}</option>
                                            <option value="Kantor Pusat">Kantor Pusat</option>
                                            <option value="Kantor Cabang">Kantor Cabang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-4">
                                        <label for="type"><b>Status Penanaman Modal</b></label>
                                        <select class="form-select" name="modal" required>
                                            <option selected disabled>{{$user->modal}}</option>
                                            <option value="Perorangan">Perorangan</option>
                                            <option value="Swasta Nasional">Swasta Nasional</option>
                                            <option value="BUMN">BUMN</option>
                                            <option value="BUMD">BUMD</option>
                                            <option value="PMA">PMA</option>
                                            <option value="PMDN">PMDN</option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label for=""><b>Surat Keputusan Izin Usaha (Nomor dan Tanggal Surat)</b></label>
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="text" name="number_letter" id="number_letter" class="form-control" placeholder="Nomor Surat" value="{{$user->number_letter}}" required>
                                            </div>
                                            <div class="col-6">
                                                <input type="date" name="date_latter" id="date_latter" class="form-control" placeholder="Tanggal Surat" value="{{$user->date_latter}}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for=""><b>Jumlah Tenaga Kerja</b></label>
                                        <div class="ms-2">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="text-center">
                                                                <div class="mt-2">
                                                                    Laki laki
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <input type="text" name="men" id="men" class="form-control" placeholder="Laki laki" value="{{$user->men}}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="text-center">
                                                                <div class="mt-2">
                                                                    Wanita
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <input type="text" name="woman" id="woman" class="form-control" placeholder="Perempuan" value="{{$user->woman}}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for=""><b>Status Hubungan Kerja</b></label>
                                         <div class="d-flex justify-content-center">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="text-center">
                                                                <div class="mt-2">
                                                                    PKWT
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <input type="text" name="pkwt" id="pkwt" class="form-control" placeholder="PKWT" value="{{$user->pkwt}}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <div class="text-center">
                                                                <div class="mt-2">
                                                                    Outsourcing
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <input type="text" name="outsourcing" id="outsourcing" class="form-control" placeholder="Outsourcing" value="{{$user->outsourcing}}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="text-center">
                                                                <div class="mt-2">
                                                                    WNA
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <input type="text" name="wna" id="wna" class="form-control" placeholder="WNA" value="{{$user->wna}}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for=""><b>Nomor Kepesertaan BPJS Ketenagakerjaan</b></label>
                                        <input type="text" name="number_ketenagakerjaan" id="number_ketenagakerjaan" class="form-control"  value="{{$user->number_ketenagakerjaan}}" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for=""><b>Nomor Kepesertaan BPJS Kesehatan</b></label>
                                        <input type="text" name="number_kesehatan" id="number_kesehatan" class="form-control"  value="{{$user->number_kesehatan}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="mt-5">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit"><b style="color: #ffffff;">Simpan</b></button>
                                </div>
                            </div>
                        </div>
                </div>
            </form>
        </div>
    </div>
</div>

    {{-- <section class="box-profile">
        <form action="/dashboard/profileperusahaan/{{$user->id}}" method="POST">
            @method("PUT")
            @csrf
            <input type="hidden" name="id" id="id" value="{{$user->id}}"/>
            <div class="p-5">
                <div class="card" style="border-radius: 1rem;">
                    <div class="p-5">
                        <div class="mb-4">
                            <label for="name"><b>Nama Perusahaan</b></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nama Perusahaan" value="{{$user->name}}" disabled>
                        </div>
                        <div class="mb-4">
                            <label for="address"><b>Alamat Perusahaan</b></label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Alamat Perusahaan" value="{{$user->address}}" disabled>
                        </div>
                        <div class="mb-4">
                            <label for="owner"><b>Pemilik Perusahaan</b></label>
                            <input type="text" name="owner" id="owner" class="form-control" placeholder="Pemilik Perusahaan" value="{{$user->owner}}" disabled>
                        </div>
                        <div class="mb-4">
                            <label for="email"><b>Email</b></label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="{{$user->email}}" disabled>
                        </div>
                        <div class="mb-4">
                            <label for="type"><b>Tipe Perusahaan (Sesuai NIB)</b></label>
                            <select class="form-select" name="type" required>
                                <option selected disabled>{{$user->type}}</option>
                                <option value="Mikro">Mikro</option>
                                <option value="Kecil">Kecil</option>
                                <option value="Menengah">Menengah</option>
                                <option value="Besar">Besar</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="sector"><b>Sektor/Nama KBLI (Sesuai NIB)</b></label>
                            <input type="text" name="sector" id="sector" class="form-control" value="{{$user->sector}}" required>
                        </div>
                        <div class="mb-4">
                            <label for="status"><b>Status Perusahaan</b></label>
                            <select class="form-select" name="status" required>
                                <option selected disabled>{{$user->status}}</option>
                                <option value="Kantor Pusat">Kantor Pusat</option>
                                <option value="Kantor Cabang">Kantor Cabang</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="type"><b>Status Penanaman Modal</b></label>
                            <select class="form-select" name="modal" required>
                                <option selected disabled>{{$user->modal}}</option>
                                <option value="Perorangan">Perorangan</option>
                                <option value="Swasta Nasional">Swasta Nasional</option>
                                <option value="BUMN">BUMN</option>
                                <option value="BUMD">BUMD</option>
                                <option value="PMA">PMA</option>
                                <option value="PMDN">PMDN</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for=""><b>Surat Keputusan Izin Usaha (Nomor dan Tanggal Surat)</b></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="number_letter" id="number_letter" class="form-control" placeholder="Nomor Surat" value="{{$user->number_letter}}" required>
                                </div>
                                <div class="col-6">
                                    <input type="date" name="date_latter" id="date_latter" class="form-control" placeholder="Tanggal Surat" value="{{$user->date_latter}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for=""><b>Jumlah Tenaga Kerja</b></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="men" id="men" class="form-control" placeholder="Laki laki" value="{{$user->men}}" required>
                                </div>
                                <div class="col-6">
                                    <input type="text" name="woman" id="woman" class="form-control" placeholder="Perempuan" value="{{$user->woman}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for=""><b>Status Hubungan Kerja</b></label>
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" name="pkwt" id="pkwt" class="form-control" placeholder="PKWT" value="{{$user->pkwt}}" required>
                                </div>
                                <div class="col-4">
                                    <input type="text" name="outsourcing" id="outsourcing" class="form-control" placeholder="Outsourcing" value="{{$user->outsourcing}}" required>
                                </div>
                                <div class="col-4">
                                    <input type="text" name="wna" id="wna" class="form-control" placeholder="WNA" value="{{$user->wna}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for=""><b>Nomor Kepesertaan BPJS Ketenagakerjaan</b></label>
                            <input type="text" name="number_ketenagakerjaan" id="number_ketenagakerjaan" class="form-control"  value="{{$user->number_ketenagakerjaan}}" required>
                        </div>
                        <div class="mb-4">
                            <label for=""><b>Nomor Kepesertaan BPJS Kesehatan</b></label>
                            <input type="text" name="number_kesehatan" id="number_kesehatan" class="form-control"  value="{{$user->number_kesehatan}}" required>
                        </div>

                        <div class="mt-5">
                            <button class="btn btn-warning btn-lg btn-block" type="submit"><i class="fa-solid fa-floppy-disk"></i><b style="color: #ffffff;">Simpan</b></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section> --}}
@endsection
