<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Genero_JuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
            1 - Accion
            2 - Aventura
            3 - Rol
            4 - Simulacion
            5 - Terror
            6 - Plataformas
            7 - Disparos
            8 - Peleas
            9 - Musical
            10 - Estrategia
            11 - Deportes
            12 - Carreras 
    
            1 - Halo 3
            2 - Halo Reach
            3 - Halo 5
            4 - The Sims 4
            5 - Resident Evil Village
            6 - Resident Evil 6
            7 - Resident Evil 3
            8 - Age of Empires II Definitive Edition
            9 - Rule of Rose
            10 - Silent Hill
            11 - Ark Survival Evolved
            12 - Mario Kart 8 Deluxe
            13 - Super Smash Bros. Ultimate
            14 - Mortal Kombat 11
            15 - Forza Horizon 4 
            16 - The Elder Scrolls V Skyrim
            17 - Crash Bandicoot N~Sane Trilogy
            18 - kingdom Hearts Melody of Memory
            19 - kingdom Hearts
            20 - Guitar Hero III
            21 - Fire Emblem Three Houses
            22 - Final Fantasy VIII Remastered
            23 - Fifa 21
        */

        // Accion games
        DB::table('genero_juego')->insert(['genero_id' => '1', 'juego_id' => '1']);
        DB::table('genero_juego')->insert(['genero_id' => '1', 'juego_id' => '2']);
        DB::table('genero_juego')->insert(['genero_id' => '1', 'juego_id' => '3']);
        DB::table('genero_juego')->insert(['genero_id' => '1', 'juego_id' => '5']);
        DB::table('genero_juego')->insert(['genero_id' => '1', 'juego_id' => '6']);
        DB::table('genero_juego')->insert(['genero_id' => '1', 'juego_id' => '7']);
        DB::table('genero_juego')->insert(['genero_id' => '1', 'juego_id' => '11']);
        DB::table('genero_juego')->insert(['genero_id' => '1', 'juego_id' => '19']);
        //Adventur games
        DB::table('genero_juego')->insert(['genero_id' => '2', 'juego_id' => '11']);
        DB::table('genero_juego')->insert(['genero_id' => '2', 'juego_id' => '16']);
        DB::table('genero_juego')->insert(['genero_id' => '2', 'juego_id' => '17']);
        DB::table('genero_juego')->insert(['genero_id' => '2', 'juego_id' => '19']);
        DB::table('genero_juego')->insert(['genero_id' => '2', 'juego_id' => '22']);
        //Rol games
        DB::table('genero_juego')->insert(['genero_id' => '3', 'juego_id' => '4']);
        DB::table('genero_juego')->insert(['genero_id' => '3', 'juego_id' => '8']);
        DB::table('genero_juego')->insert(['genero_id' => '3', 'juego_id' => '16']);
        DB::table('genero_juego')->insert(['genero_id' => '3', 'juego_id' => '21']);
        DB::table('genero_juego')->insert(['genero_id' => '3', 'juego_id' => '22']);
        //Simulation games
        DB::table('genero_juego')->insert(['genero_id' => '4', 'juego_id' => '4']);
        DB::table('genero_juego')->insert(['genero_id' => '4', 'juego_id' => '8']);
        //Horror games
        DB::table('genero_juego')->insert(['genero_id' => '5', 'juego_id' => '5']);
        DB::table('genero_juego')->insert(['genero_id' => '5', 'juego_id' => '6']);
        DB::table('genero_juego')->insert(['genero_id' => '5', 'juego_id' => '7']);
        DB::table('genero_juego')->insert(['genero_id' => '5', 'juego_id' => '9']);
        DB::table('genero_juego')->insert(['genero_id' => '5', 'juego_id' => '10']);
        //Platforms games
        DB::table('genero_juego')->insert(['genero_id' => '6', 'juego_id' => '17']);
        //Shooter games
        DB::table('genero_juego')->insert(['genero_id' => '7', 'juego_id' => '1']);
        DB::table('genero_juego')->insert(['genero_id' => '7', 'juego_id' => '2']);
        DB::table('genero_juego')->insert(['genero_id' => '7', 'juego_id' => '3']);
        //fight games
        DB::table('genero_juego')->insert(['genero_id' => '8', 'juego_id' => '13']);
        DB::table('genero_juego')->insert(['genero_id' => '8', 'juego_id' => '14']);
        //Music games
        DB::table('genero_juego')->insert(['genero_id' => '9', 'juego_id' => '18']);
        DB::table('genero_juego')->insert(['genero_id' => '9', 'juego_id' => '20']);
        //strategy games
        DB::table('genero_juego')->insert(['genero_id' => '10', 'juego_id' => '8']);
        DB::table('genero_juego')->insert(['genero_id' => '10', 'juego_id' => '21']);
        DB::table('genero_juego')->insert(['genero_id' => '10', 'juego_id' => '22']);
        //Sports games
        DB::table('genero_juego')->insert(['genero_id' => '11', 'juego_id' => '15']);
        DB::table('genero_juego')->insert(['genero_id' => '11', 'juego_id' => '23']);
        //Race Games
        DB::table('genero_juego')->insert(['genero_id' => '12', 'juego_id' => '12']);
        DB::table('genero_juego')->insert(['genero_id' => '12', 'juego_id' => '15']);
    }
}
