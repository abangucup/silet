@extends('layouts.admin')

@section('title', 'Halaman Permintaan')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
@endsection

@section('header', 'Data Permintaan')

@section('content')
<table id="permintaanTable" class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Judul Permintaan</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($permintaan as $k => $v)
        <tr>
            <td>{{ $k += 1 }}</td>
            <td>{{ $v->tgl_permintaan->format('d-M-Y') }}</td>
            <td>{{ $v->judul_permintaan }}</td>
            <td>{{ $v->alamat }}</td>
            <td>
                @if ($v->status =='0')
                    <a href="#" class="badge badge-danger">Pending</a>
                @elseif ($v->status == 'proses')
                    <a href="#" class="badge badge-warning text-white">Proses</a>
                @else
                    <a href="#" class="badge badge-success">Selesai</a>
                @endif
            </td>
            <td><a href="{{ route('permintaan.show', $v->permintaan_id) }}" style="text-decoration: underline">Lihat</a></td>
        </tr>

        @endforeach

    </tbody>
</table>
    
@endsection

@section('js')

<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#permintaanTable').DataTable();
    });
</script>
@endsection