@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
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

    <div class="text-center">
        <h2 class="medium text-white mt-5">Layanan Internet Masyarakat</h2>
        <p class="weight text-white mb-5">"Sampaikan Permintaan dan Laporan anda terkait Internet DESA kepada <br>
            DISKOMINFO(Dinas Komunikasi dan Informatika) Kabupaten Bonebolango"</p>
    </div>

    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
    <div class="wave wave4"></div>
</section>
{{-- Section Card Pengaduan --}}
<div class="row justify-content-center">
    <div class="col-lg-6 col-10 col">
        <div class="content shadow">
            <div class="card mb-3">Tulis Laporan Disini</div>
            {{-- ini multiple form punya --}}
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
                                placeholder="Masukkan Judul Pengaduan"
                                class="form-control @error('judul_pengaduan') is-invalid @enderror">
                            @error('judul_pengaduan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea name="isi_pengaduan" placeholder="Uraikan Pengaduan Anda Terkait Layanan Internet"
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
        @if (Session::has('pesan'))
        <div class="alert alert-danger my-2">
            {{ Session::get('pesan') }}
        </div>
        @endif
    </div>
</div>
{{-- Section Hitung Pengaduan --}}
<div class="pengaduan mt-5">
    <div class="bg-color">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h5 class="medium text-white">JUMLAH LAPORAN SEKARANG</h5>
                </div>
                <div class="col">
                    <h5 class="medium text-white">JUMLAH PELANGGAN SAAT INI</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2 class="medium text-white">{{ $pengaduan + $permintaan }}</h2>
                </div>
                <div class="col">
                    <h2 class="medium text-white">{{ $masyarakat }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal --}}
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="mt-3">Masuk terlebih dahulu</h3>
                <p>Silahkan masuk menggunakan akun yang sudah didaftarkan.</p>
                <form action="{{ route('silat.login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-purple text-white mt-3" style="width: 100%">MASUK</button>
                </form>
                @if (Session::has('pesan'))
                <div class="alert alert-danger mt-2">
                    {{ Session::get('pesan') }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@if (Session::has('pesan'))
<script>
    $('#loginModal').modal('show');

</script>
@endif
@endsection