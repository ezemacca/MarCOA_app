@extends('layouts.default')

@section('content')

<div class="container-fluid e-analisis">
	<div class="row">
		<div class="col">
			<div class="volver-flecha-blanca" >
				<a href="{{route('principal',$proyecto)}}">
					<img src="{{url('/images/MarCOA-18.png')}}" width="80%" height="80%"/>
				</a>

			</div>
		</div>
		<div class="col text-center">			
			<svg class="bi bi-search" width="50" height="50" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
				<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
				<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
			</svg>
		</div>
		<div class="col-10">
			<h1>ETAPA DE ANÁLISIS</h1>
			<h2>Planteo de la necesidad educativa que da origen al OA</h2>
		</div>
		<div class="col text-right">
			<a class="nav-link" data-toggle="modal" href="#etapa-analisis">
				<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
				</svg>
			</a>					
		</div>
	</div>
</div>

<div class="container-fluid cont-formulario">
	<form method="POST" action="{{ route('analisis.update', $proyecto)}} ">
		@csrf 
		@method('PATCH')
		
		
		<div class="form-group">
			<div class="row">
				<div class="col-11">
					<label for="analisis_p1">1. ¿Qué necesitan aprender los destinatarios?</label>
				</div>
				<div class="col text-right">
					<a class="nav-link" data-toggle="modal" href="#a_ayuda1">
						<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
						</svg>
					</a>
				</div>
			</div>
			{{-- <input type="text" class="form-control" name="analisis_p1" id="analisis_p1" value="{{ old('analisis_p1') }}" required> --}}

		<textarea type="text" class="form-control" name="analisis_p1" id="analisis_p1" required >{{$analisis->analisis_p1 }}</textarea>
		</div>

		<div class="form-group">
			<div class="row">
				<div class="col-11">
					<label for="analisis_p2">2. ¿Por qué se cree necesario utilizar un OA y no otro tipo de material educativo?</label>
				</div>
				<div class="col text-right">
					<a class="nav-link" data-toggle="modal" href="#a_ayuda2">
						<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
						</svg>
					</a>
				</div>
			</div>
			{{-- <input type="text" class="form-control" name="analisis_p2" id="analisis_p2" value="{{ old('analisis_p2') }}" required> --}}

			<textarea type="text" class="form-control" name="analisis_p2" id="analisis_p2" required>{{$analisis->analisis_p2 }}</textarea>
		</div>	

		<div class="form-group">
			<div class="row">
				<div class="col-11">
					<label for="analisis_p3">3. ¿A qué nivel educativo se orienta el OA?</label>
				</div>
				<div class="col text-right">
					<a class="nav-link" data-toggle="modal" href="#a_ayuda3">
						<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
						</svg>
					</a>
				</div>
			</div>
			{{-- <input type="text" class="form-control" name="analisis_p3" id="analisis_p3" value="{{ old('analisis_p3') }}" required> --}}
			<textarea type="text" class="form-control" name="analisis_p3" id="analisis_p3" required>{{$analisis->analisis_p3 }}</textarea>
		</div>	

		<div class="form-group">
			<div class="row">
				<div class="col-11">
					<label for="analisis_p4">4. ¿Qué tema abordará el OA?</label>
				</div>
				<div class="col text-right">
					<a class="nav-link" data-toggle="modal" href="#a_ayuda4">
						<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
						</svg>
					</a>
				</div>
			</div>
			{{-- <input type="text" class="form-control" name="analisis_p4" id="analisis_p4" value="{{ old('analisis_p4') }}" required>--}}

			<textarea type="text" class="form-control" name="analisis_p4" id="analisis_p4" required> {{$analisis->analisis_p4 }}</textarea>
		</div>	

		<div class="form-group">
			<div class="row">
				<div class="col-11">
					<label for="analisis_p5">5. ¿Qué conocimientos previos debería tener el alumno para utlizar el OA?</label>
				</div>
				<div class="col text-right">
					<a class="nav-link" data-toggle="modal" href="#a_ayuda5">
						<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
						</svg>
					</a>
				</div>
			</div>
			{{-- <input type="text" class="form-control" name="analisis_p5" id="analisis_p5" value="{{ old('analisis_p5') }}" required> --}}

			<textarea type="text" class="form-control" name="analisis_p5" id="analisis_p5"  required>{{$analisis->analisis_p5 }}</textarea>
		</div>	

		<div class="form-group">
			<div class="row">
				<div class="col-11">
					<label for="analisis_p6">6. ¿Con qué conocimientos que pueden ser adquiridos posteriomente se relaciona el OA?</label>
				</div>
				<div class="col text-right">
					<a class="nav-link" data-toggle="modal" href="#a_ayuda6">
						<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
						</svg>
					</a>
				</div>
			</div>
			{{-- <input type="text" class="form-control" name="analisis_p6" id="analisis_p6" value="{{ old('analisis_p6') }}" required> --}}

			<textarea type="text" class="form-control" name="analisis_p6" id="analisis_p6" required>{{$analisis->analisis_p6 }}</textarea>
		</div>				
		{{-- formulario oculto que envía los datos del proyecto al controlador analisis.store --}}
			{{-- <?php $proyecto_id = $proyecto['id']; ?>
			<input type="hidden" name="proyecto_id" value= $proyecto> --}}



			{{-- <input type="hidden" value="{{$proyecto->id}}" name="proyecto_id"> --}}

			<div class="row">
				<div class="col text-left">
					<!--<button type="submit" class="btn btn-secondary e-analisis">
						<svg class="bi bi-search" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
							<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
							<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
						</svg>
						GUARDAR
					</button>-->
					<div class="conteiner-fluid text-left">
						{{-- <a class="btn btn-secondary e-analisis" href="{{route('analisis','proyecto')}}" role="button">
							<svg class="bi bi-search" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
								<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
								<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
							</svg>
							GUARDAR
						</a> --}}
						<button class="btn btn-secondary e-analisis">
							<svg class="bi bi-search" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
								<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
								<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
							</svg>
							Guardar Cambios
						</button>
					</div>	
				</div>
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
		</form>

	</div>
	
	@stop

	<!-- Extra large modal - etapa de análisis-->
	<div id="etapa-analisis" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">ETAPA DE ANÁLISIS</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Es la etapa de análisis de las necesidades educativas que originan la creación del OA.</p>
					<p>Aquí, se deberá plantear, concretamente, cuál es la necesidad educativa que da origen al OA.</p> 
					<p>Se propone responder a una serie de preguntas que orientan este análisis.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Extra large modal - ayuda1-->
	<div id="a_ayuda1" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">QUÉ NECESITAN APRENDER LOS DESTINATARIOS</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>La creación de un material educativo responde siempre a una necesidad en la formación de la población destinataria, en otras palabras, 
						es una estrategia que busca dar solución o alivianar un problema detectado en su aprendizaje. Si bien lo deseable es que esta necesidad se
						identifique a partir de un diagnóstico formal, a través de instrumentos tales como: encuestas, entrevistas, análisis de producciones, análisis 
						de resultados de evaluaciones, etcétera; es frecuente que sea el docente, a través del análisis de la práctica cotidiana, quien identifique de 
						manera más informal los problemas o dificultades que suelen tener los estudiantes para aprender determinados conocimientos y, a partir de 
					allí, decida la creación del material.</p>
					<p>La necesidad de que los estudiantes repasen conocimientos previos antes de abordar un tema nuevo, de disponer de instancias de práctica 
						o ejercicios adicionales, de aprender ciertos conceptos o procedimientos de forma más gráfica o interactiva, son algunos ejemplos de 
					cuestiones a las que se les puede dar respuesta, a partir de la creación de material educativo digital y, más específicamente, de OAs.</p>
					<p>Aquello que se identifique como necesidad educativa será clave para definir: el objetivo de aprendizaje, los contenidos que abarcará el 
					OA, las actividades y formas de autoevaluación que se presentarán al alumno.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda2-->
	<div id="a_ayuda2" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">POR QUÉ SE CREE NECESARIO UTILIZAR UN OA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Una vez identificada la necesidad de formación, es necesario revisar si la creación de un OA es la mejor respuesta a esa necesidad.</p>
					<p>Un OA puede ser una buena alternativa cuando:</p>
					<p>- el contenido refiere un objetivo muy específico y acotado, susceptible de combinarse con otros OAs.</p>
					<p>-se aborda un tema de uso frecuente y/o común a varias asignaturas o disciplinas y, por ende, puede ser reutilizado en diferentes 
					situaciones educativas.</p>
					<p>-se pretende ofrecer no sólo información, sino orientar el aprendizaje de los alumnos a través de actividades y de una autoevaluación.</p>
					<p>-se dispone de un Entorno Virtual de Enseñanza y Aprendizaje (EVEA), ya sea como aula extendida o curso virtual, dentro del cual 
					insertar el OA como parte de una estrategia de enseñanza más amplia.</p>
					<p>-la población destinataria es numerosa o se encuentra distribuida geográficamente, por lo que otro tipo de estrategia resultaría 
					menos efectiva.</p>
					<p>-se desea facilitar las formas de acceder, compartir y guardar este material en un repositorio para su reutilización.</p>
					<p>-se desea reutilizar el OA en diferentes entornos tecnológicos: EVEAs de diferentes instituciones, diferentes repositorios, etc.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda3-->
	<div id="a_ayuda3" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">A QUÉ NIVEL EDUCATIVO SE ORIENTA EL OA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Identificar el nivel educativo de la población destinataria para la que se está diseñando un OA tendrá su impacto en la etapa 
						del diseño respecto qué es lo que se espera que los alumnos puedan resolver, la forma de presentar la temática y el tipo de 
						actividades que se le presenten para contribuir con su aprendizaje. Esta es, además, información que luego podrá explicitarse en 
					los metadatos para facilitar la búsqueda y uso por poblaciones de características similares.</p>
					<p>Se propone que los términos que se empleen para definir el nivel educativo sean los que propone el estándar IEEE-LOM.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda4-->
	<div id="a_ayuda4" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">QUÉ TEMA ABORDARÁ EL OA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>En esta primera etapa de análisis, en base a lo identificado respecto de qué es lo que los estudiantes necesitan aprender, se hace
						un primer recorte de la temática que será abordada. Por ejemplo: etapas para la resolución de un problema usando una computadora, 
					el planteo de objetivos en el marco de una propuesta educativa, creación de paquetes SCORM en eXeLearning.</p>
					<p>Durante la etapa de diseño se profundizará en la definición, selección y organización del contenido del OA.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda5-->
	<div id="a_ayuda5" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">QUÉ CONOCIMIENTOS PREVIOS DEBERÍA TENER EL ALUMNO PARA UTILIZAR EL OA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Desde las perspectivas constructivistas y cognitivistas del aprendizaje, se señala la importancia fundamental que tienen los 
						conocimientos previos en el aprendizaje de nueva información. Ya sea que se trate del aprendizaje de conceptos o del aprendizaje 
						de habilidades y destrezas para resolver una tarea específica, la identificación y explicitación de los conocimientos previos 
					es una cuestión fundamental para promover un aprendizaje efectivo.</p>
					<p>En el caso de que un alumno no cuente con estos conocimientos previos, se lo puede redireccionar a otros OAs o fuentes 
						bibliográficas de donde pueda obtener la información necesaria.<p/> 
						<p>Por ejemplo: si se diseñara un OA sobre la formulación de objetivos de aprendizaje, los conocimientos previos deberían referir 
						a cuestiones tales como la planificación didáctica y el diseño instruccional.</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Extra large modal - ayuda6-->
		<div id="a_ayuda6" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl">		
				<div class="modal-content">
					<div class="modal-header a-croa-modal">
						<h5 class="modal-title">CON QUÉ CONOCIMIENTOS, QUE PUEDEN SER ADQUIRIDOS POSTERIORMENTE, SE RELACIONA EL OA</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body text-justify">
						<p>Dado que, de acuerdo a la definición de partida, el aprendizaje que propone un OA es específico y acotado, la posibilidad de vincular
							un OA con otros es fundamental para promover aprendizajes más globales y abarcadores. De allí, la necesidad de explicitar cuáles podrían
						ser los conocimientos con los que vincular y trabajar posteriormente, es decir, una vez completado el OA que se está diseñando.</p>
						<p>Continuando con el ejemplo ya citado: estos conocimientos deberían referir a otros componentes del diseño didáctico/instruccional
						tales como diseño de contenidos, diseño de actividades, diseño de la evaluación.</p>
					</div>
				</div>
			</div>
		</div>