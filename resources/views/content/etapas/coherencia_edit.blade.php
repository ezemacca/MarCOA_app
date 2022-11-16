@extends('layouts.default')
 
@section('content')

	<div class="container-fluid" style="padding:10px">
		<div class="row">
			<div class="col-1">
			<div class="volver-flecha"  >
					<a href="{{url('GestorProyectos')}}">
						<img src="{{url('/images/MarCOA-18.png')}}" width="50%" height="50%"/>
					</a>
				</div>
			</div>
			<div class="col-10">
				<h1 style="color:MEDIUMSEAGREEN">ANÁLISIS DE COHERENCIA INTERNA</h1>
				<h2 style="color:MEDIUMSEAGREEN">Guía para asegurar coherencia interna entre los componentes del OA</h2>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#analisis-coherencia">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>					
			</div>
		</div>
	</div>	
	
	<div class="container-fluid text-right">
		<a class="nav-link" data-toggle="modal" href="#ac_ayuda">
			<svg class="bi bi-question-circle-fill a-marcoa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.57 6.033H5.25C5.22 4.147 6.68 3.5 8.006 3.5c1.397 0 2.673.73 2.673 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.355H7.117l-.007-.463c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.901 0-1.358.603-1.358 1.384zm1.251 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
			</svg>
		</a>
	</div>	

	<div class="row">
		<div class="col-1">
		</div>
		<div class="col-10">
			<div class="container-fluid">
				<form method="POST" action="{{ route('coherencia.update', $proyecto) }}">

					@csrf	
					@method('PATCH')
					
					<div class="form-check preg-guia">
						<div class="row">
							<div class="col-11">
								<input class="form-check-input" type="checkbox" value="coherencia_p1"  id="coherencia_p1" name="coherencia[]" 
									@if(isset($proyecto->coherencia->coherencia_p1)&&($proyecto->coherencia->coherencia_p1==1))
										checked
									@endif
								>

								<label class="form-check-label" for="coherencia_p1">¿Hay un solo objetivo y es de carácter específico?</label>
							</div>
							<div class="col text-right">
								<a class="nav-link" data-toggle="modal" href="#ver_objetivo">
									<svg class="bi bi-search" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M12.442 12.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"></path>
										<path fill-rule="evenodd" d="M8.5 14a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM15 8.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"></path>
									</svg>	
								</a>
							</div>
						</div>				
					</div>
					
					<div class="form-check preg-guia">
						<div class="row">
							<div class="col-11">
								<input class="form-check-input" type="checkbox" value="coherencia_p2" id="coherencia_p2" name="coherencia[]" 
								@if(
									isset($proyecto->coherencia->coherencia_p2)
									&&
									($proyecto->coherencia->coherencia_p2==1)
									)
									checked
								@endif
								>
								<label class="form-check-label" for="coherencia_p2">¿Se plantea adecuadamente la necesidad educat iva que da origen al OA?</label>
							</div>
							<div class="col text-right">
								<a class="nav-link" data-toggle="modal" href="#ver_necesidad">
									<svg class="bi bi-search" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M12.442 12.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"></path>
										<path fill-rule="evenodd" d="M8.5 14a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM15 8.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"></path>
									</svg>	
								</a>
							</div>
						</div>		
					</div>
			
					<div class="preg-guia">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="coherencia_p3" id="coherencia_p3" name="coherencia[]" 
							@if(
									isset($proyecto->coherencia->coherencia_p3)
									&&
									($proyecto->coherencia->coherencia_p3==1)
								)
								checked
							@endif
							>
							<label class="form-check-label" for="coherencia_p3">¿Los contenidos ofrecen la información pertinente para alcanzar el objetivo planteado?</label>		
						</div>
						<div class="form-check">
							<div class="row">
								<div class="col-11">
									<input class="form-check-input" type="checkbox" value="coherencia_p4" id="coherencia_p4" name="coherencia[]"
									@if(
									isset($proyecto->coherencia->coherencia_p4)
									&&
									($proyecto->coherencia->coherencia_p4==1)
									)
									checked
								@endif
									>
									<label class="form-check-label" for="coherencia_p4">¿Los contenidos ofrecen más/menos información de la que es necesaria?</label>
								</div>
								<div class="col text-right">
									<a class="nav-link" data-toggle="modal" href="#ver_contenidos">
										<svg class="bi bi-search" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M12.442 12.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"></path>
											<path fill-rule="evenodd" d="M8.5 14a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM15 8.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"></path>
										</svg>	
									</a>
								</div>
							</div>
						</div>
					</div>
						
					<div class="preg-guia">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="coherencia_p5" id="coherencia_p5" name="coherencia[]" 
								@if(
									isset($proyecto->coherencia->coherencia_p5)
									&&
									($proyecto->coherencia->coherencia_p5==1)
									)
									checked
								@endif
								>
							<label class="form-check-label" for="coherencia_p5">¿Las actividades posibilitan poner en práctica los procesos cognitivos enunciados en el objetivo?</label>	
						</div>
						<div class="form-check">
							<div class="row">
								<div class="col-11">
									<input class="form-check-input" type="checkbox" value="coherencia_p6" id="coherencia_p6" name="coherencia[]"
									@if(
									isset($proyecto->coherencia->coherencia_p6)
									&&
									($proyecto->coherencia->coherencia_p6==1)
									)
									checked
								@endif>

									<label class="form-check-label" for="coherencia_p6">¿Las actividades permiten operar con la información incluida en los contenidos?</label>	
								</div>
								<div class="col text-right">
									<a class="nav-link" data-toggle="modal" href="#ver_actividades">
										<svg class="bi bi-search" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M12.442 12.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"></path>
											<path fill-rule="evenodd" d="M8.5 14a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM15 8.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"></path>
										</svg>	
									</a>
								</div>
							</div>
						</div>
					</div>
			
					<div class="preg-guia">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="coherencia_p7" id="coherencia_p7" name="coherencia[]" 
								@if(
									isset($proyecto->coherencia->coherencia_p7)
									&&
									($proyecto->coherencia->coherencia_p7==1)
									)
									checked
								@endif
								>
							<label class="form-check-label" for="coherencia_p7">¿La autoevaluación posibilita demostrar que el objetivo ha sido alcanzado?</label>				
						</div>
						<div class="form-check">
							<div class="row">
								<div class="col-11">
									<input class="form-check-input" type="checkbox" value="coherencia_p8" id="coherencia_p8" name="coherencia[]"
									@if(
										isset($proyecto->coherencia->coherencia_p8)
										&&
										($proyecto->coherencia->coherencia_p8==1)
										)
										checked
									@endif
								>
									<label class="form-check-label" for="coherencia_p8">¿La autoevalución presenta preguntas cuya respuesta pone en juego la información presentada y los procesos cognitivos que se pretende poner en práctica?</label>
							</div>
							<div class="col text-right">
									<a class="nav-link" data-toggle="modal" href="#ver_autoevaluacion">
										<svg class="bi bi-search" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M12.442 12.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"></path>
											<path fill-rule="evenodd" d="M8.5 14a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM15 8.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"></path>
										</svg>	
									</a>
								</div>
							</div>
						</div>
					</div>
					
					</br>
						<div class="conteiner-fluid text-left">
							<button class="btn btn-secondary"  role="button">
								ANÁLISIS REALIZADO
							</button>
						</div>		
				</form>
			</div>
		</div>
		<div class="col-1">
		</div>
	</div>
@stop

	<!-- Extra large modal - análisis de coherencia-->
	<div id="analisis-coherencia" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">ANÁLISIS DE COHERENCIA INTERNA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>La coherencia entre los componentes de diseño (objetivo, contenidos, actividades y autoevaluación) es fundamental para 
						lograr un buen diseño del OA y ofrecer una experiencia de aprendizaje consistente.</p>
					<p>De allí que, desde el inicio, durante y antes de dar por terminado el diseño instruccional, se recomienda utilizar la 
						guía para asegurar la coherencia interna del OA.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Extra large modal - ayuda-->
	<div id="ac_ayuda" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-marcoa-modal">
					<h5 class="modal-title">AYUDA: ANÁLISIS DE COHERENCIA INTERNA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Para cada una de las preguntas que componen la guía, presionar la <strong>LUPA</strong>. Esto permitirá visualizar la información vinculada 
					que ha sido cargada en las etapas anteriores (análisis y diseño) y que, a través del interrogante, permitirá reflexionar en términos 
					de coherencia de los componentes del OA.</p>
					<p><strong>MARCAR</strong> las preguntas sobre las cuales se ha reflexionado. Utilizar las marcas para llevar control de aquello que ha sido analizado.</p>
					<p>Presionar sobre <strong>ANÁLISIS REALIZADO</strong> para guardar cambios y conocer el porcentaje de análisis realizado hasta el momento.</p>
				</div>
			</div>
		</div>
	</div>
	
	<div id="ver_objetivo" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">OBJETIVO DEFINIDO DEL OA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>
						{{$proyecto->first()->diseño->instruccional->instruccional_p1}}
						</p>
				</div>
			</div>
		</div>
	</div>

	<div id="ver_necesidad" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">NECESIDAD EDUCATIVA PLANTEADA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>
						{{$proyecto->first()->analisis->analisis_p2}}
					</p>
				</div>
			</div>
		</div>
	</div>

	<div id="ver_contenidos" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">DESICIONES TOMADAS EN RELACIÓN A LOS CONTENIDOS DEL OA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Contenidos...</p>
				</div>
			</div>
		</div>
	</div>

	<div id="ver_actividades" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">DESICIONES TOMADAS EN RELACIÓN A LAS ACTIVIDADES DEL OA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;
						</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Actividades...</p>
				</div>
			</div>
		</div>
	</div>

	<div id="ver_autoevaluacion" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">DESICIONES TOMADAS EN RELACIÓN A LA AUTOEVALUACIÓN DEL OA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Autoevaluación...</p>
				</div>
			</div>
		</div>
	</div>
