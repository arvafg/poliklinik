<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{

    protected $table = 'operator';
    protected $fillable = ['nama','jenis_kelamin','tanggal_lahir','user_name','password'];
}
