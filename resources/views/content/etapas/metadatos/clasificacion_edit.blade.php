<!--CATEGORÍA 9-->
<form method="POST" action="{{ route('metadatos.clasificacion.update',$proyecto) }}">
	{{ csrf_field() }}
	@method('PATCH')
	<div class="row">
		<div class="col-11">
			<label for="clasificaciones_p1">9.1. Clasificaciones</label>
		</div>
		<div class="col text-right">
			<a class="nav-link" data-toggle="modal" href="#dem-C_ayuda1">
				<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
				</svg>
			</a>
		</div>
	</div>
	<div class="bloque-meta">
		<div class="row">
			<div class="col-11">
				<label for="clasificaciones_p1_cla">CLASIFICACIÓN</label></br>
			</div>
		</div>
		
		<div class="form-group">
			<div class="row">
				<div class="col-11">
					<label for="clasificaciones_p1_cla_1">9.1.1. Propósito</label>
				</div>
			</div>
			<select class="form-control" name="clasificaciones_p1_cla_1" id="clasificaciones_p1_cla_1" required>
				
				<option value="{{ $proyecto->desarrollo->metadatos->clasificacion->clasificaciones_p1_cla_1 }}" selected>{{ $proyecto->desarrollo->metadatos->clasificacion->clasificaciones_p1_cla_1 }}" </option>
				<option value="Disciplina">Disciplina</option>
				<option value="Idea">Idea</option>
				<option value="Prerrequisitos">Prerrequisitos</option>
				<option value="Objetivo educativo">Objetivo educativo</option>
				<option value="Restricciones de acceso">Restricciones de acceso</option>
				<option value="Nivel educativo">Nivel educativo</option>
				<option value="Nivel de destreza">Nivel de destreza</option>
				<option value="Nivel de seguridad">Nivel de seguridad</option>
			</select>
		</div>
		
		<div class="form-group">
			<div class="row">
				<div class="col-11">
					<label for="clasificaciones_p1_cla_2">9.1.2. Rutas</label>
				</div>
			</div>
			<input type="text" class="form-control" name="clasificaciones_p1_cla_2" id="clasificaciones_p1_cla_2" value="{{ $proyecto->desarrollo->metadatos->clasificacion->clasificaciones_p1_cla_2 }}" required>
		</div>
		
		<div class="form-group">
			<div class="row">
				<div class="col-11">
					<label for="anotaciones_p1_anot_3">9.1.3. Descripción</label>
				</div>
			</div>
			<input type="text" class="form-control" name="clasificaciones_p1_cla_3" id="clasificaciones_p1_cla_3" value="{{ $proyecto->desarrollo->metadatos->clasificacion->clasificaciones_p1_cla_3 }}" required>		
		</div>

		<div class="form-group">
			<div class="row">
				<div class="col-11">
					<label for="anotaciones_p1_anot_4">9.1.4. Palabras clave </label>
				</div>
			</div>
			<input type="text" class="form-control" name="clasificaciones_p1_cla_4" id="clasificaciones_p1_cla_4" value="{{ $proyecto->desarrollo->metadatos->clasificacion->clasificaciones_p1_cla_4 }}" required>		
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
		<button class="btn btn-secondary e-desarrollo"  role="button">
			<svg class="bi bi-tools" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
				<path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
				<path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
			</svg>
			ACTUALIZAR
		</button>
	</div>
</form>
				
	<!-- Extra large modal - ayuda1-->
	<div id="dem-c_ayuda1" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">CLASIFICACIONES</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>IEEE-LOM permite someter a los materiales a múltiples clasificaciones. Esta última categoría, permite a un usuario final clasificar el 
					material educativo de acuerdo con una estructura de clasificación arbitraria. Como puede hacerse referencia a cualquier sistema de 
					clasificación, esta categoría se proporciona como un mecanismo de extensión.</p> 
					<p>Cada clasificación puede tener asociada la siguiente información:</p>
					<p>- El propósito de la clasificación. IEEE-LOM propone el siguiente vocabulario controlado de propósitos: disciplina, idea, prerrequisitos, 
					objetivo educativo, restricciones de acceso, nivel educativo, nivel de destreza, nivel de seguridad.</p>
					<p>- Una serie de rutas en distintas taxonomías.</p>
					<p>- Una descripción textual del material relativa al propósito de clasificación establecido.</p>
					<p>- Un conjunto de palabras clave relativas al propósito de clasificación establecido.</p>
					<p> CROA deja en manos del autor completar o no este metadato.</p>
				</div>
			</div>
		</div>
	</div>