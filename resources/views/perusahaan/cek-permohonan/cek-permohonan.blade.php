@extends('layout.header2')

@section('content')
<div class="pagetitle-company">
    <h1>Informasi Permohonan Anda</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/perusahaan/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Cek Permohonan Anda</li>
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
                                Permohonan Perusahaan Anda
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="mt-4 mx-5">
    @foreach ($pp_submission as $item)
        <a href="/permohonan-pengesahan-pp/{{$item->id}}">
            <div class="card" style="height: 60px; display: flex; align-items: center;">
                <div class="mt-3 text-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" style="font-size: 20px;">
                           <b>{{$item->pp_user->name}}</b>
                        </li>
                        <li class="breadcrumb-item" style="font-size: 19px;">
                            {{$item->status}}
                        </li>
                    </ol>
                </div>
            </div>
        </a>
    @endforeach
</div> --}}

@endsection
