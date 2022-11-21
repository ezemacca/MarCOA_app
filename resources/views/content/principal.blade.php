@extends('layouts.default')

@section('content')

<div class="container-fluid">	
	<div class="row" id="cabecera-proyecto">
		<div class="col-2" style="padding-right: 0;">
			<div class="volver-flecha" style="padding-left:45px;" >
				<a href="{{url('GestorProyectos')}}">
					<img src="{{url('/images/MarCOA-18.png')}}" width="50%" height="50%"/>
				</a>

			</div>
		</div>
		<div class="col-5" style="padding-left: 0;">
			<h3>
				<?php print($proyecto['titulo'])?>
			</h3> 
		</div>
		<div class="col-3 text-right" 
		style="padding-bottom:auto;
		padding-top: 15px;
		padding-right: 0;">

				<a class="nav-link" data-toggle="modal" href="#definicion">
					<h1>¿QUÉ ES UN OA?</h1>
				</a>
		</div>
		<div class="col-2 text-left" style="padding-top: auto; padding-bottom: auto;">
			<a data-toggle="modal" href="#etapas" >
				<img src="{{url('/images/MarCOA-12.png')}}" width="auto" height="80%"/>
			</a>
			<a data-toggle="modal" href="#ayuda">
				<img src="{{url('/images/MarCOA-13.png')}}" width="auto" height="80%"
				style="padding-top: 0;"
				/>
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
	
	<div class="col-10"
		style=" padding-right:auto; padding-left: 30px;"
		>
		<div class="row" style="height:18px"> 
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
					<div class="progress" id="progress-bar-etapas">
					<div 
					  class="progress-bar bg-blue" 
					  role="progressbar" 
					  style="width: {{0}}%" 
					  >

				  	</div>
				 	  	
					</div>		
				 	<div id="porcentaje-etapas">
				  		{{ 0 }}
				  		% 
				  	</div>	
				</a>
			@elseif ($proyecto['etapa'] > 1)
			<div class="img-etapa">
				<a  href="{{route('analisis.edit',$proyecto)}}" >
					<img src="{{url('/images/MarCOA-07.png')}}" width="100%" height="100%"/>
					<div class="progress" id="progress-bar-etapas">
					<div 
					  class="progress-bar bg-blue" 
					  role="progressbar" 
					  style="width: {{100}}%" 
					  >

				  	</div>
				 	  	
					</div>		
				 	<div id="porcentaje-etapas">
				  		{{ 100}}
				  		% 
				  	</div>	
				</a>
			</div>
			@else
				<a >
					<img src="{{url('/images/marcoa-gris/analisis.jpeg')}}" width="100%" height="100%"/>					
				</a>
			@endif
	</div>

		{{-- ETAPA2 --}}
	<div class="col-2">
		@if($proyecto['etapa'] == 2)
				
						<a  href="{{route('diseño', $proyecto)}}" >
							<img src="{{url('/images/MarCOA-08.png')}}" width="100%" height="100%"/>
							<div class="progress" id="progress-bar-etapas">
								<div 
								  class="progress-bar bg-blue" 
								  role="progressbar" 
								  style="width: {{(($proyecto->diseño->subetapa))*100/4 }}%" 
								  >
							  	</div>
							</div>		
						 	<div id="porcentaje-etapas">
						  		{{ (($proyecto->diseño->subetapa))*100/4 }}
						  		% 
						  	</div>	
						</a>
					
		@elseif($proyecto['etapa'] >2)
			<a  href="{{route('diseño', $proyecto)}}" >
					<img src="{{url('/images/MarCOA-08.png')}}" width="100%" height="100%"/>
					<div class="progress" id="progress-bar-etapas">
								<div 
								  class="progress-bar bg-blue" 
								  role="progressbar" 
								  style="width: {{(($proyecto->diseño->subetapa))*100/4 }}%" 
								  >
							  	</div>
							</div>		
						 	<div id="porcentaje-etapas">
						  		{{ (($proyecto->diseño->subetapa))*100/4 }}
						  		% 

						  	</div>	
			</a>
		@else
			
						<a    >
								<img src="{{url('/images/marcoa-gris/diseno.jpeg')}}" width="100%"height="100%"/>
							
						</a>
		@endif
	</div>
		{{-- ETAPA3 --}}
	<div class="col-2">
		@if($proyecto['etapa'] == 3)
						<a  href="{{route('desarrollo',$proyecto)}}" >
							<img src="{{url('/images/MarCOA-09.png')}}" width="100%" height="100%"/>
							<div class="progress" id="progress-bar-etapas">
							<div 
							  class="progress-bar bg-blue" 
							  role="progressbar" 
							  style="width: {{($proyecto->desarrollo->metadatos->subetapa)*50/10}}%" 
							  >
						  	</div>
							</div>		
						 	<div id="porcentaje-etapas">
						  		{{ ($proyecto->desarrollo->metadatos->subetapa)*50/10 }}
						  		% 
						  	</div>
						</a>
				
		@elseif($proyecto['etapa'] > 3)
						<a  href="{{route('desarrollo',$proyecto)}}" >
							<img src="{{url('/images/MarCOA-09.png')}}" width="100%" height="100%"/>
							<div class="progress" id="progress-bar-etapas">
							<div 
							  class="progress-bar bg-blue" 
							  role="progressbar" 
							  style="width: {{($proyecto->desarrollo->metadatos->subetapa)*50/10}}%" 
							  >
						  	</div>
							</div>		
						 	<div id="porcentaje-etapas">
						  		{{ ($proyecto->desarrollo->metadatos->subetapa)*50/10 }}
						  		% 
						  	</div>
							
						</a>
		@else
		
						<a  >
							<img src="{{url('/images/marcoa-gris/desarrollo.jpeg')}}" width="100%" height="100%"/>
						</a>
		@endif
	</div>
		{{-- ETAPA4 --}}
	<div class="col-2">
		@if($proyecto['etapa'] >= 4)
						<a  href="{{route('publicacion',$proyecto)}}" role="button">
							<img src="{{url('/images/MarCOA-10.png')}}" width="100%" height="100%"/>
							<div class="progress" id="progress-bar-etapas">
							<div 
							  class="progress-bar bg-blue" 
							  role="progressbar" 
							  style="width: {{0}}%" 
							  >

						  	</div>
				 	  	
							</div>		
						 	<div id="porcentaje-etapas">
						  		{{ 0 }}
						  		% 
						  	</div>	
						</a>
		@else
						<a  >
								<img src="{{url('/images/marcoa-gris/publicacion.jpeg')}}" width="100%" height="100%"/>

						</a>
		@endif
	</div>
		{{-- ETAPA5 --}}
	<div class="col-2">
		@if($proyecto['etapa'] >= 5)
						<a  href="{{route('evaluacion')}}" >
							<img src="{{url('/images/MarCOA-11.png')}}" width="100%" height="100%"/>
							<div class="progress" id="progress-bar-etapas">
							<div 
							  class="progress-bar bg-blue" 
							  role="progressbar" 
							  style="width: {{0}}%" 
							  >
						  	</div>
							</div>		
						 	<div id="porcentaje-etapas">
						  		{{ 0 }}
						  		% 
						  	</div>	

						</a>
		@else
						<a>
							<img src="{{url('/images/marcoa-gris/evaluacion.jpeg')}}" width="100%" height="100%"/>
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

					
		@elseif(isset($proyecto->coherencia))
					
						<a class="btn btn-primary btn-lg btn-block e-coherencia" href="{{route('coherencia.edit',$proyecto)}}" role="button"
						style="
						font-size: 16px;
						border-radius: 0px;
						padding: 10px 20px;}
						:hover{
							border-radius: 200px;
							background-color: MEDIUMSEAGREEN;
							border: 2px solid MEDIUMSEAGREEN;
							
							border: 2px solid BLACK !important; /**DARKRED;**/ 
							box-shadow:none !important;
						}
						">
							<p id="analisis-coherencia">
								ANÁLISIS DE COHERENCIA INTERNA 
							</p>
							<hr>
							<p id="analisis-coherencia-sub">
								INSTANCIA INTERMEDIA DE REVISIÓN
							</p>
						</a>
			
		@else
						<a class="btn btn-primary btn-lg btn-block e-coherencia" href="{{route('coherencia',$proyecto)}}" role="button"
						style="
						font-size: 16px;
						border-radius: 0px;
						padding: 10px 20px;}
						:hover{
							border-radius: 200px;
							background-color: MEDIUMSEAGREEN;
							border: 2px solid MEDIUMSEAGREEN;
							
							border: 2px solid BLACK !important; /**DARKRED;**/ 
							box-shadow:none !important;
						}
						">
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

	
