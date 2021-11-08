@extends('layouts.default')
 
@section('content')
	
	<div class="container-fluid e-desarrollo">
		<div class="row">
			<div class="col text-center">			
				<svg class="bi bi-tools" width="50" height="50" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
				  <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
				  <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
				</svg>
			</div>
			<div class="col-10">
				<h1>ETAPA DE DESARROLLO</h1>
				<h2>Implementación del OA y su correspondiente carga de metadatos del estándar IEEE-LOM</h2>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#etapa-implementacion">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>					
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<ul class="nav nav-tabs">
		  <li class="nav-item active">
			<a class="nav-link active pestaña" data-toggle="tab" href="#implementacion">IMPLEMENTACIÓN DEL OA</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link pestaña" data-toggle="tab" href="#metadatos">CARGA DE METADATOS IEEE-LOM</a>
		  </li>
		</ul>	
	</div>
	
	<div class="tab-content">
		<!--IMPLEMENTACIÓN-->
		<div id="implementacion" class="tab-pane in active">
			@include('content.etapas.includes.implementacion')

		</div>
		
		<!--METADATOS-->
		<div id="metadatos" class="tab-pane">
			@include('content.etapas.includes.metadatos')
		</div>
		
	</div>
@stop

	<!-- Extra large modal - etapa de implementación-->
	<div id="etapa-implementacion" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">ETAPA DE DESARROLLO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>En esta etapa se debe abordar la selección de recursos (imágenes, videos, documentos de texto, presentaciones) para incorporar 
					en el OA. Luego, se deben utilizar las plantillas elegidas en la etapa anterior, desarrollarlas en las herramientas de autor 
					correspondientes y, finalmente, integrarlas para conformar el OA y empaquetearlo.</p>
					<p><strong>- SELECCIÓN DE RECURSOS:</strong> en función del diseño instruccional planteado, se deberán buscar los recursos necesarios.</p>
					<p><strong>- DESARROLLO DE CONTENIDOS BASADO EN PLANTILLAS:</strong> a partir de los escenarios seleccionados en la etapa anterior, 
					se deberá trabajar con las herramientas de autor correspondientes y desarrollar cada uno de los contenidos planificados.</p>
					<p><strong>- INGRESO DE METADATOS DEL OA:</strong> se recomienda trabajar con el estándar de metadatos IEEE-LOM.</p>
					<p><strong>- INTEGRACIÓN Y EMPAQUETAMIENTO:</strong> se recomienda trabajar con el estádar de empaquetamiento SCORM.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Extra large modal - ayuda1-->
	<div id="i_ayuda1" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">... ... ...</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>... ... ...</p>
				</div>
			</div>
		</div>
	</div>