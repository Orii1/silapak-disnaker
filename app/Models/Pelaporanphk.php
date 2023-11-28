<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaporanphk extends Model
{
    use HasFactory;

    protected $table = 'pelaporan_phk';

    protected $fillable = [
        'user_id',
        'peruntukan',
        'permohonan_pelaporan_phk',
        'surat_pemberitahuan_phk',
        'surat_tanggapan_pemberitahuan_phk',
        'pb_bipartit',
        'status',
        'pesan',
        'sk',
    ];

    public function phk_user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
