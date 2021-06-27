<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GeneroController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\ResegnaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/formulario', function () {
    return view('formulario-reseña');
});

Route::get('/categoriaTest', function () {
    return view('games');
});

Route::get('/newGameTest', function () {
    return view('add-new-game');
});

Route::get('/Categoria/{genero}', [GeneroController::class, 'show'])->name('games');
Route::get('/', [GeneroController::class, 'index'])->name('index');
Route::resource('genero', GeneroController::class);

Route::get('/Juego/{juego}', [JuegoController::class, 'showResegnas'])->name('game-profile');
Route::resource('juego', JuegoController::class);

Route::resource('resegna', ResegnaController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');