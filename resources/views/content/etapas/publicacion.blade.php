@extends('layouts.default')
 
@section('content')

	<div class="container-fluid e-publicacion">
		<div class="row">
			<div class="col text-center">			
				<svg class="bi bi-tv-fill" width="50" height="50" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
					<path fill-rule="evenodd" d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM2 2h12s2 0 2 2v6s0 2-2 2H2s-2 0-2-2V4s0-2 2-2z"/>
				</svg>
			</div>
			<div class="col-10">
				<h1>ETAPA DE PUBLICACIÓN</h1>
				<h2>Indicaciones acerca de cómo publicar el OA en distintos entornos tecnológicos</h2>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#etapa-publicacion">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>				
				</a>					
			</div>
		</div>
	</div>	
	
	<!--<div class="container-fluid">		
			<div class="col text-right">
				<a class="btn btn-secondary boton-generar" href="" role="button">
					<svg class="bi bi-box-arrow-down" width="30" height="30" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M6.646 13.646a.5.5 0 01.708 0L10 16.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z" clip-rule="evenodd"></path>
						<path fill-rule="evenodd" d="M10 6.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V7a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
						<path fill-rule="evenodd" d="M4.5 4A1.5 1.5 0 016 2.5h8A1.5 1.5 0 0115.5 4v7a1.5 1.5 0 01-1.5 1.5h-1.5a.5.5 0 010-1H14a.5.5 0 00.5-.5V4a.5.5 0 00-.5-.5H6a.5.5 0 00-.5.5v7a.5.5 0 00.5.5h1.5a.5.5 0 010 1H6A1.5 1.5 0 014.5 11V4z" clip-rule="evenodd"></path>
					</svg>	
				</a>
			</div>
		</div>
	</div>-->

	<div class="container-fluid text-justify bloque-pub">
		<p>- La publicación del OA puede realizarse en diferentes entornos tecnológicos que respeten el estándar de empaquetamiento utilizado 
			en la etapa de desarrollo: Repositorios de OAs (ROAs) o Entornos Virtuales de Enseñanza y Aprendizaje (EVEAs)</p>
		<p>- La publicación consiste en incorporar el paquete (generalmente, un archivo ".zip") a través de las funcionalidades específicas de
			la plataforma en la que se publicará.</p> 
		<p>- Es importante considerar que los metadatos estén correctamente cargados de manera tal que ese OA se vuelva fácilmente localizable 
			y accesible para los posibles interesados.</p>
	</div>
	
@stop

	<!-- Extra large modal - etapa de publicación-->
	<div id="etapa-publicacion" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">ETAPA DE PUBLICACIÓN</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>En esta etapa, se propone la publicación del OA en un Repositorio de OAs (ROA) o en un Entorno Virtual de Enseñanza y 
						Aprendizaje (EVEA).</p>
				</div>
			</div>
		</div>
	</div>