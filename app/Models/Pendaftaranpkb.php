<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaranpkb extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran_pkb';

    protected $primaryKey = 'id_pkb';

    protected $fillable = [
        'id_pkb',
        'id_perusahaan',
        'peruntukan',
        'fc_wlkp',
        'fc_akta_pendirian_perusahaan',
        'fc_setifikat_peserta_bpjs_ketenagakerjaan',
        'permohonan_pendaftaran_pkb',
        'surat_pernyataan_struktur_skala_upah',
        'struktur_skala_upah_asli',
        'draft_pkb',
        'id_detail_status'
    ];

    public function pkb_perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan', 'id');
    }

    public function pkb_status()
    {
        return $this->hasOne(DetailStatus::class, 'id_detail_status', 'id_detail_status');
    }
}
