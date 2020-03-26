<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    protected $table = 'periksa';
    protected $fillable = ['id_pasien','id_dokter','keluhan'];
}
