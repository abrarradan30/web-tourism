<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    protected $table = 'destinasi';

    protected $fillable =
    [
        'nama',
        'deskripsi',
        'lokasi',
        'gambar',
        'kategori',
        'status'
    ];

    public $timestamps = false;
}
