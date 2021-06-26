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
        genero::create(['name' => 'Accion']);
        genero::create(['name' => 'Aventura']);
        genero::create(['name' => 'Rol']);
        genero::create(['name' => 'Simulación']);
        genero::create(['name' => 'Terror']);
        genero::create(['name' => 'Plataformas']);
        genero::create(['name' => 'Disparos']);
        genero::create(['name' => 'Peleas']);
        genero::create(['name' => 'Musical']);
        genero::create(['name' => 'Estrategia']);
        genero::create(['name' => 'Deportes']);
        genero::create(['name' => 'Carreras']);
    }
}
