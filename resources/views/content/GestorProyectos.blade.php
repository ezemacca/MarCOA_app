@extends('layouts.default')

@section('title','portafolio')

@section('content')

<h1>@lang('Proyectos de ') {{Auth::user()->name}}</h1>

<div>
	<form action="{{route('creacion')}}" role="button">

		<button>Crear Nuevo Proyecto</button>
	</form>
</div>

<br>
<br>
@forelse($portafolio as $proyecto)
@if($proyecto['user_id'] == Auth::user()->id )
<ul>
	<li>
		{{$proyecto['titulo']}}

		&nbsp; 
		{{-- Non Breaking Space --}}

		{{$proyecto['descripcion']}}
		&nbsp; 
		<a href="{{route('principal', $proyecto)}}"> Continuar con el proyecto</a>
		<a href="">Eliminar</a>

		<br> 
		<br>


	</li>
</ul>
@endif

@empty

<li> No hay proyectos para mostrar</li>

@endforelse