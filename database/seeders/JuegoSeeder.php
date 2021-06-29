<?php

namespace Database\Seeders;

use App\Models\juego;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class JuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
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

        juego::create(
            [
                'name' => 'Halo 3',
                'sinopsis' => ' Toma el control del Spartan 117 y termina la lucha contra el Covenant y la amenaza de los Flood de una vez por todas.',
                'image_route' => 'images\gameImages\juego_1.jpg',
                'desarrolladora' => 'Bungie Studios'
            ]
        );
        
        juego::create(
            [
                'name' => 'Halo Reach',
                'sinopsis' => 'El juego transcurre en el año 2552, donde la humanidad mantiene una guerra con el Covenant. El jugador controla a un nuevo personaje llamado Noble 6, un super soldado miembro del Equipo «Noble» durante la batalla en la colonia humana de Reach.',
                'image_route' => 'images\gameImages\juego_2.jpg',
                'desarrolladora' => 'Bungie Studios'
            ]
        );

        juego::create(
            [
                'name' => 'Halo 5',
                'sinopsis' => 'Ocho meses después de la destrucción del mundo escudo Requiem, la UNSC desplegó el Equipo de Fuego Osiris, un equipo de élite de los Spartan-IV en el planeta Kamchatka controlado por el nuevo Covenant para extraer a la doctora Catherine Elizabeth Halsey, que desea despertar de nuevo al Consejo de Seguridad.',
                'image_route' => 'images\gameImages\juego_3.jpg',
                'desarrolladora' => '343 Industries'
            ]
        );

        juego::create(
            [
                'name' => 'The Sims 4',
                'sinopsis' => 'El jugador controla la vida de uno o más personajes, satisfaciendo sus deseos y necesidades. La acción tiene lugar en una ciudad que consta de lotes residenciales y públicos que está habitada por Sims.',
                'image_route' => 'images\gameImages\juego_4.jpg',
                'desarrolladora' => 'Maxis Label, EA Salt Lake, The Sims Studio'
            ]
        );

        juego::create(
            [
                'name' => 'Resident Evil Village',
                'sinopsis' => 'La hija de los Winters, Rosemary, es secuestrada por unos individuos, lo que obliga a Ethan a viajar al pueblo, un lugar donde ocurren extraños sucesos por la región con la aparición de extrañas criaturas y el control del castillo por la familia Dimitrescu quienes tienen extrañas habilidades.',
                'image_route' => 'images\gameImages\juego_5.jpg',
                'desarrolladora' => 'Capcom'
            ]
        );

        juego::create(
            [
                'name' => 'Resident Evil 6',
                'sinopsis' => 'En el año 2013, el presidente de los Estados Unidos, Adam Benford, ha decidido revelar oficialmente la verdad sobre el incidente de Raccoon City en 1998, creyendo que va a frenar de alguna manera un posible ataque bioterrorista.',
                'image_route' => 'images\gameImages\juego_6.jpg',
                'desarrolladora' => 'Capcom'
            ]
        );

        juego::create(
            [
                'name' => 'Resident Evil 3',
                'sinopsis' => 'El 28 de septiembre del año 1998, 24 horas antes de los eventos de Resident Evil 2, la exmiembro del Servicio de Tácticas Especiales y Rescate (STARS), Jill Valentine, intenta escapar de Raccoon City.',
                'image_route' => 'images\gameImages\juego_7.jpg',
                'desarrolladora' => 'Capcom'
            ]
        );

        juego::create(
            [
                'name' => 'Age of Empires II Definitive Edition',
                'sinopsis' => 'El jugador puede optar entre 13 civilizaciones que existieron en el período histórico de la Edad Media, y debe encaminarlas para formar un vasto imperio y vencer a sus enemigos.',
                'image_route' => 'images\gameImages\juego_8.jpg',
                'desarrolladora' => 'Forgotten Empires, Tantalus Media, Wicked Witch'
            ]
        );

        juego::create(
            [
                'name' => 'Rule of Rose',
                'sinopsis' => 'Jennifer es una joven de 19 años que llega a un orfanato, tras perseguir a un extraño niño que le pide que le lea un cuento en el autobús (aunque el libro tiene las páginas en blanco). Tras pasar por diversas situaciones violentas, traumatizantes y humillantes, se define el argumento del juego.',
                'image_route' => 'images\gameImages\juego_9.jpg',
                'desarrolladora' => 'Punchline'
            ]
        );

        juego::create(
            [
                'name' => 'Silent Hill',
                'sinopsis' => 'El juego sigue a Harry Mason mientras busca a su hija en el pueblo de Silent Hill.',
                'image_route' => 'images\gameImages\juego_10.jpg',
                'desarrolladora' => 'Team Silent'
            ]
        );

        juego::create(
            [
                'name' => 'Ark Survival Evolved',
                'sinopsis' => 'Los jugadores deben sobrevivir en un mundo lleno de dinosaurios y otros animales prehistóricos que deambulan por el mapa, peligros naturales y otros jugadores potencialmente hostiles.',
                'image_route' => 'images\gameImages\juego_11.jpg',
                'desarrolladora' => 'Studio Wildcard, Instinct Games, Efecto Studios'
            ]
        );

        juego::create(
            [
                'name' => 'Mario Kart 8 Deluxe',
                'sinopsis' => 'Es la undécima entrega de la serie Mario Kart, novena en consolas de Nintendo, lanzado mundialmente el 28 de abril de 2017. Cuenta con todo lo visto previamente en Mario Kart 8. Aunque no incluye nuevas pistas de carreras,1​incluye nuevos personajes y un mejorado modo batalla.',
                'image_route' => 'images\gameImages\juego_12.jpg',
                'desarrolladora' => 'Nintendo'
            ]
        );

        juego::create(
            [
                'name' => 'Super Smash Bros. Ultimate',
                'sinopsis' => 'Super Smash Bros. Ultimate, como otros videojuegos de la serie Super Smash Bros., presenta un crossover de luchadores de diferentes franquicias de Nintendo.',
                'image_route' => 'images\gameImages\juego_13.jpg',
                'desarrolladora' => 'Bandai Namco Studios, Sora Ltd'
            ]
        );

        juego::create(
            [
                'name' => 'Mortal Kombat 11',
                'sinopsis' => 'Es la undécima entrega principal de la serie Mortal Kombat y una secuela de 2015 Mortal Kombat X.',
                'image_route' => 'images\gameImages\juego_14.jpg',
                'desarrolladora' => 'NetherReal Studios'
            ]
        );

        juego::create(
            [
                'name' => 'Forza Horizon 4',
                'sinopsis' => 'Esta es la cuarta entrega de la serie Forza Horizon y la undécima en la saga Forza y está ambientado en Reino Unido.',
                'image_route' => 'images\gameImages\juego_15.jpg',
                'desarrolladora' => 'Playground Games, Turn 10 Studios'
            ]
        );

        juego::create(
            [
                'name' => 'The Elder Scrolls V Skyrim',
                'sinopsis' => 'La historia de Skyrim se centra en los esfuerzos del personaje, dovahkiin (sangre de dragón), para derrotar a Alduin, un dragón/dovah que, según la profecía, destruirá el mundo.',
                'image_route' => 'images\gameImages\juego_16.jpg',
                'desarrolladora' => 'Bethesda Game Studios'
            ]
        );

        juego::create(
            [
                'name' => 'Crash Bandicoot N~Sane Trilogy',
                'sinopsis' => 'Un marsupial mutante que debe atravesar varios niveles para detener al malvado Dr. Neo Cortex.',
                'image_route' => 'images\gameImages\juego_17.jpg',
                'desarrolladora' => 'Naughty Dog, Vicarious Visions'
            ]
        );

        juego::create(
            [
                'name' => 'kingdom Hearts Melody of Memory',
                'sinopsis' => 'Tras la desaparición de Sora, Kairi entra en un sueño profundo bajo la observación de Ansem el Sabio , creando un mundo de sueños a partir de sus recuerdos de Sora para buscar pistas sobre su paradero dentro de su propio corazón.',
                'image_route' => 'images\gameImages\juego_18.jpg',
                'desarrolladora' => 'Square Enix, Indieszero'
            ]
        );

        juego::create(
            [
                'name' => 'kingdom Hearts',
                'sinopsis' => 'El juego combina personajes y escenarios de los dibujos animados de Disney con los de la saga Final Fantasy, desarrollada por Square. La historia se centra en un joven llamado Sora, quien se adentra en una épica batalla en contra de la oscuridad.',
                'image_route' => 'images\gameImages\juego_19.jpg',
                'desarrolladora' => 'Square Enix'
            ]
        );

        juego::create(
            [
                'name' => 'Guitar Hero III',
                'sinopsis' => 'El jugador debe acertar ciertas notas que aparecen en la pantalla deslizándose a la parte inferior de forma simultánea y debe sincronizar el ritmo del juego con la música que se escucha al fondo para mantener una melodía constante y ganar así puntos.',
                'image_route' => 'images\gameImages\juego_20.jpg',
                'desarrolladora' => 'Neversoft, Aspyr Media, Budcat Creations, Vicarious Visions'
            ]
        );

        juego::create(
            [
                'name' => 'Fire Emblem Three Houses',
                'sinopsis' => 'El jugador asume el rol de Byleth, y puede elegir su nombre y género. Una vez parte de un grupo de mercenarios liderado por su padre Jeralt, a Byleth se le ofrece un puesto para enseñar en la academia después de un incidente inesperado.',
                'image_route' => 'images\gameImages\juego_21.jpg',
                'desarrolladora' => 'Intlligent Systems, Koei Tecmo'
            ]
        );

        juego::create(
            [
                'name' => 'Final Fantasy VIII Remastered',
                'sinopsis' => 'En el mundo de Final Fantasy VIII existen ciertas academias, llamadas jardines, especializadas en la formación de determinado tipo de soldados, llamados SeeD, en el continente de Balamb se encuentra el más antiguo e importante de los jardines, en él se encuentra el aspirante a SeeD, y protagonista de la historia, Squall Leonheart.',
                'image_route' => 'images\gameImages\juego_22.jpg',
                'desarrolladora' => 'Square Enix'
            ]
        );

        juego::create(
            [
                'name' => 'Fifa 21',
                'sinopsis' => 'Fifa...',
                'image_route' => 'images\gameImages\juego_23.jpg',
                'desarrolladora' => 'Electronic Arts, EA Vancouver'
            ]
        );
    }
}
