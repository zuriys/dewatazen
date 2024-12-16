<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class Penginapan extends Model
{
    protected $table = 'penginapan';
    protected $fillable = ["nama","jumlah_kamar","deskripsi_fasilitas","alamat","harga","ac","parkir","taman","restoran","lift","balkon","kolam_berenang","wifi"];
    protected $primaryKey ='id_penginapan';
    

    public function pesanan(): HasOneOrMany
    {
        return $this->hasMany(PesananHotel::class);
    }

}
