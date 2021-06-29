<?php

namespace App\Http\Controllers;

use App\Models\resegna;
use App\Models\juego;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ResegnaController extends Controller
{
    /*private $rules;
    
    public function __cosntruct(){
        $this->rules = [
            
    }*/

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
        $request->validate([
            'contenido' => ['required','min:5','max:255'],
        ]);
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
        Gate::authorize('admin-functions');
        $data = resegna::find($request->id);
        $data->isDeleted = true;
        $data->save();
        return redirect()->route('game-profile', $data->juego_id);
    }
}
