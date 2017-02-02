@extends('layouts.master')

@section('content')

    <div class="row">
	    <div class="col-sm-4">	
	        <img src="{{$pelicula['poster']}}"/>
	    </div>
	    <div class="col-sm-8">
			
	        	<h2>{{$pelicula['title']}}</h2>
	        	<h4>Año: {{$pelicula['year']}}</h4>
	        	<h4>Director: {{$pelicula['director']}}</h4>
	        	<p><strong>Resumen:</strong> {{$pelicula['synopsis']}}</p>
	        	<p><strong>Estado:</strong> 
	        				@if ($pelicula['rented']) Película ya alquilada
	        				@else Película disponible
	        				@endif</p>
	    </div>
	</div>

@endsection