<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PesananPaket extends Model
{
    protected $table = 'pesanan_paket';
    protected $fillable = ["tgl_masuk","tgl_keluar","id_pengguna","id_paket","status"];
    protected $primaryKey ='id_pesanan';
   


    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class,'id_pengguna','id_pengguna');
    }

    public function paket(): BelongsTo
    {
        return $this->belongsTo(Paket::class,'id_paket','id_paket');    
    }
}
