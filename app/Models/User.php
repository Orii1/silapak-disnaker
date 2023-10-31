<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'name',
        'owner',
        'address',
        'email',
        'password',
        'type',
        'modal',
        'sector',
        'status',
        'number_letter',
        'date_latter',
        'men',
        'woman',
        'pkwt',
        'outsourcing',
        'wna',
        'number_ketenagakerjaan',
        'number_kesehatan',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function user_pp()
    {
        return $this->hasOne(Pengesahanpp::class);
    }

    public function user_pkb()
    {
        return $this->hasOne(Pendaftaranpkb::class);
    }

    public function user_pkwt()
    {
        return $this->hasOne(Pendaftaranpkwt::class);
    }

    public function user_spsb()
    {
        return $this->hasOne(Pencatatanspsb::class);
    }

    public function user_lks()
    {
        return $this->hasOne(Pendaftaranlks::class);
    }

    public function user_hi()
    {
        return $this->hasOne(Pencatatanperselihan::class);
    }

    public function user_phk()
    {
        return $this->hasOne(Pelaporanphk::class);
    }
}
