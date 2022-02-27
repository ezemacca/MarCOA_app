<!--CATEGORÍA 6-->
<form method="POST" action="{{ route('metadatos.derechos.store',$proyecto) }}">
	{{ csrf_field() }}

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="derechos_p1">6.1. Costo</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-d_ayuda1">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<select class="form-control" name="derechos_p1" id="derechos_p1" value="{{ old('derechos_p1') }}" required>
			<option selected>Elegir costo</option>
			<option value="No">No</option>
			<option value="Si">Si</option>
		</select>
	</div>
	
	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="derechos_p2">6.2. Derechos de copias y otras restricciones *</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-d_ayuda2">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<select class="form-control" name="derechos_p2" id="derechos_p2" value="{{ old('derechos_p2') }}" required>
			<option selected>Elegir derechos</option>
			<option value="No">No</option>
			<option value="Si">Si</option>
		</select>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="derechos_p3">6.3. Descripción *</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-d_ayuda3">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<select class="form-control" name="derechos_p3" id="derechos_p3" value="{{ old('derechos_p3') }}" required>
			<option selected>Elegir tipo de licencia</option>
			<option value="CC BY">CC BY</option>
			<option value="CC BY-SA">CC BY-SA</option>
			<option value="CC BY-ND">CC BY-ND</option>
			<option value="CC BY-NC">CC BY-NC</option>
			<option value="CC BY-NC-SA">CC BY-NC-SA</option>
			<option value="CC BY-NC-ND">CC BY-NC-ND</option>
		</select>	
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
			GUARDAR
		</button>
	</div>
</form>

	<!-- Extra large modal - ayuda1-->
	<div id="dem-d_ayuda1" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">COSTO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Establece si el recurso es pago o no. IEEE-LOM propone como vocabulario controlado para este metadato el siguiente: si, no. 
					CROA deja en manos del autor completar o no este metadato de acuerdo a si el OA tiene un costo asociado.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda2-->
	<div id="dem-d_ayuda2" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">DERECHO DE COPIA Y OTRAS RESTRICCIONES</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Establece si el recurso está o no sujeto a derechos de copia y otras restricciones. IEEE-LOM propone como vocabulario controlado para
					este metadato: si, no. CROA sugiere completar este metadato.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda3-->
	<div id="dem-d_ayuda3" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">DESCRIPCIÓN</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Comentarios sobre las condiciones y derechos de uso del material, en este caso del OA. CROA recomienda completar con el tipo de 
					licencia. Como vocabulario controlado se recomiendan algunas de estas opciones y se recomienda poner la URL de la licencia directamente 
					(https://creativecommons.org/licenses/):</p>
					<p>- CC BY: permite a otros distribuir, adaptar, refundir y crear a partir de tu obra, incluso con fines comerciales, siempre y cuando 
					te den crédito por la creación original.</p>
					<p>- CC BY-SA: permite a otros adaptar, refundir y crear a partir de tu obra, incluso con fines comerciales, siempre y cuando te den 
					crédito y licencien sus nuevas creaciones bajo condiciones idénticas.</p>
					<p>- CC BY-ND: permite la redistribución, comercial o no comercial, siempre y cuando la obra circule íntegra y sin cambios.</p>
					<p>- CC BY-NC: permite a otros distribuir, adaptar, refundir y crear a partir de tu obra de modo no comercial.</p>
					<p>- CC BY-NC-SA: permite a otros distribuir, adaptar, refundir y crear a partir de tu obra de modo no comercial, siempre y cuando te den 
					crédito y licencien sus nuevas creaciones bajo condiciones idénticas.</p>
					<p>- CC BY-NC-ND: permite a otros descargar tus obras y compartirlas con otros siempre y cuando te den crédito, pero no permiten cambiarlas 
					de forma alguna ni usarlas comercialmente.</p>
				</div>
			</div>
		</div>
	</div>