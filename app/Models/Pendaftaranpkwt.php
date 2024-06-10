<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaranpkwt extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran_pkwt';

    protected $primaryKey = 'id_pkwt';

    protected $fillable = [
        'id_perusahaan',
        'peruntukan',
        'srt_permohonan_pencatatan_pkwt',
        'daftar_nama_pekerja_pkwt',
        'pkwt_asli',
        'fc_wlkp',
        'fc_akta_pendirian_perusahaan',
        'id_detail_status'
    ];

    public function pkwt_perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan', 'id');
    }

    public function pkwt_status()
    {
        return $this->hasOne(DetailStatus::class, 'id_detail_status', 'id_detail_status');
    }

}
