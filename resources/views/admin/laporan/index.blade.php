@extends('layouts.admin')

@section('title', 'Halaman Laporan')

@section('content')

<div id="accordion">

    {{-- button pilih laporan --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-custom mb-3" data-toggle="collapse" data-target="#Pengaduan">
                    Pengaduan Layanan Internet
                </button>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-custom mb-3" data-toggle="collapse" data-target="#Permintaan">
                    Permintaan Layanan Internet
                </button>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-custom mb-3" data-toggle="collapse" data-target="#Masyarakat">
                    Data Masyarakat
                </button>
            </div>
        </div>

        <div class="collapse" id="Pengaduan" data-parent="#accordion">
            <div class="card">
                <div class="card-header">
                    Laporan Data Pengaduan
                    <div class="float-right">
                        @if ($pengaduan ?? '')
                        <a href="{{ route('laporan.cetakPengaduan') }}" class="btn btn-danger">EXPORT PDF</a>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    @if ($pengaduan ?? '')
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Judul Pengaduan</th>
                                <th>Isi Pengaduan</th>
                                <th>Alamat</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengaduan as $k => $v)
                            <tr>
                                <td>{{ $k += 1 }}</td>
                                <td>{{ $v->tgl_pengaduan->format('d-M-Y') }}</td>
                                <td>{{ $v->judul_pengaduan }}</td>
                                <td>{{ $v->isi_pengaduan }}</td>
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
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                    @else
                    <div class="text-center">
                        Tidak ada data
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="collapse" id="Permintaan" data-parent="#accordion">
            <div class="card">
                <div class="card-header">
                    Laporan Data Permintaan
                    <div class="float-right">
                        @if ($permintaan ?? '')
                        <a href="{{ route('laporan.cetakPermintaan') }}" class="btn btn-danger">EXPORT PDF</a>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    @if ($permintaan ?? '')
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Judul Permintaan</th>
                                <th>Isi Permintaan</th>
                                <th>Alamat</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permintaan as $k => $v)
                            <tr>
                                <td>{{ $k += 1 }}</td>
                                <td>{{ $v->tgl_permintaan->format('d-M-Y') }}</td>
                                <td>{{ $v->judul_permintaan }}</td>
                                <td>{{ $v->isi_permintaan }}</td>
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
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class="text-center">
                        Tidak ada data
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="collapse" id="Masyarakat" data-parent="#accordion">
            <div class="card">
                <div class="card-header">
                    Laporan Data Masyarakat
                    <div class="float-right">
                        @if ($masyarakat ?? '')
                        <a href="{{  route('laporan.cetakDataMasyarakat')  }}" class="btn btn-danger">EXPORT PDF</a>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    @if ($masyarakat ?? '')
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>No. Telp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($masyarakat as $k => $v)
                            <tr>
                                <td>{{ $k += 1 }}</td>
                                <td>{{ $v->nik }}</td>
                                <td>{{ $v->nama }}</td>
                                <td>{{ $v->email }}</td>
                                <td>{{ $v->username }}</td>
                                <td>{{ $v->telp }}</td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                    @else
                    <div class="text-center">
                        Tidak ada data
                    </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>

@endsection