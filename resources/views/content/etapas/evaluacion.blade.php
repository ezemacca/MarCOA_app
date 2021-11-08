@extends('layouts.default')
 
@section('content')
	
	<div class="container-fluid e-evaluacion">
		<div class="row">
			<div class="col text-center">			
				<svg class="bi bi-file-check" width="50" height="50" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
				  <path d="M9 1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V8h-1v5a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h5V1z"/>
				  <path fill-rule="evenodd" d="M15.854 2.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 4.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
				</svg>
			</div>
			<div class="col-10">
				<h1>ETAPA DE EVALUACIÓN</h1>
				<h2>Indicaciones acerca de cómo evaluar el OA en contextos de uso específico</h2>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#etapa-evaluacion">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>				
				</a>					
			</div>
		</div>
	</div>	

	<div class="container-fluid text-justify bloque-eva">
		<p>Existen diferentes métodos de evaluación de OAs. Por un lado, es posible evaluar al OA en términos de su consistencia interna 
			(análisis de coherencia interna) y, por otra parte, se puede evaluar su uso en un contexto específico, en el marco de la propuesta 
			educativa en la que se incluya. Allí, su calidad puede ser analizada bajo la luz de docentes y alumnos específicos, con una 
			necesidad educativa concreta.</p>
		<p>Si bien hay diferentes investigaciones y estudios que proponen diversas posturas para la calidad del OA en uso, desde la 
			metodología CROA se propone considerar algunos ejes para el análisis de calidad:</p> 
		<p>- La capacidad de reutilización del OA en diferentes contextos, atendiendo a las necesidades de adaptación que hayan surgido y la 
			naturaleza de estas necesidades.</p> 
		<p>- La relación entre el objetivo que propone el OA y su real cumplimiento, a partir de lo ocurrido en el proceso de aprendizaje del 
			alumno.</p>
		<p>- Los usos didácticos que el docente ha realizado del OA, atendiendo a su vinculación con otras actividades y materiales de estudio 
			propuestos por el docente.</p>
	</div>
	
@stop

	<!-- Extra large modal - etapa de evaluación-->
	<div id="etapa-evaluacion" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">ETAPA DE EVALUACIÓN</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>En esta etapa, se analizarán las posibilidades y barreras encontradas en cuanto al uso del OA en contextos específicos.</p>
				</div>
			</div>
		</div>
	</div>