<!--CATEGORÍA 2-->

<form method="POST" action="{{ route('metadatos.ciclo.store', $proyecto) }}">
	{{ csrf_field() }}

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="ciclo_p1">2.1. Versión *</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-cv_ayuda1">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<input type="text" class="form-control" name="ciclo_p1" id="ciclo_p1" value="{{ old('ciclo_p1') }}" required>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="ciclo_p2">2.2. Estado</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-cv_ayuda2">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<select class="form-control" name="ciclo_p2" id="ciclo_p2" value="{{ old('ciclo_p2') }}" required>
			<option value="{{$proyecto->desarrollo->metadatos->ciclo->ciclo_p1}}"selected>$proyecto->desarrollo->metadatos->ciclo->ciclo_p1</option>
			<option value="Borrador">Borrador</option>
			<option value="Final">Final</option>
			<option value="Revisado">Revisado</option>
			<option value="No Disponible">No disponible</option>
		</select>	
	</div>	

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="ciclo_p3">2.3. Contribuciones *</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-cv_ayuda3">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<div>
			<label for="ciclo_p3_cont">CONTRIBUCIÓN</label></br>
			

			<label for="ciclo_p3_cont_1">2.3.1. Papel del contribuyente *</label>
			<input type="text" class="form-control" name="ciclo_p3_cont_1" id="ciclo_p3_cont_1" value="{{ old('ciclo_p3_cont_1') }}" required>

			<label for="ciclo_p3_cont_2">2.3.2. Identidad del contribuyente *</label>
			<input type="text" class="form-control" name="ciclo_p3_cont_2" id="ciclo_p3_cont_2" value="{{ old('ciclo_p3_cont_2') }}" required>

			<label for="ciclo_p3_cont_3">2.3.3. Fecha de contribución *</label>

			
			<label for="ciclo_p3_cont_3">2.3.3. Fecha de contribución *</label>
			
			<input placeholder="Seleccione fecha" type="date" id="ciclo_p3_cont_3" class="form-control" name= "ciclo_p3_cont_3" value="{{ old('ciclo_p3_cont_3') }}">

					  <i class="fas fa-calendar input-prefix" tabindex=1></i>
					
			      <script >
			        $('.datepicker').datepicker();
			      </script>


		</div>
		<div class="conteiner-fluid text-right">			
			<a class="btn btn-secondary boton-agregar" href="" role="button">				
				<svg class="bi bi-plus" width="28" height="28" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M10 5.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H6a.5.5 0 010-1h3.5V6a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
					<path fill-rule="evenodd" d="M9.5 10a.5.5 0 01.5-.5h4a.5.5 0 010 1h-3.5V14a.5.5 0 01-1 0v-4z" clip-rule="evenodd"></path>
				</svg>
			</a>
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
	<div id="dem-cv_ayuda1" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">VERSIÓN</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Edición o versión del material. CROA sugiere ponerlo con un número en forma obligatoria. Se usará el "." 
					para indicar que se trata de una subversión, por ejemplo: <em>versión 2.1</em>.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda2-->
	<div id="dem-cv_ayuda2" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">ESTADO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Estado de producción del material. IEEE-LOM propone el siguiente vocabulario controlado (aunque puede utilizarse cualquier otro): 
					borrador, final, revisado y no disponible. CROA no sugiere cargar este metadato en forma obligatoria, ya que considera que la publicación 
					del OA en un repositorio (o EVEA) implica haber revisado el OA y se trata del OA final. En todo caso, el valor recomendado es <em>final</em>. 
					Puede usarse el metadato de versión para ir mostrando la evolución del OA en distintas versiones.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda3-->
	<div id="dem-cv_ayuda3" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">CONTRIBUCIONES</h5>
					
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Información acerca de un contribuyente en la producción del material. CROA sugiere como obligatorio que se cargue el autor. Un mismo 
					material puede tener asociados múltiples contribuyentes. La información de cada contribuyente puede incluir las siguientes características:</p>
					<p>- Papel del contribuyente en el proceso de producción: CROA sugiere que al menos se cargue el papel de autor/creador.</p>
					<p>- Identidad del contribuyente: IEEE-LOM indica que se use este metadato para especificar varias afiliaciones para un mismo contribuyente. 
					CROA sugiere escribir el nombre de cada contribuyente con el siguiente formato: nombre y apellido. Para estandarizar el formato de este metadato,
					CROA sugiere no poner iniciales de nombres si no los nombres completos, sin comas, sólo separados por espacios en blanco. Por ejemplo: 
					<em>Julieta Mendizabal</em>.</p>
					<p>- Fecha de contribución.</p>
					<p>Se pueden completar estos tres elementos por cada contribuyente del OA.</p>
				</div>
			</div>
		</div>
	</div>