<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $table = 'asset';

    protected $fillable = [
        'alur_perizinan',
        'dasar_hukum',
        'durasi_pemrosesan',
        'kontak',
        'retribusi',
        'maklumat',
        'visi_misi',
        'motto',
        'template_1',
        'template_2',
        'template_3',
    ];
}
