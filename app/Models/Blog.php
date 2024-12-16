<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $fillable = ["judul_blog","deskripsi","url_foto"];
    protected $primaryKey ='id_blog';
}
