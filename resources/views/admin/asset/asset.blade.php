@extends('layout.admin')

@section('content')
<div class="pagetitle">
    <h1>Asset</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Manajemen Asset</li>
      </ol>
    </nav>
</div>

<div class="card">
    <div class="card-body">
        <ul class="mt-1 mb-2 nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
                <div class="mx-4">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#pp">PP</button>
                </div>
            </li>

            <li class="nav-item">
                <div class="mx-4">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pkb">PKB</button>
                </div>
            </li>

            <li class="nav-item">
                <div class="mx-4">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pkwt">PKWT</button>
                </div>
            </li>

            <li class="nav-item">
                <div class="mx-4">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#spsb">SPSB</button>
                </div>
            </li>

            <li class="nav-item">
                <div class="mx-4">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#lks">LKS</button>
                </div>
            </li>

            <li class="nav-item">
                <div class="mx-4">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#hi">HI</button>
                </div>
            </li>

            <li class="nav-item">
                <div class="mx-4">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#phk">PHK</button>
                </div>
            </li>

        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active profile-overview" id="pp">
                
            </div>
        </div>
    </div>
</div>



@endsection
