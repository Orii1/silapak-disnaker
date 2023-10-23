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

    <div class="mt-4">
        @foreach ($pp as $item)
            <a href="/permohonan-pengesahan-pp/{{$item->id}}">
                <div class="card" style="height: 60px; display: flex; align-items: center;">
                    <div class="mt-2 text-center">
                        {{$item->pp_user->name}} <br>
                        Selengkapnya
                    </div>
                </div>
            </a>
        @endforeach
    </div>

@endsection
