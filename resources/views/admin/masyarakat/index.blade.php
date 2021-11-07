@extends('layouts.admin')

@section('title', 'Halaman Masyarakat')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
@endsection

@section('header', 'Data Masyarakat')

@section('content')
<table id="pengaduanTable" class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telp</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($masyarakat as $k => $v)
        <tr>
            <td>{{ $k += 1 }}</td>
            <td>{{ $v->nik }}</td>
            <td>{{ $v->nama }}</td>
            <td>{{ $v->email }}</td>
            <td>{{ $v->telp }}</td>
            <td><a href="{{ route('masyarakat.show', $v->nik) }}" style="text-decoration: underline">Lihat</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#pengaduanTable').DataTable();
    });
</script> 
@endsection