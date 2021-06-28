<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resegna extends Model
{
    use HasFactory;

    protected $fillable = ['juego_id', 'user_id', 'contenido', 'calificacion'];

    public function juego()
    {
        return $this->belongsTo(juego::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
