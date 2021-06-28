<?php

namespace App\Http\Controllers;

use App\Models\resegna;
use App\Models\juego;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResegnaController extends Controller
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
    public function create(juego $juego)
    {
        return view('formulario-reseña', compact('juego'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['user_id' => Auth::id()]);
        resegna::create($request->all());
        return redirect()->route('game-profile', $request->juego_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\resegna  $resegna
     * @return \Illuminate\Http\Response
     */
    public function show(resegna $resegna)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\resegna  $resegna
     * @return \Illuminate\Http\Response
     */
    public function edit(resegna $resegna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\resegna  $resegna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, resegna $resegna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\resegna  $resegna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        resegna::find($request->id)->update(['isDeleted'=>true]);
        return redirect()->route('game-profile', resegna::findOrFail($request->id)->juego_id);
    }
}
