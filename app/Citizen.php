<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    protected $fillable = ['nama_penduduk', 'no_kk', 'nik', 'alamat'];
}
