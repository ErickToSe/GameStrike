<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
    use HasFactory;

    public function juegos()
    {
        return $this->belongsToMany(juego::class);
    }
}
