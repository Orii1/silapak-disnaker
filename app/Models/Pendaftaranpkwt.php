<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaranpkwt extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran_pkwt';

    protected $fillable = [
        'user_id',
        'srt_permohonan_pencatatan_pkwt',
        'daftar_nama_pekerja_pkwt',
        'pkwt_asli',
        'fc_wlkp',
        'fc_akta_pendirian_perusahaan',
        'status',
        'pesan',
        'sk',
    ];

    public function pkwt_user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
