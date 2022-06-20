@extends('layouts.default')
 
@section('content')
	
	<div class="container-fluid e-diseño">
		<div class="row">
			<div class="col text-center">			
				<svg class="bi bi-brush" width="50" height="50" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
				  <path d="M15.213 1.018a.572.572 0 0 1 .756.05.57.57 0 0 1 .057.746C15.085 3.082 12.044 7.107 9.6 9.55c-.71.71-1.42 1.243-1.952 1.596-.508.339-1.167.234-1.599-.197-.416-.416-.53-1.047-.212-1.543.346-.542.887-1.273 1.642-1.977 2.521-2.35 6.476-5.44 7.734-6.411z"/>
				  <path d="M7 12a2 2 0 0 1-2 2c-1 0-2 0-3.5-.5s.5-1 1-1.5 1.395-2 2.5-2a2 2 0 0 1 2 2z"/>
				</svg>
			</div>
			<div class="col-10">
				<h1>ETAPA DE DISEÑO</h1>
				<h2>Planteo del diseño instruccional, la estructura y el diseño multimedial del OA</h2>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#etapa-diseño">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>					
			</div>
		</div>
	</div>	
	
	{{-- se realiza el manejo de cada subetapa con un parámetro traído del constructor que sólo se autoincrementa cuando se realiza correctamente un STORE en la base de datos --}}
	<div class="container-fluid cont-formulario">
		<ul class="nav nav-tabs">
		@if($subetapa==1 )
			  <li class="nav-item active ">
				<a class="nav-link active pestaña" data-toggle="tab" href="#diseño_inst">DISEÑO INSTRUCCIONAL</a>
			  </li>
		 @elseif($subetapa>1)
		  <li class="nav-item ">
			<a class="nav-link  pestaña" data-toggle="tab" href="#diseño_inst"> EDITAR DISEÑO INSTRUCCIONAL</a>
		  </li>
		 @endif

		 @if($subetapa==2)
			  <li class="nav-item active">
				<a class="nav-link active pestaña" data-toggle="tab" href="#estructura">ESTRUCTURA</a>
			  </li>
		 @elseif($subetapa>2)
			  <li class="nav-item ">
				<a class="nav-link  pestaña" data-toggle="tab" href="#estructura">EDITAR ESTRUCTURA</a>
			  </li>
		 @endif

		@if($subetapa==3)

		  <li class="nav-item active">
			<a class="nav-link active pestaña" data-toggle="tab" href="#diseño_mult">DISEÑO MULTIMEDIAL</a>
		  </li>

		@elseif($subetapa>3)
		  <li class="nav-item">
			<a class="nav-link pestaña" data-toggle="tab" href="#diseño_mult">EDITAR DISEÑO MULTIMEDIAL</a>
		  </li>
		  @endif
		</ul>	
	</div>
	
	<div class="tab-content">
		<!--DISEÑO INSTRUCCIONAL-->
		@if($subetapa>=2)
			<div id="diseño_inst" class="tab-pane">
				@include('content.etapas.includes.instruccional_edit')
			</div>
		@elseif($subetapa==1)
			<div id="diseño_inst" class="tab-pane in active">
				@include('content.etapas.includes.instruccional')
			</div>

		@endif

		<!--ESTRUCTURA-->
		@if($subetapa>=3)
			<div id="estructura" class="tab-pane ">
				@include('content.etapas.includes.estructura_edit')
			</div>
		@elseif($subetapa==2)
			<div id="estructura" class="tab-pane in active">
				@include('content.etapas.includes.estructura')
			</div>
		@endif
		
		<!--DISEÑO MULTIMEDIAL-->
		@if($subetapa>=4)
			<div id="diseño_mult" class="tab-pane  ">
				@include('content.etapas.includes.multimedial')
			</div>	
			<br><br><br>
		<div class="centrado">
			<a > Usted ya completó esta etapa, si quiere editar alguna de las subetapas, seleccionela arriba.</a>
		</div>
		@elseif($subetapa==3)
		<div id="diseño_mult" class="tab-pane in active">
			@include('content.etapas.includes.multimedial')
		</div>	

		@endif
		
		



	</div>

@stop
	<!-- Extra large modal - etapa de diseño-->
	<div id="etapa-diseño" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">ETAPA DE DISEÑO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>En esta etapa se trabaja sobre aspectos de diseño instruccional y aspectos de la estructura que tendrá el OA. Además, se analiza 
						el diseño  multimedial a partir de una serie de escenarios que se proponen por defecto, a manera de guía para los autores del OA.</p>
					<p>Se propone una serie de preguntas como guía para la toma de decisiones fundamentadas, brindando herramientas que faciliten la 
						creación de un diseño coherente, pertinente de acuerdo a la necesidad planteada y ajustado a lo que se entiende por OA.</p>
					<p>Las distintas teorías del aprendizaje y modelos de enseñanza ofrecen elementos para comprender mejor las posibilidades de diseño del
						OA y sustentar las decisiones que se tomen en relación a sus componentes. No existe una respuesta única para satisfacer distintas 
						necesidades de formación. La pertinencia de diferentes perspectivas teóricas, para fundamentar y guiar el diseño instruccional, dependerá 
						en gran medida de la problemática a la que se busca dar una solución. De allí que se presenten distintas opciones que responden a diversas 
						perspectivas. Asimismo, estas recomendaciones no deben considerarse desde un punto de vista prescriptivo sino como orientaciones y 
						criterios de acción que contribuyan a las decisiones que los docentes tomen sobre el diseño de sus propios materiales.</p>
					<p>Si bien el diseño de los componentes del OA se presenta de forma lineal, ello no implica que los componentes deban pensarse de esta forma. Se propone que 
						el diseño se interprete como un proceso dinámico, en el que se introducirán cambios en sus distintos aspectos de acuerdo a las decisiones 
						que se vayan tomando progresivamente.</p>
				</div>
			</div>
		</div>
	</div>