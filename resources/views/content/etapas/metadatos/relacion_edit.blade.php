<!--CATEGORÍA 7-->
<form method="POST" action="{{ route('metadatos.relacion.update',$proyecto )}}">
	{{ csrf_field() }}
	@method('PATCH')
	<div class="container-fluid text-left">
		<div class="row">
			<div class="col-11">
				<label for="relacion_p1">7.1. Relaciones *</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-r_ayuda">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<div class="bloque-meta">
			<div class="row">
				<div class="col-11">
					<label for="relacion_p1_rel">RELACIÓN</label></br>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-11">
						<label for="relacion_p1_rel_1">7.1. Clase de la relación *</label>
					</div>
					<div class="col text-right">
						<a class="nav-link" data-toggle="modal" href="#dem-r_ayuda1">
							<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
							</svg>
						</a>
					</div>
				</div>
				<select class="form-control" name="relacion_p1_rel_1" id="relacion_p1_rel_1" required>

					<option value="{{ $proyecto->desarrollo->metadatos->relacion->relacion_p1_rel_1 }}" selected>{{ $proyecto->desarrollo->metadatos->relacion->relacion_p1_rel_1 }}</option>
					<option selected>Elegir clase</option>
					<option value="Es parte de (el material es parte de otro más complejo)">
					Es parte de (el material es parte de otro más complejo)
					</option>
					<option value=""></option>
					<option value="
					Tiene parte de (el material tiene a otro como parte integrante)
					">
					Tiene parte de (el material tiene a otro como parte integrante)	
					</option>
					<option value="Es una versión de (el material es una versión de otro)
					">
					Es una versión de (el material es una versión de otro)	
					</option>
					<option value="Tiene a otro como versión (el material tiene a otro como una versión)">
					Tiene a otro como versión (el material tiene a otro como una versión)	
					</option>
					<option value="Es un formato de (el material es la descripción de un formato de otro material)">
					Es un formato de (el material es la descripción de un formato de otro material)	
					</option>
					<option value="Tiene el formato (el material tiene a otro como formato)
					">Tiene el formato (el material tiene a otro como formato)
					</option>
					<option value="Refiere a (el material refiere al otro)">
					Refiere a (el material refiere al otro)	
					</option>
					<option value="Es referenciado por (el material está referido por el otro)">
					Es referenciado por (el material está referido por el otro)	
					</option>
					<option value="Está basado en (el material está basado en otro)
					">Está basado en (el material está basado en otro)	
					</option>
					<option value="
					Es la base para (el material es la base de otro)
					">
					Es la base para (el material es la base de otro)
					</option>
					<option value="
					Requiere (el material requiere la presencia de otro)
					">
					Requiere (el material requiere la presencia de otro)	
					</option>
					<option value="
					Es requerido por (el material es requerido por otro)
					">
					Es requerido por (el material es requerido por otro)
					</option>
				</select>	
			</div>
			
			<div class="form-group">
				<div class="row">
					<div class="col-11">
						<label for="relacion_p1_rel_2">7.2. Caracterización del otro material *</label>
					</div>
					<div class="col text-right">
						<a class="nav-link" data-toggle="modal" href="#dem-r_ayuda2">
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
								<label for="relacion_p1_rel_2_1">7.1.2.1. Identificador *</label>
							</div>
						</div>
						<input type="text" class="form-control" name="relacion_p1_rel_2_1" id="relacion_p1_rel_2_1" value="{{ $proyecto->desarrollo->metadatos->relacion->relacion_p1_rel_2_1 }}" required>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-11">
								<label for="relacion_p1_rel_2_2">7.1.2.2. Descripción *</label>
							</div>
						</div>
						<input type="text" class="form-control" name="relacion_p1_rel_2_2" id="relacion_p1_rel_2_2" value="{{ $proyecto->desarrollo->metadatos->relacion->relacion_p1_rel_2_2 }}" required>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-11">
								<label for="relacion_p1_rel_2_3">7.1.2.3. Entrada de catálogo *</label>
							</div>
						</div>
						<input type="text" class="form-control" name="relacion_p1_rel_2_3" id="relacion_p1_rel_2_3" value="{{ $proyecto->desarrollo->metadatos->relacion->relacion_p1_rel_2_3 }}" required>
					</div>					
				</div>
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
		<button class="btn btn-secondary e-desarrollo" role="button">
			<svg class="bi bi-tools" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
				<path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
				<path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
			</svg>
			ACTUALIZAR
		</button>
	</div>
</form>
				

	<!-- Extra large modal - ayuda-->
	<div id="dem-r_ayuda" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">RELACIONES</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>La categoría RELACIÓN considera metadatos referidos a la relación entre el material y otros materiales. Un mismo material puede mantener 
					múltiples relaciones con otros materiales.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda1-->
	<div id="dem-r_ayuda1" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">CLASE DE RELACIÓN</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>IEEE-LOM propone el siguiente vocabulario controlado para caracterizar dicha clase: "es parte de" (el material es parte de otro más 
					complejo), "tiene parte de" (el material tiene a otro como parte integrante), "es una versión de" (el material es una versión de otro), 
					"tiene a otro como versión" (el material tiene a otro como una versión), "es un formato de" (el material es la descripción de un formato 
					de otro material), "tiene el formato" (el material tiene a otro como formato), "refiere a" (el material refiere al otro), "es referenciado 
					por" (el material está referido por el otro), "está basado en" (el material está basado en otro), "es la base para" (el material es la base 
					de otro), "requiere" (el material requiere la presencia de otro), "es requerido por" (el material es requerido por otro). Se recomienda 
					completar este metadato, sólo en el caso de que los OAs relacionados estén publicados en repositorios en que puedan ser referenciados.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda2-->
	<div id="dem-r_ayuda2" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">CARACTERIZACIÓN DEL OTRO MATERIAL</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>La caracterización del otro material con el que se establece la relación se puede dar en términos de:</p>
					<p>- El identificador único del otro material.</p>
					<p>- La descripción del otro material.</p>
					<p>- Una entrada en un catálogo para el otro material.</p>
				</div>
			</div>
		</div>
	</div>