@extends('layouts.default')

@section('content')
<br>
<br>
<h1>@lang('Proyectos de ') {{Auth::user()->name}}</h1>
<br>
<br>
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
		<a href="{{route('principal', $proyecto)}}"> Abrir proyecto</a>
		

		<br> 
		<br>


	</li>
</ul>
@endif

@empty

<li> No hay proyectos para mostrar</li>

@endforelse