<!--CATEGORÍA 4-->
<form method="POST" action="{{ route('metadatos.tecnica.store', $proyecto) }}">
	{{ csrf_field() }}

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="tecnica_p1">4.1. Formato *</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-t_ayuda1">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<select class="form-control" name="tecnica_p1" id="tecnica_p1" value="{{ old('tecnica_p1') }}" required>
			<option selected>Elegir formato</option>
			<option value="Aplicacation/zip">Application/zip</option>
			<option value="Otro">Otro</option>
		</select>		
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="tecnica_p2">4.2. Tamaño</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-t_ayuda2">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<input type="text" class="form-control" name="tecnica_p2" id="tecnica_p2" value="{{ old('tecnica_p2') }}" required>	
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="tecnica_p3">4.3. Ubicación</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-t_ayuda3">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<input type="text" class="form-control" name="tecnica_p3" id="tecnica_p3" value="{{ old('tecnica_p3') }}" required>
	</div>	

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="tecnica_p4">4.4. Requisitos *</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-t_ayuda4">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<div>
			<div class="form-group">
				<div class="row">
					<div class="col-11">
						<label for="tecnica_p4_1">4.4.1. Tipo de plataforma *</label>
					</div>
					<div class="col text-right">
						<a class="nav-link" data-toggle="modal" href="#dem-t_ayuda4-1">
							<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
							</svg>
						</a>
					</div>
				</div>
				<select class="form-control" name="tecnica_p4_1" id="tecnica_p4_1" value="{{ old('tecnica_p4_1') }}" required>
					<option selected>Elegir tipo</option>
					<option value="1">Navegador</option>
					<option value="2">Sistema operativo</option>
				</select>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-11">
						<label for="tecnica_p4_2">4.4.2. Nombre de plataforma *</label>
					</div>
					<div class="col text-right">
						<a class="nav-link" data-toggle="modal" href="#dem-t_ayuda4-2">
							<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
							</svg>
						</a>
					</div>
				</div>
				<input type="text" class="form-control" name="tecnica_p4_2" id="tecnica_p4_2" value="{{ old('tecnica_p4_2') }}" required>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-11">
						<label for="tecnica_p4_3">4.4.3. Versión mínima (y versión máxima)</label>
					</div>
					<div class="col text-right">
						<a class="nav-link" data-toggle="modal" href="#dem-t_ayuda4-3">
							<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
							</svg>
						</a>
					</div>
				</div>
				<input type="text" class="form-control" name="tecnica_p4_3" id="tecnica_p4_3" value="{{ old('tecnica_p4_3') }}" required>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-11">
						<label for="tecnica_p4_4">4.4.4. Instalación</label>
					</div>
					<div class="col text-right">
						<a class="nav-link" data-toggle="modal" href="#dem-t_ayuda4-4">
							<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
							</svg>
						</a>
					</div>
				</div>
				<input type="text" class="form-control" name="tecnica_p4_4" id="tecnica_p4_4" value="{{ old('tecnica_p4_4') }}" required>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-11">
						<label for="tecnica_p4_5">4.4.5. Otros requisitos</label>
					</div>
					<div class="col text-right">
						<a class="nav-link" data-toggle="modal" href="#dem-t_ayuda4-5">
							<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
							</svg>
						</a>
					</div>
				</div>
				<input type="text" class="form-control" name="tecnica_p4_5" id="tecnica_p4_5" value="{{ old('tecnica_p4_5') }}" required>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-11">
						<label for="tecnica_p4_6">4.4.6. Duración</label>
					</div>
					<div class="col text-right">
						<a class="nav-link" data-toggle="modal" href="#dem-t_ayuda4-6">
							<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
							</svg>
						</a>
					</div>
				</div>
				<input type="text" class="form-control" name="tecnica_p4_6" id="tecnica_p4_6" value="{{ old('tecnica_p4_6') }}" required>
			</div>
		</div>
	</div>
	
	<!--<div class="conteiner-fluid text-center">
		<button type="submit" class="btn btn-secondary e-desarrollo">
			<svg class="bi bi-tools" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
				<path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
				<path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
			</svg>
			GUARDAR		
		</button>
	</div>-->
	<div class="conteiner-fluid text-left">
		<button class="btn btn-secondary e-desarrollo" href="{{route('principal',$proyecto)}}" role="button">
			
			<svg class="bi bi-tools" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
				<path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
				<path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
			</svg>
			GUARDAR
		</button>
	</div>
</form>

	<!-- Extra large modal - ayuda1-->
	<div id="dem-t_ayuda1" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">FORMATO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Formato del OA. El estándar sugiere tomar como vocabulario la denominación MIME de los formatos. CROA propone seleccionar
					la opción application/zip, dado que los OA creados a partir de CROA seguirán el modelo de empaquetamiento de SCORM y, por lo tanto, 
					el archivo resultante será un <em>.zip</em>.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda2-->
	<div id="dem-t_ayuda2" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">TAMAÑO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Tamaño en bytes del OA. CROA lo deja como optativo.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda3-->
	<div id="dem-t_ayuda3" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">UBICACIÓN</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Forma de localizar al OA, por ejemplo: una URL o una descripción textual acerca de cómo llevar a cabo dicha localización. 
					CROA deja como optativo este metadato, acorde al tipo de repositorio en que se publicará el OA. Si se trata de un repositorio 
					del TIPO 2 (alojan sólo los metadatos), seguro se necesitará ingresar la dirección donde realmente se aloja el objeto.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda4-->
	<div id="dem-t_ayuda4" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">REQUISITOS</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Plataforma informática necesaria para utilizar este material. CROA recomienda la carga de, al menos, tipo y nombre de plataforma. 
					En caso que se requiera utilizar Firefox, debe ser especificado en el campo "Otros requisitos". </p>
				</div>
			</div>
		</div>
	</div>

	<!-- Extra large modal - ayuda4-1-->
	<div id="dem-t_ayuda4-1" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">TIPO DE PLATAFORMA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>IEEE-LOM propone el siguiente vocabulario para el tipo: navegador, sistema operativo.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda4-2-->
	<div id="dem-t_ayuda4-2" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">NOMBRE DE PLATAFORMA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>IEEE-LOM propone el siguiente vocabulario:</p> 
					<p>- En caso de sistema operativo: PC-DOS, MS-Windows, MacOS, Unix, Multi-OS, None.</p> 
					<p>- En caso de en caso navegador: Any (cualquiera), Netscape Communicator, Microsoft Internet Explorer, Opera, Firefox, Amaya.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda4-3-->
	<div id="dem-t_ayuda4-3" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">VERSIÓN MÍNIMA Y VERSIÓN MÁXIMA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Versión mínima requerida y versión máxima posible de utilizar (si se requiere especificar).</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda4-4-->
	<div id="dem-t_ayuda4-4" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">INSTALACIÓN</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Indicaciones de instalación</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Extra large modal - ayuda4-5-->
	<div id="dem-t_ayuda4-5" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">OTROS REQUISITOS</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Otros requisitos de <em>software</em> y <em>hardware</em>. CROA recomienda detallar cada uno de los requisitos que se consideren 
					importantes, por ejemplo: "es necesario tener el <em>plugin</em> de <em>flash</em> instalado".</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda4-6-->
	<div id="dem-t_ayuda4-6" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">DURACIÓN</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Este metadato está pensado para el caso de trabajar con contenido tipo <em>flash</em> con tiempo de ejecución.</p>
				</div>
			</div>
		</div>
	</div>