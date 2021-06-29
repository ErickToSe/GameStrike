<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

/*   INICIA PARTE DE VERIFICACION EMAIL*/

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->route('index');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

/*   TERMINA PARTE DE VERIFICACION EMAIL*/

/*   PUBLIC ROUTES    */
Route::get('/Categoria/{genero}', [GeneroController::class, 'show'])->name('games');
Route::get('/', [GeneroController::class, 'index'])->name('index');
Route::resource('genero', GeneroController::class);

/*   ADMIN ROUTES    */
Route::get('/Juego/Editar-Juego', [JuegoController::class, 'edit'])->name('juego.editGame');
Route::post('/Juego/Editar-Juego/update', [JuegoController::class, 'updateGame'])->name('juego.updateGame');
Route::post('/Juego/Agregar-Juego/store', [JuegoController::class, 'store'])->name('juego.store');
Route::get('/Juego/Agregar-Juego', [JuegoController::class, 'create'])->name('add-new-game');
Route::post('/Juego/{juego}/destroy', [JuegoController::class, 'destroy'])->name('juego.delete');
/*   PUBLIC ROUTES    */
Route::get('/Juegos', [JuegoController::class, 'index'])->name('all-games');
Route::get('/Juego/{juego}', [JuegoController::class, 'showResegnas'])->name('game-profile');
Route::resource('juego', JuegoController::class);

/*   ADMIN ROUTES    */
Route::post('/juego/resegna/destroy', [ResegnaController::class, 'destroy'])->name('resegna.delete');
/*   USERS ROUTES    */
Route::post('/resegna.store', [ResegnaController::class, 'store'])->name('resegna.store')->middleware('auth');;
Route::get('/Juego/{juego}/Nueva-Resegna', [ResegnaController::class, 'create'])->name('formulario-reseña')->middleware('auth');;

Route::resource('resegna', ResegnaController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [GeneroController::class, 'index'])->name('dashboard');