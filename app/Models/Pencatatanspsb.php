<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencatatanspsb extends Model
{
    use HasFactory;

    protected $table = 'pencatatan_sp_sb';

    protected $fillable = [
        'user_id',
        'surat_permohonan',
        'ad_art',
        'nama_pembentuk',
        'nama_pengurus',
        'ba_pembentukan',
        'status',
        'pesan',
        'sk',
    ];

    public function spsb_user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
