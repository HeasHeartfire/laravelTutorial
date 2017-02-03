<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CatalogController extends Controller
{
	public function index() {
        $peliculas = Movie::all();
    	return view('catalog.index', array('arrayPeliculas'=>$peliculas));
    }

    public function show($id) {
        $peli = Movie::find($id);
    	return view('catalog.show', array('pelicula'=>$peli, 'id'=>$id));
    }

    public function create() {
    	return view('catalog.create');
    }

    public function edit($id) {
    	return view('catalog.edit', array('id'=>$id));
    }

    public function update(Request $request, $id) {
        $peli = Movie::find($id);

        if($request->has("title") && $request->has("year") && $request->has("director") && $request->has("poster") && $request->has("synopsis")) {
            $peli->title    = $request->input('title');
            $peli->year     = $request->input('year');
            $peli->director = $request->input('director');
            $peli->poster   = $request->input('poster');
            $peli->synopsis = $request->input('synopsis');
            $peli->rented   = false;

            if($request->has("rented")) $peli->rented = true;

            $peli->save();
            return 'Película modificada correctamente.<br><a href="'.url('/catalog/'.$peli->id).'">Volver a la película</a>';
        } else {
            return 'No puedes dejar campos vacíos.<br><a href="'.url('/catalog/'.$peli->id.'/edit').'">Reintentar</a>';
        }
    }

    public function store(Request $request) {
        $peli = new Movie();

        if($request->has("title") && $request->has("year") && $request->has("director") && $request->has("poster") && $request->has("synopsis")) {
            $peli->title    = $request->input('title');
            $peli->year     = $request->input('year');
            $peli->director = $request->input('director');
            $peli->poster   = $request->input('poster');
            $peli->synopsis = $request->input('synopsis');
            $peli->rented   = false;

            if($request->has("rented")) $peli->rented = true;

            $peli->save();
            return 'Película guardada correctamente.<br><a href="/catalog">Volver al catálogo</a>';
        } else {
            return 'No puedes dejar campos vacíos.<br><a href="'.url('/catalog/'.$peli->id.'/edit').'">Reintentar</a>';
        }
    }

}