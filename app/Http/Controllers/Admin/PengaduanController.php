<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use App\Models\Tanggapan;

class PengaduanController extends Controller
{
    public function index() {

        $pengaduan = Pengaduan::orderBy('tgl_pengaduan', 'desc')->get();

        return view('admin.pengaduan.index', ['pengaduan' => $pengaduan]);
    }

    public function show($pengaduan_id) {

        $pengaduan = Pengaduan::where('pengaduan_id', $pengaduan_id)->first();

        $tanggapan = Tanggapan::where('pengaduan_id', $pengaduan_id)->first();

        return view('admin.pengaduan.show', ['pengaduan' => $pengaduan, 'tanggapan' => $tanggapan]);
        
    }
}
