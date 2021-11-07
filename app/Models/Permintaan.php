<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    use HasFactory;

    protected $table = 'permintaan';

    protected $primaryKey = 'permintaan_id';

    protected $fillable = [
        'tgl_permintaan',
        'nik',
        'judul_permintaan',
        'isi_permintaan',
        'alamat',
        'foto',
        'status',
    ];

    protected $dates = ['tgl_permintaan'];

    public function user() {
        return $this->hasOne(Masyarakat::class, 'nik', 'nik');
    }

    public function tanggapan() {
        return $this->hasOne(Tanggapan::class, 'permintaan_id', 'permintaan_id');
    }
}
