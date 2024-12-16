<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
    protected $table = 'pengguna';
    protected $fillable = ["username","password","email","alamat","no_hp"];
    protected $primaryKey ='id_pengguna';

    public function pesanan_hotel(): HasMany
    {
        return $this->hasMany(PesananHotel::class, 'foreign_key');
    }

    public function pesanan_paket(): HasMany
    {
        return $this->hasMany(PesananPaket::class, 'foreign_key');
    }

}
