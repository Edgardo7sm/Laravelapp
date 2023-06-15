<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('peli.index')->with('peliculas',$peliculas);
    }

    /**
     * Show the form for creating a new resource.
     */
   
    public function create()
    {
        return view('peli.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $peliculas = new Pelicula();
       $peliculas->id = $request->get('id');
       $peliculas->nombre = $request->get('nombre');
       $peliculas->publicacion = $request->get('publicacion');
       $peliculas->estado = $request->get('estado');

       $peliculas->save();
       
       return redirect('/peliculas');
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
        $pelicula = Pelicula::find($id);
        return view('peli.edit')->with('pelicula',$pelicula);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $pelicula = Pelicula::find($id);

       $pelicula->nombre = $request->get('nombre');
       $pelicula->publicacion = $request->get('publicacion');
       $pelicula->estado = $request->get('estado');

       $pelicula->save();
       
       return redirect('/peliculas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelicula = Pelicula::find($id);

        $pelicula->delete();

        return redirect('/peliculas');
    }
}
