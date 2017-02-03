@extends('layouts.master')

@section('content')

    <div class="row">
	    <div class="col-sm-4">	
	        <img src="{{$pelicula->poster}}"/>
	    </div>
	    <div class="col-sm-8">
			
        	<h2>{{$pelicula->title}}</h2>
        	<h4>Año: {{$pelicula->year}}</h4>
        	<h4>Director: {{$pelicula->director}}</h4>
        	<p><b>Resumen:</b> {{$pelicula->synopsis}}</p>
        	<p><b>Estado:</b> 
				@if ($pelicula->rented) Película ya alquilada</p>
				<button class="btn btn-danger">Devolver Película</button>
				@else Película disponible</p>
				<button class="btn btn-primary">Alquilar Película</button>
				@endif
			<a class="btn btn-warning" href="{{ url('/catalog/'.$pelicula->id.'/edit') }}"><span class="glyphicon glyphicon-pencil"></span> Editar Película</a>
			<a class="btn btn-default" href="{{ url('/catalog') }}"><span class="glyphicon glyphicon-chevron-left"></span> Volver al listado</a>
	    </div>
	</div>

@endsection