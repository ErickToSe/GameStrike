<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateGeneroJuegoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genero_juego', function (Blueprint $table) {
            $table->id();
            $table->foreignId('genero_id')->constrained();
            $table->foreignId('juego_id')->constrained()->onDelete('cascade');
            $table->boolean('isDeleted')->default(false);
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genero_juego');
    }
}
