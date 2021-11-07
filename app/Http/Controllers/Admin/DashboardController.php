<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\Permintaan;
use App\Models\Petugas;

// use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $petugas = Petugas::all()->count();
        $masyarakat = Masyarakat::all()->count();
        $pengaduan = Pengaduan::all()->count();

        $aduanProses = Pengaduan::where('status', 'proses')->get()->count();
        $aduanSelesai = Pengaduan::where('status', 'selesai')->get()->count();

        $requestProses = Permintaan::where('status', 'proses')->get()->count();
        $requestSelesai = Permintaan::where('status', 'selesai')->get()->count();

        return view('admin.dashboard.index', [
            'petugas' => $petugas, 
            'masyarakat' => $masyarakat, 
            'aduanProses' => $aduanProses, 
            'requestProses' => $requestProses,  
            'aduanSelesai' => $aduanSelesai,
            'requestSelesai' => $requestSelesai,
            'pengaduan' => $pengaduan,
        ]);
    }
}
