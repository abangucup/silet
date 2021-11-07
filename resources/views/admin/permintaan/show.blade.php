@extends('layouts.admin')

@section('title', 'Detail Permintaan')

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
<a href="{{ route('permintaan.index') }}" class="text-primary">Data Permintaan</a>
<a href="#" class="text-grey">/</a>
<a href="#" class="text-grey">Detail Permintaan</a>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header">
                <div class="text-center">
                    Permintaan Layanan Internet
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>NIK</th>
                            <td>:</td>
                            <td>{{ $permintaan->nik }}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>{{ $permintaan->user->nama  }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>{{ $permintaan->user->email  }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal permintaan</th>
                            <td>:</td>
                            <td>{{ $permintaan->tgl_permintaan }}</td>
                        </tr>
                        <tr>
                            <th>Judul Permintaan</th>
                            <td>:</td>
                            <td>{{ $permintaan->judul_permintaan }}</td>
                        </tr>
                        <tr>
                            <th>Isi Laporan</th>
                            <td>:</td>
                            <td>{{ $permintaan->isi_permintaan }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td>{{ $permintaan->alamat }}</td>
                        </tr>
                        <tr>
                            <th>Foto</th>
                            <td>:</td>
                            {{-- <td><img src="{{ Storage::url($permintaan->foto) }}" alt="Foto permintaan"
                                    class="embed-responsive gambar"></td> --}}
                            <td>
                                {{-- <div class="laporan-bottom"> --}}
                                <img src="{{ Storage::url($permintaan->foto) }}" alt="{{ 'Gambar '.$permintaan->judul_permintaan }}" class="gambar">
                                {{-- </div> --}}
                            </td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>:</td>
                            <td>
                                @if ($permintaan->status =='0')
                                <a href="#" class="badge badge-danger">Pending</a>
                                @elseif ($permintaan->status == 'proses')
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
                <form action="{{ route('tanggapan.coruPermintaan') }}" method="POST">
                    @csrf
                    <input type="hidden" name="permintaan_id" value="{{ $permintaan->permintaan_id }}">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <div class="input-group mb-3">
                            <select name="status" id="status" class="custom-select">
                                @if ($permintaan->status=='0')
                                <option selected value="0">Pending</option>
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                                @elseif ($permintaan->status=='proses')
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