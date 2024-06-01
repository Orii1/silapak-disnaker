<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaranlks extends Model
{
    use HasFactory;

    protected $table = 'pencatatan_lks_bipartit';

    protected $fillable = [
        'id_perusahaan',
        'peruntukan',
        'permohonan_pencatatan_lks_bipartit',
        'daftar_susunan_pengurus_lks_bipartit',
        'berita_acara_pembentukan_lks_bipartit',
        'fc_wlkp',
        'id_detail_status'
    ];

    public function lks_perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan', 'id_perusahaan');
    }

    public function lks_status()
    {
        return $this->hasOne(DetailStatus::class, 'id_detail_status', 'id_detail_status');
    }
}
