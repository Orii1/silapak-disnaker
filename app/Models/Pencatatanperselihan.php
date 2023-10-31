<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencatatanperselihan extends Model
{
    use HasFactory;

    protected $table = 'pencatatan_penyelesaian_peselisihan_hi';

    protected $fillable = [
        'user_id',
        'permohonan_pencatatan_pphi',
        'surat_permintaan_perundingan_bipartit',
        'daftar_hadir_perundingan_bipartit',
        'risalah_perundingan_bipartit',
        'status'
    ];

    public function hi_user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
