@extends('layouts.admin')

@section('title', 'Detail Pengaduan')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">

<style>
    .text-primary:hover {
        text-decoration: underline;
    }

    .text-grey:hover {
        color: #6c757d
    }

    .gambar {
        /* cursor: pointer; */
        border-radius: 10%;
        width: 200px;
        height: 300px;
    }
    /* .gambar:hover {
    transform: scale(2);
    } */
</style>

@endsection

@section('header')
<a href="{{ route('pengaduan.index') }}" class="text-primary">Data Pengaduan</a>
<a href="#" class="text-grey">/</a>
<a href="#" class="text-grey">Detail Pengaduan</a>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header">
                <div class="text-center">
                    Pengaduan Layanan Internet
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>NIK</th>
                            <td>:</td>
                            <td>{{ $pengaduan->nik }}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>{{ $pengaduan->user->nama  }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>{{ $pengaduan->user->email  }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Pengaduan</th>
                            <td>:</td>
                            <td>{{ $pengaduan->tgl_pengaduan }}</td>
                        </tr>
                        <tr>
                            <th>Judul Pengaduan</th>
                            <td>:</td>
                            <td>{{ $pengaduan->judul_pengaduan }}</td>
                        </tr>
                        <tr>
                            <th>Isi Pengaduan</th>
                            <td>:</td>
                            <td>{{ $pengaduan->isi_pengaduan }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td>{{ $pengaduan->alamat }}</td>
                        </tr>
                        <tr>
                            <th>Foto</th>
                            <td>:</td>
                            {{-- <td><img src="{{ Storage::url($pengaduan->foto) }}" alt="Foto Pengaduan"
                                    class="embed-responsive gambar"></td> --}}
                            <td>
                                {{-- <div class="laporan-bottom"> --}}
                                <img src="{{ Storage::url($pengaduan->foto) }}" alt="{{ 'Gambar '.$pengaduan->judul_pengaduan }}" class="gambar">
                                {{-- </div> --}}
                            </td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>:</td>
                            <td>
                                @if ($pengaduan->status =='0')
                                <a href="#" class="badge badge-danger">Pending</a>
                                @elseif ($pengaduan->status == 'proses')
                                <a href="#" class="badge badge-warning text-white">Proses</a>
                                @else
                                <a href="#" class="badge badge-success">Selesai</a>
                                @endif
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header">
                <div class="text-center">
                    Tanggapan Petugas
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('tanggapan.coruPengaduan') }}" method="POST">
                    @csrf
                    <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->pengaduan_id }}">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <div class="input-group mb-3">
                            <select name="status" id="status" class="custom-select">
                                @if ($pengaduan->status=='0')
                                <option selected value="0">Pending</option>
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                                @elseif ($pengaduan->status=='proses')
                                <option value="0">Pending</option>
                                <option selected value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                                @else
                                <option value="0">Pending</option>
                                <option value="proses">Proses</option>
                                <option selected value="selesai">Selesai</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggapan">Tanggapan</label>
                        <textarea name="tanggapan" id="tanggapan" rows="4" class="form-control"
                            placeholder="Belum ada Tanggapan">{{ $tanggapan->tanggapan ?? '' }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-purple">KIRIM</button>
                </form>
                @if (Session::has('status'))
                <div class="alert alert-success mt-2">
                    {{ Session::get('status') }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection