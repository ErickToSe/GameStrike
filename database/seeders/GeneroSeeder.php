<?php

namespace Database\Seeders;

use App\Models\genero;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        genero::create(['name' => 'Accion', 'image_path' => 'images\genreImages\Accion.jpg']);
        genero::create(['name' => 'Aventura', 'image_path' => 'images\genreImages\Aventura.jpg']);
        genero::create(['name' => 'Rol', 'image_path' => 'images\genreImages\Rol.jpg']);
        genero::create(['name' => 'Simulación', 'image_path' => 'images\genreImages\Simulación.jpg']);
        genero::create(['name' => 'Terror', 'image_path' => 'images\genreImages\Terror.jpg']);
        genero::create(['name' => 'Plataformas', 'image_path' => 'images\genreImages\Plataformas.jpg']);
        genero::create(['name' => 'Disparos', 'image_path' => 'images\genreImages\Disparos.jpg']);
        genero::create(['name' => 'Peleas', 'image_path' => 'images\genreImages\Peleas.jpg']);
        genero::create(['name' => 'Musical', 'image_path' => 'images\genreImages\Musical.jpg']);
        genero::create(['name' => 'Estrategia', 'image_path' => 'images\genreImages\Estrategia.jpg']);
        genero::create(['name' => 'Deportes', 'image_path' => 'images\genreImages\Deportes.jpg']);
        genero::create(['name' => 'Carreras', 'image_path' => 'images\genreImages\Carreras.jpg']);
    }
}
