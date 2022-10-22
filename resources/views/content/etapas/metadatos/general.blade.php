<!--CATEGORÍA 1-->
<form method="POST" action="{{ route('metadatos.general.store',$proyecto) }}">
	{{ csrf_field() }}

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="general_p1">1.1. Identificador *</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-g_ayuda1">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<input type="text" class="form-control" name="general_p1" id="general_p1" value="{{ old('general_p1') }}" required>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="general_p2">1.2. Título *</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-g_ayuda2">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<input type="text" class="form-control" name="general_p2" id="general_p2" value="{{ old('general_p2') }}" required>
	</div>	
	
	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="general_p3">1.3. Entrada de catálogo</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-g_ayuda3">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<input type="text" class="form-control" name="general_p3" id="general_p3" value="{{ old('general_p3') }}" required>
	</div>	

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="general_p4">1.4. Idioma *</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-g_ayuda4">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<select class="form-control" name="general_p4" id="general_p4" value="{{ old('general_p4') }}" required>
			<option selected>Elegir idioma</option>
			<option value="Español">Español</option>
			<option value="Inglés">Inglés</option>
			<option value="Otro">Otro</option>
		</select>
	</div>		

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="general_p5">1.5. Descripción *</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-g_ayuda5">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<input type="text" class="form-control" name="general_p5" id="general_p5" value="{{ old('general_p5') }}" required>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="general_p6">1.6. Palabras clave * (ingresarlas separadas por una coma) </label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-g_ayuda6">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<input type="text" class="form-control" name="general_p6-1" id="general_p6-1" value="{{ old('general_p6-1') }}" required>
		</div>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="general_p7">1.7. Cobertura</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-g_ayuda7">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<input type="text" class="form-control" name="general_p7" id="general_p7" value="{{ old('general_p7') }}" required>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="general_p8">1.8. Estructura *</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-g_ayuda8">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<select class="form-control" name="general_p8" id="general_p8" value="{{ old('general_p8') }}" required>
			<option selected>Elegir estructura</option>
			<option value="Lineal">Lineal</option>
			<option value="Jerárquica">Jerárquica</option>
			<option value="En Red">En red</option>
			<option value="Mixta">Mixta</option>			
		</select>		
	</div>
 
	<div class="form-group">
		<div class="row">
			<div class="col-11">
				<label for="general_p9">1.9. Nivel de agregación *</label>
			</div>
			<div class="col text-right">
				<a class="nav-link" data-toggle="modal" href="#dem-g_ayuda9">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>
			</div>
		</div>
		<select class="form-control" name="general_p9" id="general_p9" value="{{ old('general_p9') }}" required>
			<option default>Elegir nivel</option>
			<option value="Granularidad 1: archivo simple">Granularidad 1: archivo simple</option>
			<option value="Granularidad 2: colección de recursos de granularidad 1">Granularidad 2: colección de recursos de granularidad 1</option>
			<option value="Granularidad 3: coleccion de recursos de granularidad 2">Granularidad 3: coleccion de recursos de granularidad 2</option>			
		</select>	
	</div>	
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
	<div id="dem-g_ayuda1" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">IDENTIFICADOR</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Lo carga automáticamente el <em>software</em> utilizado para la creación del OA.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda2-->
	<div id="dem-g_ayuda2" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">TÍTULO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Nombre descriptivo del OA. CROA propone cargar en forma obligatoria este metadato, completando el título que se le dará al OA.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda3-->
	<div id="dem-g_ayuda3" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">ENTRADA DE CATÁLOGO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>El valor para este metadato debe ser un par formado por un nombre de catálogo y el nombre de la entrada en dicho catálogo. 
					Se puede especificar para seleccionar el recurso cuando éste se encuentra indexado en un catálogo externo. Se carga automáticamente 
					a partir de una identificación de catálogo que genera el <em>software</em> y la entrada refiere a lo que se completó en el metadato 
					"Identificador".</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda4-->
	<div id="dem-g_ayuda4" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">IDIOMA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Es el idioma primario del OA para comunicarse con las personas que lo utilizarán. CROA propone cargar en forma obligatoria este metadato.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda5-->
	<div id="dem-g_ayuda5" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">DESCRIPCIÓN</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Descripción del OA. CROA sugiere completar este campo con la descripción de los contenidos del OA, en los siguientes términos: 
					tema que aborda y nodos de información principales que lo componen. Por ejemplo: "Este OA propone trabajar sobre la importancia de la 
					etapa de análisis en el marco del proceso de desarrollo de <em>software</em>. Presenta: una introducción, una serie de referencias 
					teóricas sobre la etapa de análisis, un video motivador junto con una actividad de reflexión, un caso de estudio y una autoevaluación.".</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda6-->
	<div id="dem-g_ayuda6" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">PALABRAS CLAVE</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Colección de frases que representan palabras clave sobre el material. CROA propone cargar en forma obligatoria este metadato, 
					con al menos tres palabras clave.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda7-->
	<div id="dem-g_ayuda7" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">COBERTURA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Eventos temporales, culturales o geográficos asociados con el material. No es obligatorio cargarlo a menos que lo amerite 
					el contenido propio del OA.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda8-->
	<div id="dem-g_ayuda8" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">ESTRUCTURA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Cómo se organiza internamente el contenido del OA. El estándar define un vocabulario controlado: colección, mixta, lineal, jerárquica,
					en red, ramificada, compartimentada y atómica. No obstante, cada autor puede tomar su propio vocabulario. CROA sugiere el siguiente: 
					lineal, jerárquica, en red, mixta.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Extra large modal - ayuda9-->
	<div id="dem-g_ayuda9" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">NIVEL DE AGREGACIÓN</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>IEEE-LOM propone 4 niveles de granularidad (1: refiere a un archivo simple como una imagen, 2: una colección de recursos de granularidad 1 
					como un .html con imágenes, 3: una colección de recursos del tipo 2 como un sitio web, 4: una colección de materiales del tipo 3 como un 
					curso). Acorde a la definición de OA de la cual se parte en CROA, el nivel de granularidad corresponde a 3 (por ejemplo: un sitio <em>web</em> 
					formado por múltiples documentos <em>html</em>). CROA sugiere cargarlo en forma obligatoria.</p>
				</div>
			</div>
		</div>
	</div>