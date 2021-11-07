@extends('layouts.admin')

@section('title', 'Halaman Dashboard')

@section('css')
<style>
    .bg {
        background-color: #3282B8;
    }

    table {
        width: 100%;
    }

    th {
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }
</style>
@endsection

@section('header', 'Dashboard')

@section('content')

<div class="row">
    <div class="col-md-2 mt-2">
        <div class="card">
            <a href="{{ route('petugas.index') }}">
                <div class="card-header text-white bg">Petugas</div>
                <div class="card-body" style="min-height: 110px;">
                    <div class="text-center mt-4">
                        {{ $petugas }}
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-2 mt-2">
        <div class="card"><a href="{{ route('masyarakat.index') }}">
                <div class="card-header text-white bg">Masyarakat</div>
                <div class="card-body" style="min-height: 110px;">
                    <div class="text-center mt-4">
                        {{ $masyarakat }}
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 mt-2">
        <div class="card">
            <a href="{{ route('pengaduan.index') }}">
                <div class="card-header text-white bg">Pengaduan</div>
                <div class="card-body text-center" style="min-height: 110px;">
                    <table>
                        <thead>
                            <tr>
                                <th>Pengaduan Proses</th>
                                <th>Pengaduan Selesai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $aduanProses }}</td>
                                <td>{{ $aduanSelesai }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 mt-2">
        <div class="card"><a href="{{ route('permintaan.index') }}">
                <div class="card-header text-white bg">Permintaan</div>
                <div class="card-body text-center" style="min-height: 110px;">
                    <table>
                        <thead>
                            <tr>
                                <th>Permintaan Proses</th>
                                <th>Permintaan Selesai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $requestProses }}</td>
                                <td>{{ $requestSelesai }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection