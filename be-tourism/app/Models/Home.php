<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'home';
    protected $primaryKey = 'id';

    protected $fillable = [
        'top_destinasi_id',
    ];

    // Relasi ke TopDestinasi
    public function topDestinasi()
    {
        return $this->belongsTo(TopDestinasi::class, 'top_destinasi_id');
    }
}
