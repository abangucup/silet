<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permintaan;
use App\Models\Tanggapan;

class PermintaanController extends Controller
{
    public function index() {

        $permintaan = permintaan::orderBy('tgl_permintaan', 'desc')->get();

        return view('admin.permintaan.index', ['permintaan' => $permintaan]);
    }

    public function show($permintaan_id) {

        $permintaan = Permintaan::where('permintaan_id', $permintaan_id)->first();

        $tanggapan = Tanggapan::where('permintaan_id', $permintaan_id)->first();

        return view('admin.permintaan.show', ['permintaan' => $permintaan, 'tanggapan' => $tanggapan]);
        
    }
}
