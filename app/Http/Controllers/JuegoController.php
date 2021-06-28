<?php

namespace App\Http\Controllers;

use App\Models\juego;
use App\Models\genero;
use App\Models\resegna;
use App\Models\User;
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
        $allGeneros = genero::all();
        $newJuego = new juego();
        $newJuego->name = $request->name;
        $newJuego->sinopsis = $request->sinopsis;
        $newJuego->desarrolladora = $request->desarrolladora;
        $newJuego->image_route = $request->image_route;
        ///$newJuego->generos->attach($request->category_id);
        $newJuego->save();
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
    public function edit(juego $juego)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, juego $juego)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function destroy(juego $juego)
    {
        $allGeneros = genero::all();
        $juego->isDeleted = true;
        $juego->save();
        return redirect()->route('index', compact('allGeneros'));
    }
}
