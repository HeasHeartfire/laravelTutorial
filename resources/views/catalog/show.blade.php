@extends('layouts.master')

@section('content')

    <div class="row">
	    <div class="col-sm-4">
			
			<h2>{{$pelicula['title']}}</h2>
	        <img src="{{$pelicula['poster']}}"/>

	    </div>
	    <div class="col-sm-8">

	        {{-- TODO: Datos de la película --}}

	    </div>
	</div>

@endsection