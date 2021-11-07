<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    protected $table = 'tanggapan';

    protected $primaryKey = 'id_tanggapan';

    protected $fillable = [
        'pengaduan_id',
        'permintaan_id',
        'tgl_tanggapan',
        'tanggapan',
        'id_petugas',
    ];

    public function petugas() {
        return $this->hasOne(Petugas::class, 'id_petugas', 'id_petugas');
    }
}
