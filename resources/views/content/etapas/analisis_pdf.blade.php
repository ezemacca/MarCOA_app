<!-- Required meta tags -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
{{-- <meta charset="utf-8"> --}}
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<!-- Fonts -->
<!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Open iconic Bootstrap -->
{{-- <link href="{{ asset('open-iconic/font/css/open-iconic-bootstrap.css') }}" rel="stylesheet"> --}}
<link href="open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">


<!-- Styles -->

<link href="{{ ltrim(asset('css/style.css'),'/') }}" rel="stylesheet">
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


		<div class=" cont-formulario">
			
		
		
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

		 <textarea id="editor" type="text" class="form-control" name="analisis_p1" > {{$analisis->analisis_p1 }}</textarea>
		

	
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

			<textarea id="editor2" type="text" class="form-control" name="analisis_p2" >{{$analisis->analisis_p2 }}</textarea>
		
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
		 <textarea id="editor3" type="text" class="form-control" name="analisis_p3" > {{$analisis->analisis_p3 }}</textarea>
		 	
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
			 <textarea id="editor4" type="text" class="form-control" name="analisis_p4" > {{$analisis->analisis_p4 }}</textarea>
		 	
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
				 <textarea id="editor5" type="text" class="form-control" name="analisis_p5" > {{$analisis->analisis_p5 }}</textarea>
		 	
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
			 <textarea id="editor6" type="text" class="form-control" name="analisis_p6" > {{$analisis->analisis_p6 }}</textarea>
		 	
		</div>				

			<div class="row">
				<div class="col text-left">
					
					<div class="conteiner-fluid text-left">
						
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
					<a class="btn btn-secondary boton-generar" href="{{route('analisis.pdf',$proyecto->id)}}" role="button">
						<svg class="bi bi-box-arrow-down" width="30" height="30" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M6.646 13.646a.5.5 0 01.708 0L10 16.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z" clip-rule="evenodd"></path>
							<path fill-rule="evenodd" d="M10 6.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V7a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
							<path fill-rule="evenodd" d="M4.5 4A1.5 1.5 0 016 2.5h8A1.5 1.5 0 0115.5 4v7a1.5 1.5 0 01-1.5 1.5h-1.5a.5.5 0 010-1H14a.5.5 0 00.5-.5V4a.5.5 0 00-.5-.5H6a.5.5 0 00-.5.5v7a.5.5 0 00.5.5h1.5a.5.5 0 010 1H6A1.5 1.5 0 014.5 11V4z" clip-rule="evenodd"></path>
						</svg>	
					</a>
				</div>
			</div>
		</div>




	