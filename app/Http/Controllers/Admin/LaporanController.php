<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\Permintaan;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function index() {
        
        // return view('admin.laporan.index');
        $masyarakat = Masyarakat::orderby('nama', 'desc')->get();
        $pengaduan = Pengaduan::orderBy('tgl_pengaduan', 'desc')->get();
        $permintaan = Permintaan::orderBy('tgl_permintaan', 'desc')->get();

        return view('admin.laporan.index', ['pengaduan' => $pengaduan, 'permintaan' => $permintaan], ['masyarakat' => $masyarakat]);

        // return view('admin.laporan.index', ['pengaduan' => $pengaduan, 'permintaan' => $permintaan]);
    }

    public function cetakPengaduan() {
        $pengaduan = Pengaduan::orderBy('tgl_pengaduan', 'desc')->get();

        $pdf = PDF::loadView('admin.laporan.cetakPengaduan', ['pengaduan' => $pengaduan]);

        return $pdf->download('laporan-pengaduan.pdf');
    }

    public function cetakPermintaan() {
        $permintaan = Permintaan::orderBy('tgl_permintaan', 'desc')->get();

        $pdf = PDF::loadView('admin.laporan.cetakPermintaan', ['permintaan' => $permintaan]);

        return $pdf->download('laporan-permintaan.pdf');
    }

    public function cetakDataMasyarakat() {
        $masyarakat = Masyarakat::orderBy('nik', 'desc')->get();

        $pdf = PDF::loadView('admin.laporan.cetakMasyarakat', ['masyarakat' => $masyarakat]);

        return $pdf->download('data-masyarakat.pdf');
    }
}