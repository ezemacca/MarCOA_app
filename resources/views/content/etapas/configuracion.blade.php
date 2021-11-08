@extends('layouts.default')
 
@section('content')
	<div class="container-fluid config">
		<div class="row">
			<div class="col-10">
				<h1>CONFIGURACIÓN</h1>
				<h2 style="color:BLACK;">Selección de documentación y de características para el empaquetamiento del OA</h2>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#config-ayuda">
					<svg class="bi bi-question-circle-fill a-marcoa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.57 6.033H5.25C5.22 4.147 6.68 3.5 8.006 3.5c1.397 0 2.673.73 2.673 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.355H7.117l-.007-.463c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.901 0-1.358.603-1.358 1.384zm1.251 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
					</svg>
				</a>					
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<form method="POST" action="{{ url('configuracion') }}">
			{{ csrf_field() }}			

			<div class="row">
				<div class="col bloque-config">
					<div class="form-group">
						<div class="row">
							<div class="col-10">
								<label for="configuracion_p1">DOCUMENTACIÓN DEL OA A EXPORTAR:</label>
							</div>
							<div class="col text-right">
								<a class="nav-link" data-toggle="modal" href="#c_ayuda1">
									<svg class="bi bi-question-circle-fill a-marcoa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.57 6.033H5.25C5.22 4.147 6.68 3.5 8.006 3.5c1.397 0 2.673.73 2.673 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.355H7.117l-.007-.463c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.901 0-1.358.603-1.358 1.384zm1.251 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
									</svg>
								</a>
							</div>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck1_1">
							<label class="custom-control-label" for="customCheck1_1">Análisis</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck1_2">
							<label class="custom-control-label" for="customCheck1_2">Diseño instruccional</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck1_3">
							<label class="custom-control-label" for="customCheck1_3">Diseño de estructura</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck1_4">
							<label class="custom-control-label" for="customCheck1_4">Diseño multimedial</label>
						</div>
					</div>
				</div>
			</div>
			<div class="row">	
				<div class="col bloque-config">
					<div class="form-group">
						<div class="row">
							<div class="col-10">
								<label for="configuracion_p2">CARACTERÍSTICAS DEL PAQUETE SCORM A GENERAR:</label>
							</div>
							<div class="col text-right">
								<a class="nav-link" data-toggle="modal" href="#c_ayuda2">
									<svg class="bi bi-question-circle-fill a-marcoa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.57 6.033H5.25C5.22 4.147 6.68 3.5 8.006 3.5c1.397 0 2.673.73 2.673 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.355H7.117l-.007-.463c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.901 0-1.358.603-1.358 1.384zm1.251 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
									</svg>
								</a>
							</div>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck2_1">
							<label class="custom-control-label" for="customCheck2_1">..............</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck2_2">
							<label class="custom-control-label" for="customCheck2_2">..............</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck2_3">
							<label class="custom-control-label" for="customCheck2_3">..............</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck2_4">
							<label class="custom-control-label" for="customCheck2_4">..............</label>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="row justify-content-center" style="padding-top:20px;">
				<button type="submit" class="btn btn-secondary">EXPORTAR</button>
			</div>-->
			<div class="conteiner-fluid text-center">
				<a class="btn btn-secondary" href="{{route('principal')}}" role="button">EXPORTAR</a>
			</div>	
		</form>	
	</div>
@stop

	<!-- Extra large modal - ayuda-->
	<div id="config-ayuda" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-marcoa-modal">
					<h5 class="modal-title">AYUDA: CONFIGURACIÓN</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>1. <strong>MARCAR</strong> aquella documentación del OA que se pretenda incluir en la exportación: análisis, diseño instruccional, diseño de estructura y/o diseño multimedial.</p>
					<p>2. <strong>MARCAR</strong> aquellas carectarísticas pretendidas para el paquete SCORM a generar.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Large modal - ayuda -->
	<div id="c_ayuda1" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header a-marcoa-modal">
					<h5 class="modal-title">AYUDA: DOCUMENTACIÓN DEL OA A EXPORTAR</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p><strong>MARCAR</strong> aquella documentación del OA que se pretenda incluir en la exportación: análisis, diseño instruccional, diseño de estructura y/o diseño multimedial.</p>
					<p>Cada documento será exportado en formato PDF y contendrá la información almacenada en la respectiva etapa.</p>
				</div>
			</div>
		</div>
	</div>
	
	<div id="c_ayuda2" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header a-marcoa-modal">
					<h5 class="modal-title">AYUDA: CARACTERÍSTICAS DEL PAQUETE SCORM A GENERAR</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p><strong>MARCAR</strong> aquellas carectarísticas pretendidas para el paquete SCORM a generar.</p>
				</div>
			</div>
		</div>
	</div>