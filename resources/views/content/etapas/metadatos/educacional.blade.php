<!--CATEGORÍA 5-->
<form method="POST" action="{{ route('metadatos.educacional.store',$proyecto) }}">
	{{ csrf_field() }}
	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="educacional_p1">5.1. Tipo de interactividad *</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-e_ayuda1">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<select class="form-control" name="educacional_p1" id="educacional_p1" value="{{ old('educacional_p1') }}" required>
			<option selected>Elegir tipo</option>
			<option value="1">?????</option>
			<option value="2">?????</option>
			<option value="3">?????</option>
		</select>	
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="educacional_p2">5.2. Tipo de material educativo</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-e_ayuda2">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<select class="form-control" name="educacional_p2" id="educacional_p2" value="{{ old('educacional_p2') }}" required>
			<option selected>Elegir tipo</option>
			<option value="1">?????</option>
			<option value="2">?????</option>
			<option value="3">?????</option>
		</select>		
	</div>	

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="educacional_p3">5.3. Nivel de interactividad</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-e_ayuda3">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<select class="form-control" name="educacional_p3" id="educacional_p3" value="{{ old('educacional_p3') }}" required>
			<option selected>Elegir nivel</option>
			<option value="1">Alto</option>
			<option value="2">Medio</option>
			<option value="3">Bajo</option>
		</select>	
	</div>	

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="educacional_p4">5.4. Densidad semántica</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-e_ayuda4">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<select class="form-control" name="educacional_p4" id="educacional_p4" value="{{ old('educacional_p4') }}" required>
			<option selected>Elegir densidad</option>
			<option value="1">Alto</option>
			<option value="2">Medio</option>
			<option value="3">Bajo</option>
		</select>	
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="educacional_p5">5.5. Papel jugado por el usuario</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-e_ayuda5">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<select class="form-control" name="educacional_p5" id="educacional_p5" value="{{ old('educacional_p5') }}" required>
			<option selected>Elegir papel</option>
			<option value="1">Alumno</option>
			<option value="2">Docente</option>
			<option value="3">Autor</option>
			<option value="4">Administrador</option>
		</select>		
	</div>
	
	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="educacional_p6">5.6. Contexto *</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-e_ayuda6">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<select class="form-control" name="educacional_p6" id="educacional_p6" value="{{ old('educacional_p6') }}" required>
			<option selected>Elegir contexto</option>
			<option value="1">Educación primaria</option>
			<option value="2">Educación secundaria</option>
			<option value="3">Educación superior</option>
		</select>		
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="educacional_p7">5.7. Segmento de edad típico *</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-e_ayuda7">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<input type="text" class="form-control" name="educacional_p7" id="educacional_p7" value="{{ old('educacional_p7') }}" required>				
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="educacional_p8">5.8. Dificultad</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-e_ayuda8">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<select class="form-control" name="educacional_p8" id="educacional_p8" value="{{ old('educacional_p8') }}" required>
			<option selected>Elegir dificultad</option>
			<option value="1">Difícil</option>
			<option value="2">Media</option>
			<option value="3">Fácil</option>
		</select>
	</div>	

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="educacional_p9">5.9. Tiempo típico de aprendizaje</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-e_ayuda9">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<input type="text" class="form-control" name="educacional_p9" id="educacional_p9" value="{{ old('educacional_p9') }}" required>
	</div>		

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="educacional_p10">5.10. Descripción *</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-e_ayuda10">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<input type="text" class="form-control" name="educacional_p10" id="educacional_p10" value="{{ old('educacional_p10') }}" required>
	</div>	

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="educacional_p11">5.11. Idioma</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-e_ayuda11">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<select class="form-control" name="educacional_p11" id="educacional_p11" value="{{ old('educacional_p11') }}" required>
			<option selected>Elegir idioma</option>
			<option value="1">Español</option>
			<option value="2">Inglés</option>
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
		<button class="btn btn-secondary e-desarrollo"  role="button">
			<svg class="bi bi-tools" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
				<path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
				<path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
			</svg>
			GUARDAR
		</button>
	</div>
</form>

	<!-- Extra large modal - ayuda1-->
	<div id="dem-e_ayuda1" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">TIPO DE INTERACTIVIDAD</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Tipo de interactividad soportada por el OA. IEEE-LOM propone el siguiente vocabulario para caracterizar este metadato: 
					activo (para los contenidos interactivos), expositivo (para los contenidos pasivos), mixtas (para contenidos que comparten ambas 
					características), indefinido (para contenidos para los que no procede especificar el tipo de interactividad). CROA propone caracterizarlo 
					como: activo (para el caso de utilizar, en el diseño, un escenario interactivo para la presentación de contenidos), 
					expositivo (en el caso de utilizar un escenario audiovisual) y mixto (si resulta en una combinación).</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda2-->
	<div id="dem-e_ayuda2" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">TIPO DE MATERIAL EDUCATIVO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Especifica el tipo de material, por ejemplo: ejercicio, figura, etc. Un mismo material puede tener distintos tipos asociados. 
					IEEE-LOM propone el siguiente vocabulario para caracterizar el tipo de material: ejercicio, simulación, cuestionario, diagrama, 
					figura, gráfico, índice, diapositiva, tabla, texto narrativo, examen, experimento, enunciado de problema, autoevaluación. Dado el 
					concepto de OA trabajado en CROA, se sugiere completar seleccionando varias opciones acorde al contenido del OA. Por ejemplo: 
					gráfico, cuestionario, enunciado de problema y autoevaluación. CROA no da como obligatorio este metadato, el vocabulario no es lo 
					suficientemente amplio para describir lo que propone. En el perfil de metadatos LOM-ES hay un vocabulario más rico para poder elegir. 
					Sin embargo como es obligatorio en ExeLearning, se sugiere cargar el conjunto de valores que mejor describa el contenido del OA.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda3-->
	<div id="dem-e_ayuda3" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">NIVEL DE INTERACTIVIDAD</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Permite especificar el nivel de interacción del material. IEEE-LOM propone el siguiente vocabulario controlado para especificar 
					dicho nivel: muy bajo, bajo, medio, alto, muy alto. Dado que es un metadato subjetivo, ya que no se dan parámetros concisos para 
					esta clasificación propuesta por el vocabulario controlado, CROA deja en manos del autor completar o no este metadato (es optativo).</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda4-->
	<div id="dem-e_ayuda4" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">DENSIDAD SEMÁNTICA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Medida subjetiva de la utilidad educativa del material en comparación con su tamaño y/o duración. IEEE-LOM propone usar, para 
					expresar este nivel, el mismo vocabulario controlado que para nivel de interactividad. CROA deja en manos del autor el completar o no 
					este metadato (optativo).</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda5-->
	<div id="dem-e_ayuda5" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">PAPEL JUGADO POR EL USUARIO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Papel del usuario final del material. IEEE-LOM propone el siguiente vocabulario para describir dicho papel: maestro, autor, aprendiz, 
					gestor. CROA deja en manos del autor el completar o no este metadato, dado que el vocabulario controlado puede no ajustarse a las necesidades.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda6-->
	<div id="dem-e_ayuda6" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">CONTEXO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Entorno educativo típico en el que se usará el material. IEEE-LOM propone el siguiente vocabulario: educación primaria, educación 
					secundaria, educación superior, primer ciclo universitario, segundo ciclo universitario, postgrado, primer ciclo de escuela técnica, 
					segundo ciclo de escuela técnica, formación profesional, formación continua, formación vocacional. CROA sugiere para el caso de 
					destinarse a un curso de grado universitario, elegir <em>educación superior</em>.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda7-->
	<div id="dem-e_ayuda7" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">SEGMENTO DE EDAD TÍPICO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Rango de edades típico de los usuarios a los que va dirigido el material. CROA sugiere cargar el rango de la siguiente manera: 
					edad inicial estimada – edad final estimada. Por ejemplo: <em>20 – 30</em>.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda8-->
	<div id="dem-e_ayuda8" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">DIFICULTAD</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Grado de dificultad del material. IEEE-LOM propone el siguiente vocabulario para caracterizar dicho grado: muy fácil, fácil, medio, 
					difícil, muy difícil. CROA deja en manos del autor completar o no este metadato (optativo).</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Extra large modal - ayuda9-->
	<div id="dem-e_ayuda9" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">TIEMPO TÍPICO DE APRENDIZAJE</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Tiempo de aprendizaje típico asociado con el material. CROA deja en manos del autor completar o no este metadato (optativo).</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda10-->
	<div id="dem-e_ayuda10" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">DESCRIPCIÓN</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Comentarios sobre el uso del material desde un punto de vista pedagógico. Aquí se recomienda completar y usarlo para describir: 
					(A) el objetivo del OA, (B) los conocimientos previos que se requieren para consumir el OA.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda11-->
	<div id="dem-e_ayuda11" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">IDIOMA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Idioma del usuario final. CROA deja en manos del autor completar o no este metadato, ya se cuenta con el metadato de idioma del 
					material incluido en forma obligatoria en la categoría general.</p>
				</div>
			</div>
		</div>
	</div>