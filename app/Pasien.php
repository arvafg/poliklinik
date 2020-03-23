<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';
    protected $fillable = ['nama','jenis_kelamin','tanggal_lahir','alamat','no_telp'];
}
