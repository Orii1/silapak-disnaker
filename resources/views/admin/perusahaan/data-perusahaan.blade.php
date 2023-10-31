@extends('layout.admin')

@section('content')
<div class="pagetitle">
    <h1>Perusahaan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Data Perusahaan</li>
        </ol>
    </nav>
</div>

<div class="mt-4 table-responsive">
    <table class="table align-middle mb-0 bg-white">
        <thead>
            <tr>
                <th class="col-1">
                    <div class="text-center">
                        Nama Perusahaan
                    </div>
                </th>
                <th class="col-1">
                    <div class="text-center">
                        Pemilik
                    </div>
                </th>
                <th class="col-1">
                    <div class="text-center">
                        Alamat
                    </div>
                </th>
                <th class="col-2">
                    <div class="text-center">
                        Aksi
                    </div>
                </th>
            </tr>
        </thead>
        @foreach ($perusahaan as $item)
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img
                                src="../assets/img/company-icon.png"
                                alt=""
                                style="width: 55px; height: 55px"
                                class="rounded-circle"
                                />
                            <div class="ms-3">
                                <p class="fw-bold mb-0">{{$item->name}}</p>
                                <p class="text-muted mb-0">{{$item->email}}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            {{$item->owner}}
                        </div>
                    </td>
                    <td>
                        <div style="font-size: 13px;">
                            {{$item->address}}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <a title="Detail" href="detail-perusahaan/{{$item->id}}" class="btn btn-primary" id=""><i class="bi bi-info-circle-fill"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>

    {{-- MODAL --}}

    {{-- END MODAL --}}
</div>
@endsection
