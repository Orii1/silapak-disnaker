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

<div class="mt-4">
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
</div>

@endsection
