<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\Permintaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // index
    public function index()
    {
        // menghitung jumlah pengaduan yang ada di table
        $masyarakat = Masyarakat::all()->count();
        $pengaduan = Pengaduan::all()->count();
        $permintaan = Permintaan::all()->count();

        // Arahkan ke file user/landing.blade.php
        return view('user.landing', ['pengaduan' => $pengaduan, 'permintaan' => $permintaan], ['masyarakat' => $masyarakat]);
    }

    // funsi login
    public function login(Request $request)
    {
        $username = Masyarakat::where('username', $request->username)->first();

        if (!$username) {
            return redirect()->back()->with(['pesan' => 'Username tidak terdaftar']);
        }

        $password = Hash::check($request->password, $username->password);

        if (!$password) {
            return redirect()->back()->with(['pesan' => 'Password tidak sesuai']);
        }

        if (Auth::guard('masyarakat')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->back();
        } else {
            return redirect()->back()->with(['pesan' => 'Akun tidak terdaftar!']);
        }
    }

    // form register use
    public function formRegister()
    {
        return view('user.register');
    }

    // fungsi register pnya
    public function register(Request $request)
    {
        $data = $request->all();

        $validate = Validator::make($data, [
            'nik' => ['required', 'unique:masyarakat'],
            'nama' => ['required', 'string'],
            'email' => ['required', 'email', 'string', 'unique:masyarakat'],
            'username' => ['required', 'string', 'regex:/^\S*$/u', 'unique:masyarakat'],
            'password' => ['required', 'min:6'],
            'telp' => ['required'],
        ]);

        // pengecekan jika validasi gagal
        if ($validate->fails()) {

            // return redirect()->back()->with(['pesan' => $validate->errors()]);
            return redirect()->back()->withErrors($validate)->withInput();
        }

        // mengecek username
        $username = Masyarakat::where('username', $request->username)->first();

        // pengecekan username jika sudah terdaftar
        if ($username) {
            return redirect()->back()->with(['pesan' => 'Username sudah terdaftar'])->withInput(['username' => null]);
        }

        // input data ke dalam table
        Masyarakat::create([
            'nik' => $data['nik'],
            'nama' => $data['nama'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'telp' => $data['telp'],
        ]);

        return redirect()->route('silat.index');
    }

    // fungsi keluar
    public function logout()
    {
        // fungsi logout dengan guard('masyarakat')
        Auth::guard('masyarakat')->logout();

        // kembali halaman utama cara 1
        // return redirect()->back();

        // kembali ke halaman utara dengan route
        return redirect()->route('silat.index');
    }

    // fungsi simpanPengaduan
    public function storePengaduan(Request $request)
    {
        // pengecekan jika tidak ada masyarakat yang sedang login
        if (!Auth::guard('masyarakat')->user()) {
            return redirect()->back()->with(['pesan' => 'Login dibutuhkan!'])->withInput();
        }

        // ambil semua data dan simpan kedalam variable $data
        $data = $request->all();

        $validate = Validator::make($data, [
            'judul_pengaduan' => ['required'],
            'isi_pengaduan' => ['required'],
            'alamat' => ['required'],
            'foto' => ['required'],
        ]);

        // pengecekan jika validate gagal
        if ($validate->fails()) {
            return redirect()->back()->withInput()->withErrors($validate);
        }

        // cek jika ada file foto yang dikirim
        if ($request->file('foto')) {
            $data['foto'] = $request->file('foto')->store('assets/pengaduan', 'public');
        }

        date_default_timezone_set('Asia/Makassar');

        $pengaduan = Pengaduan::create([
            'tgl_pengaduan' => date('Y-m-d h:i:s'),
            'nik' => Auth::guard('masyarakat')->user()->nik,
            'judul_pengaduan' => $data['judul_pengaduan'],
            'isi_pengaduan' => $data['isi_pengaduan'],
            'alamat' => $data['alamat'],
            'foto' => $data['foto'] ?? '',
            'status' => '0',
        ]);

        if ($pengaduan) {
            return redirect()->route('silat.laporan', 'pengaduan')->with(['pengaduan' => 'Berhasil terkirim!', 'type' => 'success']);
        } else {
            return redirect()->back()->with(['pengaduan' => 'Gagal terkirim!', 'type' => 'danger']);
        }
    }

    // fungsi simpanPermintaan
    public function storePermintaan(Request $request)
    {
        // pengecekan jika tidak ada masyarakat yang sedang login
        if (!Auth::guard('masyarakat')->user()) {
            return redirect()->back()->with(['pesan' => 'Login dibutuhkan!'])->withInput();
        }

        // ambil semua data dan simpan kedalam variable $data
        $data = $request->all();

        $validate = Validator::make($data, [
            'judul_permintaan' => ['required'],
            'isi_permintaan' => ['required'],
            'alamat' => ['required'],
            'foto' => ['required'],
        ]);

        // pengecekan jika validate gagal
        if ($validate->fails()) {
            return redirect()->back()->withInput()->withErrors($validate);
        }

        // cek jika ada file foto yang dikirim
        if ($request->file('foto')) {
            $data['foto'] = $request->file('foto')->store('assets/permintaan', 'public');
        }

        date_default_timezone_set('Asia/Makassar');

        $permintaan = Permintaan::create([
            'tgl_permintaan' => date('Y-m-d h:i:s'),
            'nik' => Auth::guard('masyarakat')->user()->nik,
            'judul_permintaan' => $data['judul_permintaan'],
            'isi_permintaan' => $data['isi_permintaan'],
            'alamat' => $data['alamat'],
            'foto' => $data['foto'] ?? '',
            'status' => '0',
        ]);

        if ($permintaan) {
            return redirect()->route('silat.laporan', 'permintaan')->with(['permintaan' => 'Berhasil terkirim!', 'type' => 'success']);
        } else {
            return redirect()->back()->with(['permintaan' => 'Gagal terkirim!', 'type' => 'danger']);
        }
    }

    // fungsi menu laporan 
    public function laporan($siapa = '')
    {
        $versifikasiPengadu = Pengaduan::where([['nik', Auth::guard('masyarakat')->user()->nik], ['status', '!=', '0']])->get()->count();
        $prosesPengadu = Pengaduan::where([['nik', Auth::guard('masyarakat')->user()->nik], ['status', 'proses']])->get()->count();
        $selesaiPengadu = Pengaduan::where([['nik', Auth::guard('masyarakat')->user()->nik], ['status', 'selesai']])->get()->count();

        // hitung pengaduan
        $hitungPengadu = [$versifikasiPengadu, $prosesPengadu, $selesaiPengadu];

        // status permintaan

        $versifikasiPeminta = Permintaan::where([['nik', Auth::guard('masyarakat')->user()->nik], ['status', '!=', '0']])->get()->count();
        $prosesPeminta = Permintaan::where([['nik', Auth::guard('masyarakat')->user()->nik], ['status', 'proses']])->get()->count();
        $selesaiPeminta = Permintaan::where([['nik', Auth::guard('masyarakat')->user()->nik], ['status', 'selesai']])->get()->count();

        // hitung permintaan
        $hitungPeminta = [$versifikasiPeminta, $prosesPeminta, $selesaiPeminta];

        // status pengaduan jika null
        $versifikasiLain = Pengaduan::where([['nik', '!=', Auth::guard('masyarakat')->user()->nik], ['status', '!=', '0']])->get()->count();
        $prosesLain = Pengaduan::where([['nik', '!=', Auth::guard('masyarakat')->user()->nik], ['status', 'proses']])->get()->count();
        $selesaiLain = Pengaduan::where([['nik', '!=', Auth::guard('masyarakat')->user()->nik], ['status', 'selesai']])->get()->count();

        // hitung pengaduan orang
        $hitungPengaduLain = [$versifikasiLain, $prosesLain, $selesaiLain];

        if ($siapa == 'pengaduan') {
            $pengaduan = Pengaduan::where('nik', Auth::guard('masyarakat')->user()->nik)->orderBy('tgl_pengaduan', 'desc')->get();

            return view('user.laporan', ['pengaduan' => $pengaduan, 'hitungPengadu' => $hitungPengadu, 'siapa' => $siapa]);
        } elseif ($siapa == 'permintaan') {
            $permintaan = Permintaan::where('nik', Auth::guard('masyarakat')->user()->nik)->orderBy('tgl_permintaan', 'desc')->get();

            return view('user.laporan', ['permintaan' => $permintaan, 'hitungPeminta' => $hitungPeminta, 'siapa' => $siapa]);
        } else {
            $pengaduan = Pengaduan::where([['nik', '!=', Auth::guard('masyarakat')->user()->nik], ['status', '!=', '0']])->orderBy('tgl_pengaduan', 'desc')->get();
            return view('user.laporan',['pengaduan' => $pengaduan, 'hitungPengaduLain' => $hitungPengaduLain, 'siapa' => $siapa]
            );
        }
    }
}
