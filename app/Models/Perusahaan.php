<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = 'perusahaan';

    protected $fillable = [
        'id_user',
        'nama_perusahaan',
        'pemilik',
        'alamat',
        'id_tipe_perusahaan',
        'sektor',
        'id_status_perusahaan',
        'id_modal',
        'nomor_surat_izin_usaha',
        'tgl_surat_izin_usaha',
        'laki_laki',
        'perempuan',
        'pkwt',
        'outsourcing',
        'wna',
        'no_bpjs_ketenagakerjaan',
        'no_bpjs_kesehatan',
        'latitude',
        'longtitude',
    ];

    public function perusahaan_statusperusahaan()
    {
        return $this->belongsTo(StatusPerusahaan::class, 'id_status_perusahaan', 'id_status_perusahaan');
    }

    public function perusahaan_tipeperusahaan()
    {
        return $this->belongsTo(TipePerusahaan::class, 'id_tipe_perusahaan', 'id_tipe_perusahaan');
    }

    public function perusahaan_modal()
    {
        return $this->belongsTo(Modal::class, 'id_modal', 'id_modal');
    }

    public function perusahaan_pp()
    {
        return $this->hasMany(Pengesahanpp::class, 'id_perusahaan', 'id_perusahaan');
    }

    public function perusahaan_pkb()
    {
        return $this->hasMany(Pendaftaranpkb::class, 'id_perusahaan', 'id_perusahaan');
    }

    public function perusahaan_pkwt()
    {
        return $this->hasMany(Pendaftaranpkwt::class, 'id_perusahaan', 'id_perusahaan');
    }

    public function perusahaan_spsb()
    {
        return $this->hasMany(Pencatatanspsb::class, 'id_perusahaan', 'id_perusahaan');
    }

    public function perusahaan_lks()
    {
        return $this->hasMany(Pendaftaranlks::class, 'id_perusahaan', 'id_perusahaan');
    }

    public function perusahaan_hi()
    {
        return $this->hasMany(Pencatatanperselihan::class, 'id_perusahaan', 'id_perusahaan');
    }

    public function perusahaan_phk()
    {
        return $this->hasMany(Pelaporanphk::class, 'id_perusahaan', 'id_perusahaan');
    }
}
