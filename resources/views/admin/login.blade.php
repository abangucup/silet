@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<link rel="stylesheet" href="{{ asset('css/laporan.css') }}">
@endsection

@section('title', 'Halaman Petugas')

@section('content')
{{-- <section class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
            <div class="container-fluid">

            </div>
        </div>
    </nav>
    <div class="text-center">
        <h2 class="medium text-white mt-3 space">S I L E T</h2>
        <p class="italic text-white mb-5">SISTEM INFORMASI LAYANAN INTERNET MASYARAKAT</p>
    </div>

    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
    <div class="wave wave4"></div>

</section> --}}

<section class="headerRegis">
    <div class="container">
        <div class="container-fluid">
            <div class="container container-fluid logoRegis mt-5"></div>
            <div class="text-center">
                <h2 class="medium text-white space">S I L E T</h2>
                <p class="italic text-white mb-5">SISTEM INFORMASI LAYANAN INTERNET MASYARAKAT</p>
            </div>
        </div>
    </div>


{{-- <div class="animasi">
    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
    <div class="wave wave4"></div>
</div> --}}
<div class="row justify-content-center">
    <div class="col-lg-4 col-10 col">
        <div class="shadow">
            <div class="mt-2">
                <div class="card-body">
                    <h2 class="text-center mb-5">LOGIN PETUGAS</h2>
                    <form action="{{ route('admin.login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-color">LOGIN</button>
                            <a href="{{ route('silat.index') }}" class="btn btn-warning mt-3">HOME</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @if (Session::has('pesan'))
        <div class="alert alert-danger mt-2">
            {{ Session::get('pesan') }}
        </div>
        @endif
    </div>
</div>
</section>
@endsection