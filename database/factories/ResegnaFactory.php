<?php

namespace Database\Factories;

use App\Models\resegna;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ResegnaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = resegna::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 2),
            'juego_id' => $this->faker->numberBetween(1, 23),
            'contenido' => Str::random(50),
            'calificacion' => $this->faker->numberBetween(0, 10)
        ];
    }
}
