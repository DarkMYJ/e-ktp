<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'cards_id',
        'jenis_kelamin',
        'alamat',
        'agama',
        'status_kawin',
        'status_kerja',
        'kewarganegaraan',
        'city-created_at'
    ];
}
