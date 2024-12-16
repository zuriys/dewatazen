<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class Paket extends Model
{
    protected $table = 'paket';
    protected $fillable = ["nama","id_penginapan","jumlah_kamar","deskripsi_fasilitas","alamat","harga"];
    protected $primaryKey ='id_paket';
    

    public function paket(): HasOneOrMany
    {
        return $this->hasMany(Paket::class);
    }
}
