@extends('layouts.default')

@section('content')

<div class="container-fluid">	
	<div class="row" id="cabecera-proyecto">
		<div class="col">
			<div class="volver-flecha" >
				<a href="{{url('GestorProyectos')}}">
					<img src="{{url('/images/MarCOA-18.png')}}" width="50%" height="50%"/>
				</a>

			</div>
		</div>
		<div class="col-lg-8">
			<h3>
				<?php print($proyecto['titulo'])?>
			</h3> 
		</div>
			<div class="col-2 text-right">
				<a data-toggle="modal" href="#etapas" >
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			
			<a data-toggle="modal" href="#ayuda">
				<svg class="bi bi-question-circle-fill a-marcoa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				 <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.57 6.033H5.25C5.22 4.147 6.68 3.5 8.006 3.5c1.397 0 2.673.73 2.673 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.355H7.117l-.007-.463c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.901 0-1.358.603-1.358 1.384zm1.251 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
				</svg>
			</a>
		</div>
	</div>

		<div class="col text-center ">
			<h1>PROCESO DE CREACIÓN DEL OA </h1>
		</div>

	
	@include('includes/errores')


<div class="row"> 
	<div class="col-1">	
	</div>
	
	<div class="col-10">
		<div class="row"> 
			<div class="col-1">
			</div>
			<div class="col">
				<p class="etapas">
					1RA ETAPA
				</p>
			</div>
			<div class="col">
				<p class="etapas">
					2DA ETAPA
				</p>
			</div>
			<div class="col">
				<p class="etapas">
					3RA ETAPA
				</p>
			</div>
			<div class="col">
				<p class="etapas">
					4TA ETAPA
				</p>
			</div>
			<div class="col">
				<p class="etapas">
					5TA ETAPA
				</p>
			</div>
			<div class="col-1">
			</div>
		</div>

	<div class="row"> 
	<div class="col-1">
		
	</div>
		{{-- ETAPA1 --}}
	<div class="col-2">
			@if($proyecto['etapa'] === 1)
				<a  href="{{route('analisis',$proyecto)}}">
					<img src="{{url('/images/MarCOA-07.png')}}" width="100%" height="100%"/>							
				</a>
			@elseif ($proyecto['etapa'] > 1)
				<a  href="{{route('analisis.edit',$proyecto)}}" >
					<img src="{{url('/images/MarCOA-07.png')}}" width="100%" height="100%"/>
				</a>
			@else
				<a class="etapa-gris" >
					<img src="{{url('/images/MarCOA-07.png')}}" width="100%" height="100%"/>					
				</a>
			@endif
	</div>

		{{-- ETAPA2 --}}
	<div class="col-2">
		@if($proyecto['etapa'] == 2)
				
						<a  href="{{route('diseño', $proyecto)}}" >
							<img src="{{url('/images/MarCOA-08.png')}}" width="100%" height="100%"/>
						</a>
					
		@elseif($proyecto['etapa'] >2)
			<a  href="{{route('diseño', $proyecto)}}" >
					<img src="{{url('/images/MarCOA-08.png')}}" width="100%" height="100%"/>
			</a>
		@else
			
						<a  class="etapa-gris"  >
								<img src="{{url('/images/MarCOA-08.png')}}" width="100%" height="100%"/>
							
						</a>
		@endif
	</div>
		{{-- ETAPA3 --}}
	<div class="col-2">
		@if($proyecto['etapa'] == 3)
						<a  href="{{route('desarrollo',$proyecto)}}" >
							<img src="{{url('/images/MarCOA-09.png')}}" width="100%" height="100%"/>
						</a>
				
		@elseif($proyecto['etapa'] > 3)
						<a  href="{{route('desarrollo.edit',$proyecto)}}" >
							<img src="{{url('/images/MarCOA-09.png')}}" width="100%" height="100%"/>
							
						</a>
		@else
		
						<a class="etapa-gris" >
							<img src="{{url('/images/MarCOA-09.png')}}" width="100%" height="100%"/>
						</a>
		@endif
	</div>
		{{-- ETAPA4 --}}
	<div class="col-2">
		@if($proyecto['etapa'] >= 4)
						<a  href="{{route('publicacion')}}" role="button">
							<img src="{{url('/images/MarCOA-10.png')}}" width="100%" height="100%"/>
						</a>
		@else
						<a class="etapa-gris" >
								<img src="{{url('/images/MarCOA-10.png')}}" width="100%" height="100%"/>
						</a>
		@endif
	</div>
		{{-- ETAPA5 --}}
	<div class="col-2">
		@if($proyecto['etapa'] >= 5)
						<a  href="{{route('evaluacion')}}" >
							<img src="{{url('/images/MarCOA-11.png')}}" width="100%" height="100%"/>
						</a>
		@else
						<a  class="etapa-gris" >
							<img src="{{url('/images/MarCOA-11.png')}}" width="100%" height="100%"/>
						</a>
		@endif
	</div>
	<div class="col-1">
	</div>
	</div>
		{{-- ETAPA COHERENCIA --}}
	<div class="row">
		<div class="col-1">
		</div>
		
		<div class="col-4">
		@if($proyecto['etapa'] < 3)
					
						<a class="btn btn-lg e-coherencia-gris" >
							<p id="analisis-coherencia">
								ANÁLISIS DE COHERENCIA INTERNA 
							</p>
							<hr>
							<p id="analisis-coherencia-sub">
								INSTANCIA INTERMEDIA DE REVISIÓN
							</p>
						</a>

					
		@elseif($proyecto->first()->coherencia == null)
					
						<a class="btn btn-primary btn-lg btn-block e-coherencia" href="{{route('coherencia',$proyecto)}}" role="button">
							<p id="analisis-coherencia">
								ANÁLISIS DE COHERENCIA INTERNA 
							</p>
							<hr>
							<p id="analisis-coherencia-sub">
								INSTANCIA INTERMEDIA DE REVISIÓN
							</p>
						</a>
			
		@else
				
						<a class="btn btn-primary btn-lg btn-block e-coherencia" href="{{route('coherencia.edit',$proyecto)}}" role="button">
							<p id="analisis-coherencia">
								ANÁLISIS DE COHERENCIA INTERNA 
							</p>
							<hr>
							<p id="analisis-coherencia-sub">
								INSTANCIA INTERMEDIA DE REVISIÓN
							</p>
						</a>
		@endif
		</div>
		
		<div class="col-7">
		</div>
	</div>
			<div class="row bloque-prin">
				<div class="col text-center">
					<a class="btn btn-primary boton-generar" href="" role="button">EXPORTAR OA</a>
				</div>
			</div>
			
			<div class="row bloque-prin">
				<div class="col text-right">

					
					{{-- <button type="submit" class="btn btn-secondary">GUARDAR PROYECTO</button> --}}
					
				</div>
			</div>
</div>
	</div>
	<div class="col-1">
	</div>
	
</div>

@stop

	<!-- Extra large modal - qué es un OA -->
	<div id="definicion" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">	
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">DEFINICIÓN DE OBJETO DE APRENDIZAJE (OA), según CROA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Un OA es un tipo de material educativo digital que se caracteriza, desde el <strong>punto de vista pedagógico</strong>, por orientarse 
					a un <u>objetivo específico de aprendizaje</u> y presentar mínimamente: una serie de <u>contenidos</u> con el fin de abordar la temática relacionada 
					con el objetivo, <u>actividades</u> que permitan al alumno poner en práctica o problematizar el contenido presentado y una <u>autoevaluación</u> que 
					posibilite conocer al alumno, si ha podido comprender esos contenidos vinculados al objetivo. Desde el <strong>punto de vista tecnológico</strong>,
					se caracteriza por contener un conjunto de <u>metadatos estandarizados</u> para su búsqueda y recuperación, y estar integrado, utilizando un 
					modelo de <u>empaquetamiento que respete estándares</u>, y de esta manera, permita su diálogo con diferentes entornos tecnológicos.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Extra large modal - etapas-->
	<div id="etapas" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">CREACIÓN DE OAs, según CROA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>La metodología CROA propone un proceso guiado para el diseño y la creación de un OA, a partir de preguntas disparadoras y un conjunto de 
						documentos que permiten plasmar el diseño y la planificación que se están realizando. Está dirigida al diseño y la creación de OAs por parte
						de docentes, no es necesario que intervenga un equipo de producción de materiales. La carga de metadatos también es guiada por la metodología, 
						se indican los valores para cada uno de los metadatos que CROA determina de interés dentro del estándar IEEE-LOM.</p>
					<p>La metodologóa CROA abarca una mirada interdisciplinaria que incluye aspectos vinculados al diseño instruccional y a cuestiones tecnológicas,
						y propone puntos de revisión de coherencia del OA en estos dos sentidos. Al mismo tiempo, parte de una definición concreta de OA. Esto ayuda, 
						al usuario, a conocer con qué concepción de OA se trabajará y qué tipo de material educativo resultará a partir de su aplicación.</p>
					<p>Finalmente, la metodología CROA propone una granularidad para el OA que facilita su posterior reutilización y su ensamblaje con otros 
						OAs, para construir secuencias de aprendizaje acorde a las necesidades del grupo destinatario. Es por ello que se realiza un esfuerzo
						para orientar al docente en la determinación de qué conocimientos previos debería tener el alumno antes de trabajar con el OA que se está 
						diseñando. Esto puede simplificar la tarea de ensamblaje posterior, ya que, podrían buscarse OAs que aborden esos conocimientos previos. 
						Asimismo, CROA propone al docente reflexionar con qué conocimientos posteriores se vincula el OA que está diseñando, ya que, también 
						podría ser útil en un proceso de ensamblaje posterior.</p>
					<p>Las etapas del proceso de creación de OAs, propuestas por la metodología CROA, que se retroalimentarán entre sí, son las siguientes:</p> 
					<p><strong>(1ra. etapa) ANÁLISIS, (2da. etapa) DISEÑO, (3ra. etapa) DESARROLLO, (4ta. etapa) PUBLICACIÓN y (5ta. etapa) EVALUACIÓN.</strong></p>
				</div>
			</div>
		</div>
	</div>

	<!-- Extra large modal - ayuda-->
	<div id="ayuda" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-marcoa-modal">
					<h5 class="modal-title">AYUDA: PROCESO DE CREACIÓN DEL OA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Abordar cada una de las etapas de creación del OA: <strong>ANÁLISIS</strong>, <strong>DISEÑO</strong>, <strong>ANÁLISIS DE COHERENCIA INTERNA</strong>, <strong>DESARROLLO</strong>, <strong>PUBLICACIÓN</strong> y <strong>EVALUACIÓN</strong>. 
							Presionar sobre cada una para acceder. Primeramente, sólo la etapa de análisis estará habilitada. Conforme al avance, se irán habilitando las etapas restantes.</p>
					<p>Por último, presionar el botón <strong>EXPORTAR</strong> para configurar cuestiones de exportación y, finalmente, exportar el paquete SCORM del OA con su correspondiente archivo de metadatos IEEE-LOM y la documentación de análisis y diseño seleccionada.
					
				</div>
			</div>
		</div>
	</div>

	
