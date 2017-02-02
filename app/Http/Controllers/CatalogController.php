<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class CatalogController extends Controller
{
	public function index() {
    	return view('catalog.index', array('arrayPeliculas'=>$this->arrayPeliculas));
    }

    public function show($id) {
    	return view('catalog.show', array('pelicula'=>$this->arrayPeliculas[$id], 'id'=>$id));
    }

    public function create() {
    	return view('catalog.create');
    }

    public function edit($id) {
    	return view('catalog.edit', array('id'=>$id));
    }

}