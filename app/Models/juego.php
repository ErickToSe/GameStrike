<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class juego extends Model
{
    use HasFactory;

    public function resegnas()
    {
        return $this->hasMany(resegna::class);
    }

    public function generos()
    {
        return $this->hasMany(genero::class);
    }
}
