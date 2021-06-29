<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class juego extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'desarrolladora', 'image_route', 'sinopsis'];
    public function resegnas()
    {
        return $this->hasMany(resegna::class);
    }

    public function generos()
    {
        return $this->belongsToMany(genero::class);
    }

    protected $appends = [
        'image_route',
    ];
}
