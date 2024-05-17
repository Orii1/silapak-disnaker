<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';

    public function status_detail()
    {
        return $this->hasMany(DetailStatus::class, 'id_status', 'id_status');
    }
}
