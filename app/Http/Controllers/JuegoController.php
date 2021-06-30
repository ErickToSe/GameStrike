<?php

namespace App\Http\Controllers;

use App\Models\juego;
use App\Models\genero;
use App\Models\resegna;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juegos = juego::all();
        return view('all-games', compact('juegos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('admin-functions');
        return view('add-new-game');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('admin-functions');
        $request->validate([
            'name' => ['required','min:2','max:255'],
            'desarrolladora' => ['required','min:2','max:255'],
            'sinopsis' => ['required','min:5','max:1000'],
        ]);
        $allGeneros = genero::with('juegos')->get();
        $newJuego = new juego();
        $newJuego->name = $request->name;
        $newJuego->sinopsis = $request->sinopsis;
        $newJuego->desarrolladora = $request->desarrolladora;

        if($request->hasFile('image_route')){
            $image_route = $request->file('image_route')->store('images\gameImages');
            $newJuego->image_route = $image_route;
        }

        $newJuego->save();
        
        if($request->has('Accion')){
            $newJuego->generos()->attach(1);
        }
        if($request->has('Aventura')){
            $newJuego->generos()->attach(2);
        }
        if($request->has('Rol')){
            $newJuego->generos()->attach(3);
        }
        if($request->has('Simulacion')){
            $newJuego->generos()->attach(4);
        }
        if($request->has('Terror')){
            $newJuego->generos()->attach(5);
        }
        if($request->has('Plataformas')){
            $newJuego->generos()->attach(6);
        }
        if($request->has('Disparos')){
            $newJuego->generos()->attach(7);
        }
        if($request->has('Peleas')){
            $newJuego->generos()->attach(8);
        }
        if($request->has('Musical')){
            $newJuego->generos()->attach(9);
        }
        if($request->has('Estrategia')){
            $newJuego->generos()->attach(10);
        }
        if($request->has('Deportes')){
            $newJuego->generos()->attach(11);
        }
        if($request->has('Carreras')){
            $newJuego->generos()->attach(12);
        }
        return redirect()->route('index', compact('allGeneros'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    public function showResegnas(juego $juego)
    {
        $resegnas = resegna::get();
        return view('game-profile', compact('juego', 'resegnas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, juego $juego)
    {
        Gate::authorize('admin-functions');
        $data = juego::find($request->id);
        return view('edit-game', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function updateGame(Request $request)
    {
        Gate::authorize('admin-functions');
        $request->validate([
            'name' => ['required','min:2','max:255'],
            'desarrolladora' => ['required','min:2','max:255'],
            'sinopsis' => ['required','min:5','max:1000'],
        ]);
        $resegnas = resegna::get();
        $juego = juego::find($request->id);
        if($request->hasFile('image_route')) {
            $image_route = $request->file('image_route')->store('images\gameImages');
            $juego->image_route = $image_route;
        }
        $juego->update($request->except('image_route', '_token', '_method'));
        if($request->has('Accion')){
            $juego->generos()->attach(1);
        } else {
            $juego->generos()->detach(1);
        }
        if($request->has('Aventura')){
            $juego->generos()->attach(2);
        } else {
            $juego->generos()->detach(2);
        }
        if($request->has('Rol')){
            $juego->generos()->attach(3);
        }  else {
            $juego->generos()->detach(3);
        }
        if($request->has('Simulacion')){
            $juego->generos()->attach(4);
        } else {
            $juego->generos()->detach(4);
        }
        if($request->has('Terror')){
            $juego->generos()->attach(5);
        } else {
            $juego->generos()->detach(5);
        }
        if($request->has('Plataformas')){
            $juego->generos()->attach(6);
        } else {
            $juego->generos()->detach(6);
        }
        if($request->has('Disparos')){
            $juego->generos()->attach(7);
        } else {
            $juego->generos()->detach(7);
        }
        if($request->has('Peleas')){
            $juego->generos()->attach(8);
        } else {
            $juego->generos()->detach(8);
        }
        if($request->has('Musical')){
            $juego->generos()->attach(9);
        } else {
            $juego->generos()->detach(9);
        }
        if($request->has('Estrategia')){
            $juego->generos()->attach(10);
        } else {
            $juego->generos()->detach(10);
        }
        if($request->has('Deportes')){
            $juego->generos()->attach(11);
        } else {
            $juego->generos()->detach(11);
        }
        if($request->has('Carreras')){
            $juego->generos()->attach(12);
        } else {
            $juego->generos()->detach(12);
        }
        return redirect()->route('game-profile', compact('juego', 'resegnas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function destroy(juego $juego)
    {
        Gate::authorize('admin-functions');
        $allGeneros = genero::with('juegos')->get();
        $juego->isDeleted = true;
        $juego->save();
        return redirect()->route('index', compact('allGeneros'));
    }
}
