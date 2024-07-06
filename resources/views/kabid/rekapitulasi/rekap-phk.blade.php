@extends('layout.kabid')

@section('content')
<div class="pagetitle">
    <h1>Rekapitulasi Permohonan Pelaporan Pemutusan Hubungan Kerja</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/kabid/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Rekapitulasi Permohonan Pelaporan Pemutusan Hubungan Kerja</li>
      </ol>
    </nav>
</div>

<div class="card mb-3">
    <div class="mx-2">
        <div class="row">
            <div class="mt-2">
                <div class="row">
                    <div class="col-9">
                        <form id="filterForm">
                            <div class="form-group mb-2 mr-3">
                                <div class="row">
                                    <div class="col-5">
                                        <select name="status" id="month" class="form-control">
                                            <option value="">Semua Bulan</option>
                                            @foreach (range(1, 12) as $month)
                                                <option value="{{ $month }}">{{ \Carbon\Carbon::create()->month($month)->locale('id')->isoFormat('MMMM') }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="text-end col-3">
                        <button type="button" class="btn btn-danger mb-2" id="generatePDF">
                            <i class="bi bi-printer"></i> Cetak PDF
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card">
    <div class="mx-2 mx-2">
        <table class="table text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Perusahaan</th>
                    <th>Peruntukkan</th>
                    <th>Tanggal Diajukan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                @foreach ($rekap_phk as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->phk_perusahaan->nama_perusahaan}}</td>
                        <td>{{$item->peruntukan}}</td>
                        <td>{{$item->updated_at->locale('id')->isoFormat('D MMMM Y')}}</td>
                        <td>
                            @if ($item->phk_status->id_status == '1')
                                <span class="badge bg-info">Menunggu Konfirmasi</span>
                            @elseif ($item->phk_status->id_status == '2')
                                <span class="badge bg-warning">Diproses</span>
                            @elseif ($item->phk_status->id_status == '3')
                                <span class="badge bg-success">Diterima</span>
                            @elseif ($item->phk_status->id_status == '4')
                                <span class="badge bg-danger">Dikembalikan</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#filterForm').on('submit', function(e) {
            e.preventDefault();

            var month = $('#month').val();

            $.ajax({
                url: '{{ route('filter.by.month_phk') }}',
                type: 'GET',
                data: {
                    month: month
                },
                success: function(response) {
                    $('#tableBody').html(response);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });

        $('#generatePDF').on('click', function() {
            var month = $('#month').val();
            window.location.href = '{{ route('generate.pdf_phk') }}?month=' + month;
        });
    });
</script>
@endsection
