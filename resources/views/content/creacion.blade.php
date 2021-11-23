@extends('layouts.default')

@section('content')
<div class="container-fluid">	
	<div class="row text-center">
		<div class="container-fluid titulo">
			<p>MarCOA</p>
		</div>
		<div class="container-fluid sub-titulo">
			<b>Mar</b>co para la <b>C</b>reación de <b>O</b>bjetos de <b>A</b>prendizaje
		</div>
	</div>
</div>

<div class="container-fluid">
		<!--<div class="row">
			<div class="col text-center">		
				<h1>CREACIÓN DE UN PROYECTO DE OA</h1>
			</div>	
		</div>-->	
		<div class="row">
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#ayuda">
					<svg class="bi bi-question-circle-fill a-marcoa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.57 6.033H5.25C5.22 4.147 6.68 3.5 8.006 3.5c1.397 0 2.673.73 2.673 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.355H7.117l-.007-.463c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.901 0-1.358.603-1.358 1.384zm1.251 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
					</svg>
				</a>
			</div>
		</div>
	</div>
	@include('includes/errores')


	<div class="conteniner-fluid creacion">
		<form method="POST" action="{{ route('GestorProyectos.store') }}"> 
			{{-- La acción debe llevar al create de GestorProyectos --}}
			@csrf

			<div class="row justify-content-center">
				<div class="col-sm-8">
					<div class="form-group">
						<input type="text" class="form-control" name="nom_proy" id="nom_proy" value="{{ old('nom_proy') }}" aria-describedby="aclaracion" placeholder="Nombre de nuevo proyecto" required>
						<label>
							<br>
							<br>
							<textarea name="desc_proy" placeholder="Descripcion" ></textarea>
						</label>
						<br>
						<!--<small class="form-text text-muted" id="aclaracion">El nombre debe ...</small>-->
					</div>
				</div>
				<div class="col-sm-2">
					<div class="form-group">
						<!--<button type="submit" class="btn btn-secondary">CREAR</button>-->
						{{-- <a class="btn btn-secondary" href="{{route('NuevoProyecto')}}" role="button">CREAR</a> --}}
						{{-- <a class="btn btn-secondary" href="{{action('GestorProyectosController@create' , 'nom_proy')}}" role="button">CREAR</a> --}}
						<button>Crear</button>
					</div>
				</div>
			</div>				
		</form>
		<form href="{{ route('GestorProyectos') }}"  role="button">

			<button>Volver a mis proyectos</button>
		</form>
	</div>
	@stop

	


	{{-- <a class="btn btn-primary" href="{{ route('GestorProyectos') }}" role="button">Volver a Mis Proyectos</a> --}}
	<!-- Large modal - ayuda -->
	<div id="ayuda" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header a-marcoa-modal">
					<h5 class="modal-title">AYUDA: CREACIÓN DE UN PROYECTO DE OA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Ingresar un nombre para el nuevo proyecto.</p>
					<p>Luego, presionar el botón <strong>CREAR</strong>.</p>
				</div>
			</div>
		</div>
	</div>