<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengesahanpp extends Model
{
    use HasFactory;

    protected $table = 'pengesahan_pp';

    protected $fillable = [
        'user_id',
        'fc_wlkp',
        'fc_akta_pendirian_perusahaan',
        'fc_sertifikat_peserta_bpjs_ketenagakerjaan',
        'permohonan_pengesahan_pp',
        'surat_pernyataan_saran_spsb',
        'surat_pernyataan_belum_terbentuk_spsb',
        'surat_pernyataan_struktur_skala_upah',
        'struktur_skala_upah_asli',
        'draf_pp',
        'status',
        'pesan',
        'sk',
    ];

    public function pp_user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
