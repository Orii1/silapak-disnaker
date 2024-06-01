<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modal extends Model
{
    use HasFactory;

    protected $table = 'modal';

    public function modal_perusahaan()
    {
        return $this->hasMany(Perusahaan::class, 'id_modal', 'id_modal');
    }
}
