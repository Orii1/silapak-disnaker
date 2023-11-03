@extends('layout.header2')

@section('content')
<div class="pagetitle-company">
    <h1>Informasi Permohonan Anda</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Cek Permohonan Anda</li>
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

<div class="mt-4 mx-5">
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
</div>

@endsection
