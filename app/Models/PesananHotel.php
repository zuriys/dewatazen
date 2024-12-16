<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PesananHotel extends Model
{
    protected $table = 'pesanan_hotel';
    protected $fillable = ["tgl_masuk","tgl_keluar","id_pengguna","id_penginapan","status"];
    protected $primaryKey ='id_pesanan';
   


    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class,'id_pengguna','id_pengguna');
    }

    public function penginapan(): BelongsTo
    {
        return $this->belongsTo(Penginapan::class,'id_penginapan','id_penginapan');    
    }

    
}
