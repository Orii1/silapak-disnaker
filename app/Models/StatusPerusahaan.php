<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPerusahaan extends Model
{
    use HasFactory;

    protected $table = 'status_perusahaan';

    public function statusperusahaan_perusahaan()
    {
        return $this->hasMany(Perusahaan::class, 'id_status_perusahaan', 'id_status_perusahaan');
    }
}
