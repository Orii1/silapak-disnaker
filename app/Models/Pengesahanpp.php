<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengesahanpp extends Model
{
    use HasFactory;

    protected $table = 'pengesahan_pp';

    protected $fillable = [
        'id_perusahaan',
        'peruntukan',
        'fc_wlkp',
        'fc_akta_pendirian_perusahaan',
        'fc_sertifikat_peserta_bpjs_ketenagakerjaan',
        'permohonan_pengesahan_pp',
        'surat_pernyataan_saran_spsb',
        'surat_pernyataan_belum_terbentuk_spsb',
        'surat_pernyataan_struktur_skala_upah',
        'struktur_skala_upah_asli',
        'draft_pp',
        'id_detail_status'
    ];

    public function pp_perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan', 'id_perusahaan');
    }

    public function pp_status()
    {
        return $this->hasOne(DetailStatus::class, 'id_detail_status', 'id_detail_status');
    }
}
