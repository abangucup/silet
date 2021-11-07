<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\MailNotif;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\Permintaan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Nexmo\Laravel\Facade\Nexmo;

class TanggapanController extends Controller
{
    public function createOrUpdatePengaduan(Request $request)
    {
        $pengaduan = Pengaduan::where('pengaduan_id', $request->pengaduan_id)->first();
        $tanggapanPengaduan = Tanggapan::where('pengaduan_id', $request->pengaduan_id)->first();

        // Logika tanggapan pengaduan
        if ($tanggapanPengaduan) {
            $pengaduan->update(['status' => $request->status]);

            $tanggapanPengaduan->update([
                // 'permintaan_id' => $request->permintaan_id,
                'tgl_tanggapan' => date('Y-m-d'),
                'tanggapan' => $request->tanggapan,
                'id_petugas' => Auth::guard('admin')->user()->id_petugas,
            ]);
            Mail::to($pengaduan->user->email)->send(new MailNotif($pengaduan->user->username));
            return redirect()->route('pengaduan.show', ['pengaduan' => $pengaduan, 'tanggapan' => $tanggapanPengaduan])->with(['status' => 'Berhasil Dikirim!']);
        }  else {
            $pengaduan->update(['status' => $request->status]);

            $tanggapanPengaduan = Tanggapan::create([
                'pengaduan_id' => $request->pengaduan_id,
                'tgl_tanggapan' => date('Y-m-d'),
                'tanggapan' => $request->tanggapan,
                'id_petugas' => Auth::guard('admin')->user()->id_petugas,
            ]);
            Mail::to($pengaduan->user->email)->send(new MailNotif($pengaduan->user->username));
            return redirect()->route('pengaduan.show', ['pengaduan' => $pengaduan, 'tanggapan' => $tanggapanPengaduan])->with(['status' => 'Berhasil Dikirim!']);
        }

    }

    public function createOrUpdatePermintaan(Request $request) {

        $permintaan = Permintaan::where('permintaan_id', $request->permintaan_id)->first();
        $tanggapanPermintaan = Tanggapan::where('permintaan_id', $request->permintaan_id)->first();
        // logika tanggapan permintaan
        if ($tanggapanPermintaan) {
            $permintaan->update(['status' => $request->status]);

            $tanggapanPermintaan->update([
                // 'permintaan_id' => $request->permintaan_id,
                'tgl_tanggapan' => date('Y-m-d'),
                'tanggapan' => $request->tanggapan,
                'id_petugas' => Auth::guard('admin')->user()->id_petugas,
            ]);
            
            Mail::to($permintaan->user->email)->send(new MailNotif($permintaan->user->username));
            return redirect()->route('permintaan.show', ['permintaan' => $permintaan, 'tanggapan' => $tanggapanPermintaan])->with(['status' => 'Berhasil Dikirim!']);
        } else {

            // Nexmo::message()->send([
            //     'to'   => '+62 896 3722 9307',
            //     'from' => '+62 821 5448 8769',
            //     'text' => 'Permintaan atau pengaduan anda sedang di proses.'
            // ]);

            $permintaan->update(['status' => $request->status]);

            $tanggapanPermintaan = Tanggapan::create([
                'permintaan_id' => $request->permintaan_id,
                'tgl_tanggapan' => date('Y-m-d'),
                'tanggapan' => $request->tanggapan,
                'id_petugas' => Auth::guard('admin')->user()->id_petugas,
            ]);
            Mail::to($permintaan->user->email)->send(new MailNotif($permintaan->user->username));
            return redirect()->route('permintaan.show', ['permintaan' => $permintaan, 'tanggapan' => $tanggapanPermintaan])->with(['status' => 'Berhasil Dikirim!']);
        }
    }

    // public function kirimPesan() {
    //     Nexmo::message()->send([
    //         'to'   => '+62 896 3722 9307',
    //         'from' => '+62 821 5448 8769',
    //         'text' => 'Permintaan atau pengaduan anda sedang di proses.'
    //     ]);

    //     echo "Seccess";
    // }
    
}
