<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\Permintaan;
use Illuminate\Support\Facades\DB;

class MasyarakatController extends Controller
{
    public function index() {

        $masyarakat = Masyarakat::all();
 
        return view('admin.masyarakat.index', ['masyarakat' => $masyarakat]);
    }

    public function show($nik){
        $masyarakat = Masyarakat::where('nik', $nik)->first();

        return view('admin.masyarakat.show', ['masyarakat' => $masyarakat]);
    }

    public function destroy($nik)
    {
        $masyarakat = Masyarakat::findOrFail($nik);

        $masyarakat->delete();

        if($masyarakat) {
            return redirect()->route('masyarakat.index')->with(['success' => 'Berhasil']);
        }else {
            return redirect()->route('masyarakat.index')->with(['error' => 'Gagal']);
        }
    }
}
