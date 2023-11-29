@extends('layout.admin')

@section('content')
<div class="pagetitle">
    <h1>Permohonan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Permohonan Pencatatan Penyelesaian Perselisihan Hubungan Internal</li>
        </ol>
    </nav>
</div>

<div class="mx-0">
    <div class="card">
        <div class="card-body">
            <ul class="mt-1 nav nav-tabs nav-tabs-bordered">

                  <li class="nav-item">
                    <div class="mx-5">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#konfirmasi">Menunggu Konfirmasi</button>
                    </div>
                  </li>

                  <li class="nav-item">
                    <div class="mx-5">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#diproses">Diproses</button>
                    </div>
                  </li>

                  <li class="nav-item">
                    <div class="mx-5">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#diterima">Diterima</button>
                    </div>
                  </li>

                  <li class="nav-item">
                    <div class="mx-5">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#dikembalikan">Dikembalikan</button>
                    </div>
                  </li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active profile-overview" id="konfirmasi">
                    <div class="mt-4 mb-5">
                        @foreach ($hi_konfir as $item)
                            <a href="#">
                                <div class="card" style="height: 60px; display: flex; align-items: center;">
                                    <div class="mt-3 text-center">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item active" style="font-size: 20px;">
                                            <b>{{$item->hi_user->name}}</b>
                                            </li>
                                            <li class="breadcrumb-item" style="font-size: 19px;">
                                                Selengkapnya
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="tab-pane fade pt-3" id="diproses">
                    <div class="text-center">
                        <div class="mb-4">
                            @foreach ($hi_proses as $item)
                                <a href="#">
                                    <div class="card" style="height: 60px; display: flex; align-items: center;">
                                        <div class="mt-3 text-center">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item active" style="font-size: 20px;">
                                                <b>{{$item->hi_user->name}}</b>
                                                </li>
                                                <li class="breadcrumb-item" style="font-size: 19px;">
                                                    Selengkapnya
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade pt-3" id="diterima">
                    <div class="text-center">
                        <div class="mb-4">
                            @foreach ($hi_terima as $item)
                                <a href="#">
                                    <div class="card" style="height: 60px; display: flex; align-items: center;">
                                        <div class="mt-3 text-center">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item active" style="font-size: 20px;">
                                                <b>{{$item->spsb_user->name}}</b>
                                                </li>
                                                <li class="breadcrumb-item" style="font-size: 19px;">
                                                    Selengkapnya
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade pt-3" id="dikembalikan">
                    <div class="text-center">
                        <div class="mb-4">
                            @foreach ($hi_tolak as $item)
                                <a href="#">
                                    <div class="card" style="height: 60px; display: flex; align-items: center;">
                                        <div class="mt-3 text-center">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item active" style="font-size: 20px;">
                                                <b>{{$item->hi_user->name}}</b>
                                                </li>
                                                <li class="breadcrumb-item" style="font-size: 19px;">
                                                    Selengkapnya
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- <div class="mt-4">
    @foreach ($hi as $item)
        <a href="/permohonan-penyelesaian-hi/{{$item->id}}">
            <div class="card" style="height: 60px; display: flex; align-items: center;">
                <div class="mt-3 text-center justify-text-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" style="font-size: 20px;">
                           <b>{{$item->hi_user->name}}</b>
                        </li>
                        <li class="breadcrumb-item" style="font-size: 19px;">
                            Selengkapnya
                        </li>
                    </ol>
                </div>
            </div>
        </a>
    @endforeach
</div> --}}

@endsection
