<!--CATEGORÍA 8-->
<form method="POST" action="{{ route('metadatos.anotaciones.update',$proyecto) }}">
	{{ csrf_field() }}
	@method('PATCH')

	<div class="row">
		<div class="col-11">
			<label for="anotaciones_p1">8.1. Anotaciones</label>
		</div>
		<div class="col text-right">
			<a class="nav-link" data-toggle="modal" href="#dem-a_ayuda1">
				<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
				</svg>
			</a>
		</div>
	</div>
	<div class="bloque-meta">
		<div class="row">
			<div class="col-11">
				<label for="anotaciones_p1_anot">ANOTACIÓN</label></br>
			</div>
		</div>
		
		<div class="form-group">
			<div class="row">
				<div class="col-11">
					<label for="anotaciones_p1_anot_1">8.1.1. Anotador</label>
				</div>
			</div>
			<input type="text" class="form-control" name="anotaciones_p1_anot_1" id="anotaciones_p1_anot_1" value="{{ $proyecto->desarrollo->metadatos->anotaciones->anotaciones_p1_anot_1 }}" required>
		</div>
		
		<div class="form-group">
			<div class="row">
				<div class="col-11">
					<label for="anotaciones_p1_anot_2">8.1.2. Fecha de anotación</label>
				</div>
			</div>
			{{-- <input type="text" class="form-control" name="anotaciones_p1_anot_2" id="anotaciones_p1_anot_2" value="{{ $proyecto->desarrollo->metadatos->anotaciones->anotaciones_p1_anot_1 }}" required> --}}
		</div>
		<input placeholder="Seleccione fecha" type="date" id="anotaciones_p1_anot_2" class="form-control" name= "anotaciones_p1_anot_2" value= "{{ $proyecto->desarrollo->metadatos->anotaciones->anotaciones_p1_anot_2 }}">

					  <i class="fas fa-calendar input-prefix" tabindex=1></i>
					
			      <script >
			        $('.datepicker').datepicker();
			      </script>
		
		<div class="form-group">
			<div class="row">
				<div class="col-11">
					<label for="anotaciones_p1_anot_3">8.1.3. Texto</label>
				</div>
			</div>
			<input type="text" class="form-control" name="anotaciones_p1_anot_3" id="anotaciones_p1_anot_1" value="{{ $proyecto->desarrollo->metadatos->anotaciones->anotaciones_p1_anot_3}}" required>		
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
		<button class="btn btn-secondary e-desarrollo" role="button">
			<svg class="bi bi-tools" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
				<path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
				<path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
			</svg>
			ACTUALIZAR
		</button>
	</div>
</form>
				
	<!-- Extra large modal - ayuda1-->
	<div id="dem-a_ayuda1" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">ANOTACIONES</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Los materiales pueden tener asociados múltiples anotaciones. Dichas anotaciones pueden caracterizarse por:</p>
					<p>- El anotador que realiza la anotación.</p>
					<p>- La fecha de la anotación.</p>
					<p>- El texto en sí de la anotación.</p>
					<p>Son todos metadatos descriptivos. CROA deja en manos del autor completar o no este metadato.</p>
				</div>
			</div>
		</div>
	</div>
	