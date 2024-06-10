<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailStatus extends Model
{
    use HasFactory;

    protected $table = 'detail_status';

    protected $primaryKey = 'id_detail_status';

    protected $fillable = [
        'id_status',
        'id_detail_pengecekan',
        'keterangan',
        'sk'
    ];

    public function status_cek()
    {
        return $this->hasOne(DetailPengecekan::class, 'id_detail_pengecekan', 'id_detail_pengecekan');
    }

    public function detail_status()
    {
        return $this->hasMany(Status::class, 'id_status', 'id_status');
    }

    public function detail_phk()
    {
        return $this->hasOne(Pelaporanphk::class, 'id_detail_status', 'id_detail_status');
    }

    public function detail_hi()
    {
        return $this->hasOne(Pencatatanperselihan::class, 'id_detail_status', 'id_detail_status');
    }

    public function detail_spsb()
    {
        return $this->hasOne(Pencatatanspsb::class, 'id_detail_status', 'id_detail_status');
    }

    public function detail_lks()
    {
        return $this->hasOne(Pendaftaranlks::class, 'id_detail_status', 'id_detail_status');
    }

    public function detail_pkb()
    {
        return $this->hasOne(Pendaftaranpkb::class, 'id_detail_status', 'id_detail_status');
    }

    public function detail_pkwt()
    {
        return $this->hasOne(Pendaftaranpkwt::class, 'id_detail_status', 'id_detail_status');
    }

    public function detail_pp()
    {
        return $this->hasOne(Pengesahanpp::class, 'id_detail_status', 'id_detail_status');
    }
}
