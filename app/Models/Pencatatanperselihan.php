<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencatatanperselihan extends Model
{
    use HasFactory;

    protected $table = 'pencatatan_penyelasaian_hi';

    protected $fillable = [
        'id_perusahaan',
        'peruntukan',
        'permohonan_pencatatan_pphi',
        'surat_permintaan_perundingan_bipartit',
        'daftar_hadir_perundingan_bipartit',
        'risalah_perundingan_bipartit',
        'id_detail_status',
    ];

    public function hi_perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan', 'id_perusahaan');
    }

    public function hi_status()
    {
        return $this->hasOne(DetailStatus::class, 'id_detail_status', 'id_detail_status');
    }
}
