@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<link rel="stylesheet" href="{{ asset('css/laporan.css') }}">
@endsection

@section('title', 'SILET - SISTEM INFORMASI PENGADUAN DAN PERMINTAAN INTERNET MASYARAKAT')

@section('content')
{{-- Section Header --}}
<section class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
            <div class="container-fluid">
                <div class="logo"></div>
                <a class="text-center" href="{{ route('silat.index') }}">
                    <h4 class="semi-bold mb-0 ml-0 text-white space">S I L E T</h4>
                    <p class="italic mt-0 text-white">SISTEM INFORMASI LAYANAN INTERNET MASYARAKAT</p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    @if(Auth::guard('masyarakat')->check())
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link ml-3 text-white" href="{{ route('silat.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-3 text-white" href="{{ route('silat.laporan') }}">Laporan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-3 text-white" href="{{ route('silat.logout') }}"
                                style="text-decoration: underline">{{ Auth::guard('masyarakat')->user()->nama }}</a>
                        </li>
                    </ul>
                    @else
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <button class="btn text-white" type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#loginModal">Masuk</button>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('silat.formRegister') }}" class="btn btn-outline-purple">Daftar</a>
                        </li>
                    </ul>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
</section>
<div class="animasi">
    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
    <div class="wave wave4"></div>
</div>
{{-- Section Card --}}
<div class="container" style="min-height: 550px;">
    <div class="row justify-content-between">

        {{-- ini mulai card formnya --}}
        <div class="col-lg-8 col-10 col">
            <div class="content shadow">
                <div class="card mb-3">Tulis Laporan Anda</div>

                {{-- ini multiple formnya --}}
                <div id="accordion">
                    <p style="text-align: center">Pilih Tipe Laporan</p>

                    {{-- button pilih laporan --}}
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-custom mb-3" data-toggle="collapse"
                                data-target="#pengaduan">
                                Pengaduan Layanan Internet
                            </button>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-custom mb-3" data-toggle="collapse"
                                data-target="#permintaan">
                                Permintaan Layanan Internet
                            </button>
                        </div>
                    </div>

                    {{-- form pilih laporan pengaduan --}}
                    <div class="collapse show" id="pengaduan" data-parent="#accordion">
                        <form action="{{ route('silat.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" value="{{ old('judul_pengaduan') }}" name="judul_pengaduan"
                                    placeholder="Masukan Judul Pengaduan"
                                    class="form-control @error('judul_pengaduan') is-invalid @enderror">
                                @error('judul_pengaduan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea name="isi_pengaduan"
                                    placeholder="Uraikan Pengaduan Anda Terkait Layanan Internet"
                                    class="form-control @error('isi_pengaduan') is-invalid @enderror"
                                    rows="4">{{ old('isi_pengaduan') }}</textarea>
                                @error('isi_pengaduan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea name="alamat" placeholder="Masukan alamat anda"
                                    class="form-control @error('alamat') is-invalid @enderror"
                                    rows="2">{{ old('alamat') }}</textarea>
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">Masukan File Pedukung : [.jpeg .jpg .png]</div>
                            <div class="form-group">
                                <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror"
                                    accept=".jpeg, .jpg, .png">
                                @error('foto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-custom mt-2">Kirim</button>
                        </form>
                    </div>
                    {{-- batas form pengaduan --}}

                    {{-- ini form permintaan punya --}}
                    <div class="collapse" id="permintaan" data-parent="#accordion">
                        <form action="{{ route('silat.simpan') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" value="{{ old('judul_permintaan') }}" name="judul_permintaan"
                                    placeholder="Masukkan Judul Permintaan"
                                    class="form-control @error('judul_permintaan') is-invalid @enderror">
                                @error('judul_permintaan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea name="isi_permintaan"
                                    placeholder="Uraikan Permintaan Anda Lengkap Dengan Lokasi Anda"
                                    class="form-control @error('isi_permintaan') is-invalid @enderror"
                                    rows="4">{{ old('isi_permintaan') }}</textarea>
                                @error('isi_permintaan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea name="alamat" placeholder="Masukan alamat anda"
                                    class="form-control @error('alamat') is-invalid @enderror"
                                    rows="2">{{ old('alamat') }}</textarea>
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">Masukan File Pendukung : [.jpeg .jpg .png]</div>
                            <div class="form-group">
                                <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror"
                                    accept=".jpeg, .jpg, .png">
                                @error('foto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-custom mt-2">Kirim</button>
                        </form>
                    </div>
                    {{-- batas form permintaan --}}
                </div>
                {{-- batas multiple form --}}
            </div>
        </div>
        {{-- Sampe sini card form punya --}}

        {{-- ini card userpnya --}}
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 col">
            <div class="content content-bottom shadow">
                <div>
                    <img src="{{ asset('images/user_default.svg') }}" alt="user profile" class="photo">
                    <div class="self-align">
                        <h5><a style="color: #3282B8" href="#">{{ Auth::guard('masyarakat')->user()->nama }}</a>
                        </h5>
                        <p class="text-dark">@ {{ Auth::guard('masyarakat')->user()->username }}</p>
                    </div>

                    {{-- Status Laporan --}}
                    <div class="row ml-4">
                        <div class="mt-4 mb-0">
                            <p style="color: #3282B8;">{{ $siapa == '' ? 'Semua Pengaduan' : $siapa}}</p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <p class="italic mb-0">Terverifikasi</p>
                                <div class="text-center">
                                    {{ $hitungPengadu[0] ?? $hitungPeminta[0] ?? $hitungPengaduLain[0] }}
                                </div>
                            </div>
                            <div class="col">
                                <p class="italic mb-0">Proses</p>
                                <div class="text-center">
                                    {{ $hitungPengadu[1] ?? $hitungPeminta[1] ?? $hitungPengaduLain[1] }}
                                </div>
                            </div>
                            <div class="col">
                                <p class="italic mb-0">Selesai</p>
                                <div class="text-center">
                                    {{ $hitungPengadu[2] ?? $hitungPeminta[2] ?? $hitungPengaduLain[2] }}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Batas Status Laporan --}}
                </div>
            </div>
        </div>
        {{-- ini batas card user pnya --}}
    </div>
    <div class="row mt-5">
        <div class="col-lg-8">
            <a class="d-inline tab {{ $siapa == '' ? 'tab-active' : ''}} mr-4" href="{{ route('silat.laporan') }}">
                Semua
            </a>
            <a class="d-inline tab {{ $siapa == 'pengaduan' ? 'tab-active' : ''}} mr-4"
                href="{{ route('silat.laporan', 'pengaduan') }}">
                Pengaduan Saya
            </a>
            <a class="d-inline tab {{ $siapa == 'permintaan' ? 'tab-active' : ''}}"
                href="{{ route('silat.laporan', 'permintaan') }}">
                Permintaan Saya
            </a>
            <hr>
        </div>

        {{-- perulangan pengaduan --}}
        @foreach ($pengaduan ?? $permintaan as $k => $v)
        <div class="col-lg-8">
            <div class="laporan-top">
                <img src="{{ asset('images/user_default.svg') }}" alt="profile" class="profile">
                <div class="d-flex justify-content-between">
                    <div>
                        <p>{{ $v->user->nama }}</p>
                        @if ($v->status == '0')
                        <p class="text-danger">Pending</p>
                        @elseif($v->status == 'proses')
                        <p class="text-warning">{{ ucwords($v->status) }}</p>
                        @else
                        <p class="text-success">{{ ucwords($v->status) }}</p>
                        @endif
                    </div>
                    <div>
                        <p>{{ $v->tgl_pengaduan ?? $v->tgl_permintaan->format('d M Y, h:i:s') }}</p>
                    </div>
                </div>
            </div>
            <div class="laporan-mid">
                <div class="judul-pengaduan">
                    {{ $v->judul_pengaduan ?? $v->judul_permintaan }}
                </div>
                <p>{{ $v->isi_pengaduan ?? $v->isi_permintaan }}</p>
            </div>
            <div class="laporan-bottom">
                {{-- modal image --}}
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="foto">
                    <div id="caption"></div>
                </div>
                {{-- isi laporan --}}
                @if ($v->foto != null)
                {{-- <img id="myImage" id="<?= $k ?>" src="{{ Storage::url($v->foto) }}"
                alt="{{ 'Gambar '.$v->judul_pengaduan ?? $v->judul_permintaan }}" onclick="showImage(this,<?= $k ?>)">
                --}}

                <a target="_blank" href="{{ Storage::url($v->foto) }}">
                    <img id="myImage" src="{{ Storage::url($v->foto) }}"
                        alt="{{ 'Gambar '.$v->judul_pengaduan ?? $v->judul_permintaan }}">
                </a>
                @endif
                @if ($v->tanggapan != null)
                <p class="mt-3 mb-1">{{ '*Tanggapan dari '. $v->tanggapan->petugas->nama_petugas }}</p>
                <p class="light">{{ $v->tanggapan->tanggapan }}</p>
                @endif
            </div>
            <hr>
        </div>
        @endforeach
    </div>
    {{-- ini lo accordion --}}
</div>
{{-- Footer --}}

@endsection

@section('js')
@if (Session::has('pesan'))
<script>
    $('#loginModal').modal('show');
</script>
@endif
@endsection