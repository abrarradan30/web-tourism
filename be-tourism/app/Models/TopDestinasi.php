<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopDestinasi extends Model
{
    //
    protected $table= "top_destinasi";

    protected $primarykey = 'id';

    protected $fillable=[
        'nama_destinasi',
        'kategori_id',
        'gambar_destinasi',
        'artikel',
        'highlight_deskripsi',
        'rating',
    ];

    public function homes()			
    {			
    return $this->hasMany(Home::class, 'top_destinasi_id');			
    }			
}
