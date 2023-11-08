<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaranlks extends Model
{
    use HasFactory;

    protected $table = 'pencatatan_lks_bipartit';

    protected $fillable = [
        'user_id',
        'permohonan_pencatatan_lks_bipartit',
        'daftar_susunan_pengurus_lks_bipartit',
        'berita_acara_pembentukan_lks_bipartit',
        'fc_wlkp',
        'status',
        'pesan',
        'sk',
    ];

    public function lks_user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
