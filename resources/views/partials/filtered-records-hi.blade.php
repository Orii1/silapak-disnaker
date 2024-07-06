@foreach ($filteredRecords as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->hi_perusahaan->nama_perusahaan }}</td>
        <td>{{ $item->peruntukan }}</td>
        <td>{{ $item->updated_at->locale('id')->isoFormat('D MMMM Y') }}</td>
        <td>
            @if ($item->hi_status->id_status == '1')
                <span class="badge bg-info">Menunggu Konfirmasi</span>
            @elseif ($item->hi_status->id_status == '2')
                <span class="badge bg-warning">Diproses</span>
            @elseif ($item->hi_status->id_status == '3')
                <span class="badge bg-success">Diterima</span>
            @elseif ($item->hi_status->id_status == '4')
                <span class="badge bg-danger">Dikembalikan</span>
            @endif
        </td>
    </tr>
@endforeach
