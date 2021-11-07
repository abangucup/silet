<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';

    protected $primaryKey = 'pengaduan_id';

    protected $fillable = [
        'tgl_pengaduan',
        'nik',
        'judul_pengaduan',
        'isi_pengaduan',
        'alamat',
        'foto',
        'status',
    ];

    protected $dates = ['tgl_pengaduan'];

    public function user() {
        return $this->hasOne(Masyarakat::class, 'nik', 'nik');
    }

    public function tanggapan() {
        return $this->hasOne(Tanggapan::class, 'pengaduan_id', 'pengaduan_id');
    }
}
