<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencatatanspsb extends Model
{
    use HasFactory;

    protected $table = 'pencatatan_spsb';

    protected $primaryKey = 'id_spsb';

    protected $fillable = [
        'id_perusahaan',
        'peruntukan',
        'surat_permohonan',
        'ad_art',
        'nama_pembentuk',
        'nama_pengurus',
        'ba_pembentukan',
        'id_detail_status'
    ];

    public function spsb_perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan', 'id');
    }

    public function spsb_status()
    {
        return $this->hasOne(DetailStatus::class, 'id_detail_status', 'id_detail_status');
    }
}
