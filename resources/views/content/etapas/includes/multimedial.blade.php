			<div class="text-right" style="padding-bottom: 10px;">
				<a class="nav-link" data-toggle="modal" href="#d_multimedial">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>				
				</a>					
			</div>

			<form method="POST" action="{{ url('diseño') }}">
				{{ csrf_field() }}
				
				<div class="form-group">
					<div class="row">
						<div class="col-11">
							<label for="diseño_mult_p1">1. ¿Qué tipos de escenarios se utilizarán?</label>	
						</div>
						<div class="col text-right">
							<a class="nav-link" data-toggle="modal" href="#dm_ayuda1">
								<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
								</svg>				
							</a>
						</div>
					</div>	
					<input type="text" class="form-control" name="diseño_mult_p1" id="diseño_mult_p1" value="{{ old('diseño_mult_p1') }}" required>
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-11">
							<label for="diseño_mult_p2">2. Mapeo entre nodos y plantillas multimedia:</label>
						</div>
						<div class="col text-right">
							<a class="nav-link" data-toggle="modal" href="#dm_ayuda2">
								<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
								</svg>					
							</a>
						</div>
					</div>	
					<input type="text" class="form-control" name="diseño_mult_p2" id="diseño_mult_p2" value="{{ old('diseño_mult_p2') }}" required>
					<table class="table text-center">
					  <thead>
						<tr>
						  <!--<th scope="col">#</th>-->
						  <th scope="col">NOMBRE DEL NODO</th>
						  <th scope="col">DESCRIPCIÓN</th>
						  <th scope="col">PLANTILLA A UTILIZAR</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <!--<th scope="row">1</th>-->
						  <td><input type="text" class="form-control" name="diseño_mult_p2_f1c1" id="diseño_mult_p2_f1c1" value="{{ old('diseño_mult_p2_f1c1') }}" required></td>
						  <td><input type="text" class="form-control" name="diseño_mult_p2_f1c2" id="diseño_mult_p2_f1c2" value="{{ old('diseño_mult_p2_f1c2') }}" required></td>
						  <td><input type="text" class="form-control" name="diseño_mult_p2_f1c3" id="diseño_mult_p2_f1c3" value="{{ old('diseño_mult_p2_f1c3') }}" required></td>
						</tr>
						<tr>
						  <!--<th scope="row">2</th>-->
						  <td><input type="text" class="form-control" name="diseño_mult_p2_f2c1" id="diseño_mult_p2_f2c1" value="{{ old('diseño_mult_p2_f2c1') }}" required></td>
						  <td><input type="text" class="form-control" name="diseño_mult_p2_f2c2" id="diseño_mult_p2_f2c2" value="{{ old('diseño_mult_p2_f2c2') }}" required></td>
						  <td><input type="text" class="form-control" name="diseño_mult_p2_f2c3" id="diseño_mult_p2_f2c3" value="{{ old('diseño_mult_p2_f2c3') }}" required></td>
						</tr>
						<tr>
						  <!--<th scope="row">3</th>-->
						  <td><input type="text" class="form-control" name="diseño_mult_p2_f3c1" id="diseño_mult_p2_f3c1" value="{{ old('diseño_mult_p2_f3c1') }}" required></td>
						  <td><input type="text" class="form-control" name="diseño_mult_p2_f3c2" id="diseño_mult_p2_f3c2" value="{{ old('diseño_mult_p2_f3c2') }}" required></td>
						  <td><input type="text" class="form-control" name="diseño_mult_p2_f3c3" id="diseño_mult_p2_f3c3" value="{{ old('diseño_mult_p2_f3c3') }}" required></td>
						</tr>
						<tr>
						  <!--<th scope="row">4</th>-->
						  <td><input type="text" class="form-control" name="diseño_mult_p2_f4c1" id="diseño_mult_p2_f4c1" value="{{ old('diseño_mult_p2_f4c1') }}" required></td>
						  <td><input type="text" class="form-control" name="diseño_mult_p2_f4c2" id="diseño_mult_p2_f4c2" value="{{ old('diseño_mult_p2_f4c2') }}" required></td>
						  <td><input type="text" class="form-control" name="diseño_mult_p2_f4c3" id="diseño_mult_p2_f4c3" value="{{ old('diseño_mult_p2_f4c3') }}" required></td>
						</tr>
					  </tbody>
					</table>
					<div class="conteiner-fluid text-right">			
						<a class="btn btn-secondary boton-agregar" href="" role="button">				
							<svg class="bi bi-plus" width="28" height="28" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M10 5.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H6a.5.5 0 010-1h3.5V6a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
								<path fill-rule="evenodd" d="M9.5 10a.5.5 0 01.5-.5h4a.5.5 0 010 1h-3.5V14a.5.5 0 01-1 0v-4z" clip-rule="evenodd"></path>
							</svg>
						</a>
					</div>
				</div>				
				
				<div class="row">
					<div class="col text-left">
						<!--<button type="submit" class="btn btn-secondary e-diseño">
							<svg class="bi bi-brush" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
								<path d="M15.213 1.018a.572.572 0 0 1 .756.05.57.57 0 0 1 .057.746C15.085 3.082 12.044 7.107 9.6 9.55c-.71.71-1.42 1.243-1.952 1.596-.508.339-1.167.234-1.599-.197-.416-.416-.53-1.047-.212-1.543.346-.542.887-1.273 1.642-1.977 2.521-2.35 6.476-5.44 7.734-6.411z"/>
								<path d="M7 12a2 2 0 0 1-2 2c-1 0-2 0-3.5-.5s.5-1 1-1.5 1.395-2 2.5-2a2 2 0 0 1 2 2z"/>
							</svg>
							GUARDAR
						</button>-->
						<div class="conteiner-fluid text-left">
							<a class="btn btn-secondary e-diseño" {{-- href="{{route('principal')}}" --}} role="button">
								<svg class="bi bi-brush" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
									<path d="M15.213 1.018a.572.572 0 0 1 .756.05.57.57 0 0 1 .057.746C15.085 3.082 12.044 7.107 9.6 9.55c-.71.71-1.42 1.243-1.952 1.596-.508.339-1.167.234-1.599-.197-.416-.416-.53-1.047-.212-1.543.346-.542.887-1.273 1.642-1.977 2.521-2.35 6.476-5.44 7.734-6.411z"/>
									<path d="M7 12a2 2 0 0 1-2 2c-1 0-2 0-3.5-.5s.5-1 1-1.5 1.395-2 2.5-2a2 2 0 0 1 2 2z"/>
								</svg>
								GUARDAR
							</a>
						</div>	
					</div>
					<div class="col text-right">
						<a class="btn btn-secondary boton-generar" href="" role="button">
							<svg class="bi bi-box-arrow-down" width="30" height="30" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M6.646 13.646a.5.5 0 01.708 0L10 16.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z" clip-rule="evenodd"></path>
								<path fill-rule="evenodd" d="M10 6.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V7a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
								<path fill-rule="evenodd" d="M4.5 4A1.5 1.5 0 016 2.5h8A1.5 1.5 0 0115.5 4v7a1.5 1.5 0 01-1.5 1.5h-1.5a.5.5 0 010-1H14a.5.5 0 00.5-.5V4a.5.5 0 00-.5-.5H6a.5.5 0 00-.5.5v7a.5.5 0 00.5.5h1.5a.5.5 0 010 1H6A1.5 1.5 0 014.5 11V4z" clip-rule="evenodd"></path>
							</svg>	
						</a>
					</div>
				</div>				
			</form>
			
			<!--<div class="conteiner-fluid text-right">
				<a class="btn btn-secondary boton-generar" href="" role="button">
					<svg class="bi bi-box-arrow-down" width="30" height="30" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M6.646 13.646a.5.5 0 01.708 0L10 16.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z" clip-rule="evenodd"></path>
					  <path fill-rule="evenodd" d="M10 6.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V7a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
					  <path fill-rule="evenodd" d="M4.5 4A1.5 1.5 0 016 2.5h8A1.5 1.5 0 0115.5 4v7a1.5 1.5 0 01-1.5 1.5h-1.5a.5.5 0 010-1H14a.5.5 0 00.5-.5V4a.5.5 0 00-.5-.5H6a.5.5 0 00-.5.5v7a.5.5 0 00.5.5h1.5a.5.5 0 010 1H6A1.5 1.5 0 014.5 11V4z" clip-rule="evenodd"></path>
					</svg>	
				</a>
			</div
	<!-- Extra large modal - diseño multimedial-->
	<div id="d_multimedial" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">SUB-ETAPA DE DISEÑO MULTIMEDIAL</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>En esta sub-etapa, se proponen diferentes escenarios para la presentación de contenidos y, por otro lado, una serie de 
						plantillas para el diseño de actividades y autoevaluaciones.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda1-->
	<div id="dm_ayuda1" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">QUÉ TIPOS DE ESCENARIOS SE UTILIZARÁN</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p><strong>ESCENARIOS PARA LA PRESENTACIÓN DE CONTENIDOS</strong></p>
					<p><strong>- Escenario basado en contenido audiovisual:</strong> se propone que el docente use una serie de plantillas 
						de herramientas de autor para la construcción de nodos de información basados en la presentación de: imágenes, videos
						y audios. Algunas plantillas sugeridas: reproductor de .flv y de .mp3, zoom (de Ardora) o imagen ampliada (eXeLearning), 
						galería de imágenes (eXeLearning, Ardora), escena de rayos X (Cuadernia), caso de estudio (eXeLearning), libro (Ardora,
						Cuadernia).</p>
					<p><strong>- Escenario basado en interactividad:</strong> se propone al docente una serie de plantillas de 
						diferentes herramientas de autor que permiten al alumno interactuar con los elementos que aparecen en la pantalla. 
						Algunas plantillas sugeridas: panorama interactivo (Ardora), escenario de realidad aumentada (Cuadernia), 
						elementos móviles (Ardora), zoom (ExeLearning, Ardora).</p>
					<p><strong>- Escenario híbrido:</strong> se puede desarrollar un escenario híbrido a partir de los descriptos 
						anteriormente.</p>
					<p><strong>PLANTILLAS PARA EL DISEÑO DE ACTIVIDADES Y AUTOEVALUACIONES</strong></p>
					<p><strong>-</strong> Juegos de palabras (sopa letras, memoria); actividades de selección (párrafos, panel gráfico de Ardora); 
						actividades de ordenamiento de frases, párrafos e imágenes; clasificación de palabras e imágenes; actividades de 
						verdadero/falso; múltiple selección (exeLearning, Ardora, Cuadernia); actividades de selección de partes de una imagen 
						(Ardora); actividades de relación: imagen-frase, imagen-imagen (Ardora, Cuadernia, JClic, Hotpotatoes); actividades de 
						distinguir sonido y autodictado (Ardora); paquete de actividades (JClic o Hotpotatoes).</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda2-->
	<div id="dm_ayuda2" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">MAPEO ENTRE NODOS Y PLANTILLAS MULTIMEDIA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Aquí, se presenta un cuadro para plasmar las decisiones de la etapa de diseño, en relación a los nodos de información 
						planificados y su vinculación con las plantillas a utilizar (escenarios de presentación de contenidos y plantillas de 
						actividades), correspondientes a la metodología CROA.</p> 
						<p>Quien lleve adelante la metodología deberá completar cada fila de la tabla con: el nombre del nodo de información 
						correspondiente, una breve descripción o comentarios relevantes y el nombre de la plantilla a utilizar y la 
						herramienta de autor con la que se corresponde.</p> 
						<p>Por ejemplo: NOMBRE DEL NODO: Presentación del OA, DESCRIPCIÓN: en esta página se presentará el título y el 
						objetivo del OA, PLANTILLA A UTILIZAR: se utilizará la plantilla de objetivos de eXeLearning.</p> 
						<p>CROA sugiere utilizar plantillas que realicen un aprovechamiento del lenguaje multimedial, en donde el uso de 
						videos, imágenes y animaciones enriquezcan la presentación de contenidos y la interactividad. Al mismo tiempo, se 
						sugiere aprovechar las posibilidades de las plantillas de actividades para lograr la interactividad del destinatario 
						con el OA.</p>
				</div>
			</div>
		</div>
	</div>