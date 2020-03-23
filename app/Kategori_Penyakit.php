<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_Penyakit extends Model
{
    protected $table = 'kategori_penyakit';
    protected $fillable = ['nama'];
}
