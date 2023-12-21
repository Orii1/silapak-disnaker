@extends('layout.admin')

@section('title')

@section('content')
    <div class="pagetitle">
        <h1>Permohonan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Permohonan Pengesahan Peraturan Perusahaan</li>
            </ol>
        </nav>
    </div>

    <div class="mx-0">
        <div class="card mb-0">
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
            </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane fade show active profile-overview" id="konfirmasi">
                <div class="mt-4 mb-5">
                    @foreach ($pp_konfir as $item)
                        <a href="/konfirmasi/permohonan-pengesahan-pp/{{$item->id}}">
                            <div class="cardd radius-5 border-start border-0 border-3 border-menunggu" style="height: 100px; display: flex;">
                                <div class="ms-3 my-2">
                                    <div class="row text-start">
                                        <div style="font-size: 21px; color: black;">
                                            <b>{{$item->pp_user->name}}</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="disabled-text">
                                            Peruntukan : {{$item->peruntukan}} / {{$item->keterangan}}
                                        </div>
                                    </div>
                                    <div class="row text-start">
                                        <div class="disabled-text">
                                            Diajukan pada tanggal : {{$item->updated_at->isoFormat('D MMMM Y')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="tab-pane fade pt-3" id="diproses">
                <div class="text-center">
                    <div class="mb-4">
                        @foreach ($pp_proses as $item)
                            <a href="/permohonan-pengesahan-pp/{{$item->id}}">
                                <div class="cardd radius-5 border-start border-0 border-3 border-diproses" style="height: 100px; display: flex;">
                                    <div class="ms-3 my-2">
                                        <div class="row text-start">
                                            <div style="font-size: 21px; color: black;">
                                                <b>{{$item->pp_user->name}}</b>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="disabled-text">
                                                Peruntukan : {{$item->peruntukan}} / {{$item->keterangan}}
                                            </div>
                                        </div>
                                        <div class="row text-start">
                                            <div class="disabled-text">
                                                Diajukan pada tanggal : {{$item->updated_at->isoFormat('D MMMM Y')}}
                                            </div>
                                        </div>
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
                        @foreach ($pp_terima as $item)
                            <a href="/permohonan-pengesahan-pp/{{$item->id}}">
                                <div class="cardd radius-5 border-start border-0 border-3 border-diterima" style="height: 100px; display: flex;">
                                    <div class="ms-3 my-2">
                                        <div class="row text-start">
                                            <div style="font-size: 21px; color: black;">
                                                <b>{{$item->pp_user->name}}</b>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="disabled-text">
                                                Peruntukan : {{$item->peruntukan}} / {{$item->keterangan}}
                                            </div>
                                        </div>
                                        <div class="row text-start">
                                            <div class="disabled-text">
                                                Diajukan pada tanggal : {{$item->updated_at->isoFormat('D MMMM Y')}}
                                            </div>
                                        </div>
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
                        @foreach ($pp_tolak as $item)
                            <a href="/permohonan-pengesahan-pp/{{$item->id}}">
                                <div class="cardd radius-5 border-start border-0 border-3 border-dikembalikan" style="height: 100px; display: flex;">
                                    <div class="ms-3 my-2">
                                        <div class="row text-start">
                                            <div style="font-size: 21px; color: black;">
                                                <b>{{$item->pp_user->name}}</b>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="disabled-text">
                                                Peruntukan : {{$item->peruntukan}} / {{$item->keterangan}}
                                            </div>
                                        </div>
                                        <div class="row text-start">
                                            <div class="disabled-text">
                                                Diajukan pada tanggal : {{$item->updated_at->isoFormat('D MMMM Y')}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
