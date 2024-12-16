<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historiguide extends Model
{
    protected $table = 'historiguide';
    protected $fillable = ["judul_histori","deskripsi","url_foto"];
    protected $primaryKey ='id_histori';
}
