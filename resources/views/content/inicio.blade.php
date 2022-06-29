@extends('layouts.default')
 
@section('content')


	<div class="container-fluid">		
		<div class="row">

			<div class="col text-left">
				 <div class="volver-flecha">
					<a href="{{url('/')}}">
								<img src="{{url('/images/MarCOA-18.png')}}" width="50%" height="50%"/>
					</a>
				</div>
			</div>
			<div class="col text-right">

				<a  data-toggle="modal" href="#ayuda">
					<svg class="bi bi-question-circle-fill a-marcoa" width="40" height="40" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.57 6.033H5.25C5.22 4.147 6.68 3.5 8.006 3.5c1.397 0 2.673.73 2.673 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.355H7.117l-.007-.463c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.901 0-1.358.603-1.358 1.384zm1.251 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
					</svg>
				</a>
			</div>
		</div>

		<div class="row" id="decision-proyectos">
			<div class="col text-right">
				<a  href="{{route('creacion')}}" >
				<img src="{{url('/images/MarCOA-19.png')}}" width="220px" height="220px"/> 
				</a>
			</div>

			<div class="col text-left">
				<a  href="{{route('GestorProyectos')}}" >
				<img src="{{url('/images/MarCOA-20.png')}}"  width="220px" height="220px"/> 
			</a>
			</div>
		</div>
	</div>
@stop

	<!-- Large modal - ayuda -->
	<div id="ayuda" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header a-marcoa-modal">
					<h5 class="modal-title">AYUDA: CREACIÓN/EDICIÓN DE PROYECTO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Optar por presionar <strong>CREAR PROYECTO</strong> o <strong>EDITAR PROYECTO</strong> según si se pretende empezar un proyecto nuevo o retomar un proyecto existente.</p>
				</div>
			</div>
		</div>
	</div>