@extends('layouts.default')

@section('content')

<div class="container-fluid">	
	<div class="row text-right bloque-prin">
		<div class="col">
			<a class="nav-link" data-toggle="modal" href="#definicion"><h1>¿QUÉ ES UN OA?</h1></a>
		</div>
	</div>

	<div class="row bloque-prin">
		<div class="col-10">

			<h1>PROCESO DE CREACIÓN DEL OA

			<br>
			<?php print($proyecto['titulo'])?>
		{{-- 	<?php
				echo "<pre>";
				print_r($proyecto); 
				echo "</pre>";
			?> --}}
			</h1>
			{{-- <h3>Etapa</h3> --}}
			{{-- <?php print($etapa)?>  --}}

		</div>
		<div class="col-2 text-right">
			<a class="nav-link" data-toggle="modal" href="#etapas" style="padding-left:12px;">
				<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
				</svg>
			</a>
		</div>
	</div>
	
	<div class="row text-right bloque-prin">
		<div class="col">
			<a class="nav-link" data-toggle="modal" href="#ayuda">
				<svg class="bi bi-question-circle-fill a-marcoa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.57 6.033H5.25C5.22 4.147 6.68 3.5 8.006 3.5c1.397 0 2.673.73 2.673 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.355H7.117l-.007-.463c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.901 0-1.358.603-1.358 1.384zm1.251 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
				</svg>
			</a>
		</div>
	</div>	
	
	@include('includes/errores')
	<div class="row"> 
		<div class="col">
			<p class="etapas">1RA ETAPA
				<a class="btn btn-primary btn-lg btn-block e-analisis" href="{{route('analisis','proyecto')}}" role="button">
					<svg class="bi bi-search" width="80" height="80" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
						<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
					</svg>	
					</br></br>
					ANÁLISIS
				</a>
			</p>
		</div>
		<div class="col">
			<p class="etapas">2DA ETAPA
				<a class="btn btn-primary btn-lg btn-block e-diseño" href="{{route('diseño')}}" role="button">
					<svg class="bi bi-brush" width="80" height="80" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path d="M15.213 1.018a.572.572 0 0 1 .756.05.57.57 0 0 1 .057.746C15.085 3.082 12.044 7.107 9.6 9.55c-.71.71-1.42 1.243-1.952 1.596-.508.339-1.167.234-1.599-.197-.416-.416-.53-1.047-.212-1.543.346-.542.887-1.273 1.642-1.977 2.521-2.35 6.476-5.44 7.734-6.411z"/>
					  <path d="M7 12a2 2 0 0 1-2 2c-1 0-2 0-3.5-.5s.5-1 1-1.5 1.395-2 2.5-2a2 2 0 0 1 2 2z"/>
					</svg>				
					</br></br>
					DISEÑO
				</a>
			</p>
		</div>
		<div class="col">
			<p class="etapas">3RA ETAPA
				<a class="btn btn-primary btn-lg btn-block e-desarrollo" href="{{route('desarrollo')}}" role="button">
					<svg class="bi bi-tools" width="80" height="80" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
					  <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
					</svg>
					</br></br>
					DESARROLLO
				</a>
			</p>
		</div>
		<div class="col">
			<p class="etapas">4TA ETAPA
				<a class="btn btn-primary btn-lg btn-block e-publicacion" href="{{route('publicacion')}}" role="button">
					<svg class="bi bi-tv-fill" width="80" height="80" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM2 2h12s2 0 2 2v6s0 2-2 2H2s-2 0-2-2V4s0-2 2-2z"/>
					</svg>
					</br></br>
					PUBLICACIÓN
				</a>
			</p>
		</div>
		<div class="col">
			<p class="etapas">5TA ETAPA
				<a class="btn btn-primary btn-lg btn-block e-evaluacion" href="{{route('evaluacion')}}" role="button">
					<svg class="bi bi-file-check" width="80" height="80" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path d="M9 1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V8h-1v5a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h5V1z"/>
					  <path fill-rule="evenodd" d="M15.854 2.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 4.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
					</svg>				
					</br></br>
					EVALUACIÓN
				</a>
			</p>
		</div>
	</div>
	
	<div class="row">
		<div class="col-5">
			<p class="etapas">
				<a class="btn btn-primary btn-lg btn-block e-coherencia" href="{{route('coherencia')}}" role="button">
					ANÁLISIS DE COHERENCIA INTERNA
				</a>
				INSTANCIA INTERMEDIA DE REVISIÓN
			</p>
		</div>
	</div>

	<div class="row bloque-prin">
		<div class="col text-center">
			<a class="btn btn-primary boton-generar" href="{{route('configuracion')}}" role="button">EXPORTAR OA</a>
		</div>
	</div>
	
	<div class="row bloque-prin">
		<div class="col text-right">
			<button type="submit" class="btn btn-secondary">GUARDAR PROYECTO</button>
		</div>
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
