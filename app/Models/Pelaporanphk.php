<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaporanphk extends Model
{
    use HasFactory;

    protected $table = 'pelaporan_phk';

    protected $fillable = [
        'id_perusahaan',
        'peruntukan',
        'permohonan_pelaporan_phk',
        'surat_pemberitahuan_phk',
        'surat_tanggapan_pemberitahuan_phk',
        'pb_bipartit',
        'id_detail_status',
    ];

    public function phk_perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan', 'id_perusahaan');
    }

    public function phk_status()
    {
        return $this->hasOne(DetailStatus::class, 'id_detail_status', 'id_detail_status');
    }
}
