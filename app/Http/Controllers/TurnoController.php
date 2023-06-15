<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Models\Turnos;

class TurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $turnos = Turnos::all();
        return view ('turn.index')->with('turnos',$turnos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('turn.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $turnos = new Turnos();

        $turnos->codigo = $request->get('codigo');
        $turnos->hora = $request->get('hora');
        $turnos->estado = $request->get('estado');

        $turnos->save();
        return redirect('/turnos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $turno = Turnos::find($id);
        return view('turn.edit')->with('turno',$turno);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $turno = Turnos::find($id);

        $turno->codigo = $request->get('codigo');
        $turno->hora = $request->get('hora');
        $turno->estado = $request->get('estado');

        $turno->save();

        return redirect('/turnos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $turno = Turnos::find($id);

        $turno->delete();

        return redirect('/turnos');
    }
}
