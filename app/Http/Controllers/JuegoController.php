<?php

namespace App\Http\Controllers;

use App\Models\juego;
use App\Models\resegna;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
