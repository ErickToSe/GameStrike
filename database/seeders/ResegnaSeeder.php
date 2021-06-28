<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ResegnaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\resegna::factory(150)->create();
    }
}
