<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipePerusahaan extends Model
{
    use HasFactory;

    protected $table = 'tipe_perusahaan';

    public function tipeperusahaan_perusahaan()
    {
        return $this->hasMany(Perusahaan::class, 'id_tipe_perusahaan', 'id_tipe_perusahaan');
    }
}
