<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaranpkb extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran_pkb';

    protected $fillable = [
        'user_id',
        'fc_wlkp',
        'fc_akta_pendirian_perusahaan',
        'fc_setifikat_peserta_bpjs_ketenagakerjaan',
        'permohonan_pendaftaran_pkb',
        'surat_pernyataan_struktur_skala_upah',
        'struktur_skala_upah_asli',
        'draft_pkb',
        'status'
    ];
}
