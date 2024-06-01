<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPengecekan extends Model
{
    use HasFactory;

    protected $table = 'detail_pengecekan';

    public function pengecekan_detail()
    {
        return $this->hasOne(DetailStatus::class, 'id_detail_pengecekan', 'id_detail_pengecekan');
    }

    public function pengecekan_pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai', 'id_pegawai');
    }
}
