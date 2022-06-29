			<div class="text-right" style="padding-bottom: 10px;">
				<a class="nav-link" data-toggle="modal" href="#d_estructura">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>				
				</a>					
			</div>

			<form 
				method="POST"
			 	action="{{ route('estructura.update',['proyecto'=>$proyecto,'estructura'=>$estructura])}}" enctype="multipart/form-data">
				@csrf 
				@method('PATCH')
				
				<div class="form-group">
					<div class="row">
						<div class="col-11">
							<label for="estructura_p1">1. ¿Cómo se diseña y planifica el recorrido entre los diversos nodos de información?</label>
						</div>
						<div class="col text-right">
							<a class="nav-link" data-toggle="modal" href="#de_ayuda1">
								<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
								</svg>
							</a>
						</div>
					</div>	
					<select class="form-control" name="estructura_p1" id="estructura_p1" value="{{ old('estructura_p1') }}" required>
						<option selected>{{$estructura->estructura_p1}}</option>
						<option value="Secuencial">Secuencial</option>
						<option value="Jerárquica">Jerárquica</option>
						<option value="En red">En red</option>
						<option value="Mixta">Mixta</option>
					</select>
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-11">
							<label for="estructura_p2">2. Mapa de navegación:</label>
						</div>
						<div class="col text-right">
							<a class="nav-link" data-toggle="modal" href="#de_ayuda2">
								<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
								</svg>
							</a>
						</div>
					</div>	
					<input type="file" class="form-control-file" name="estructura_p2" id="estructura_p2">
					@if ($estructura->estructura_p1 <> null)
						<label>  Archivo anterior= {{$estructura->estructura_p2}} </label>
					@endif
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
							<button class="btn btn-secondary e-diseño" {{-- href="{{route('principal')}}" --}} role="button">
								<svg class="bi bi-brush" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
									<path d="M15.213 1.018a.572.572 0 0 1 .756.05.57.57 0 0 1 .057.746C15.085 3.082 12.044 7.107 9.6 9.55c-.71.71-1.42 1.243-1.952 1.596-.508.339-1.167.234-1.599-.197-.416-.416-.53-1.047-.212-1.543.346-.542.887-1.273 1.642-1.977 2.521-2.35 6.476-5.44 7.734-6.411z"/>
									<path d="M7 12a2 2 0 0 1-2 2c-1 0-2 0-3.5-.5s.5-1 1-1.5 1.395-2 2.5-2a2 2 0 0 1 2 2z"/>
								</svg>
								Guardar Cambios
							</button>
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
			</div>-->

	<!-- Extra large modal - diseño de estructura-->
	<div id="d_estructura" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">SUB-ETAPA DE DISEÑO DE ESTRUCTURA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>El diseño de la estructura del OA consiste en determinar la manera en que podrán recorrerse los diversos nodos de
						información que lo conforman. Esto se reflejará en el mapa de navegación del OA.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda1-->
	<div id="de_ayuda1" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">CÓMO SE DISEÑA Y PLANIFICA EL RECORRIDO ENTRE LOS DIVERSOS NODOS DE INFORMACIÓN</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Desde la metodología CROA, se propone adoptar la siguiente clasificación (Royo, 2004):</p>
					<p><strong>- Estructura secuencial:</strong> a manera de libro, se van recorriendo una a una las pantallas. Cada nodo de 
						información tiene un único sucesor y un único antecesor, excepto el primero y el último.</p>
					<p><strong>- Estructura jerárquica:</strong> se conforma una especie de árbol de decisiones. En cada nodo de información 
						se abre una serie de opciones por las que se puede continuar el recorrido.</p>
					<p><strong>- Estructura en red:</strong> se conforma una especie de red con interconexiones (grafo).</p>
					<p><strong>- Estructura mixta:</strong> permite una combinación de las opciones anteriores.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Extra large modal - ayuda2-->
	<div id="de_ayuda2" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">MAPA DE NAVEGACIÓN</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Un mapa de navegación es una representación esquemática del contenido de un material hipertextual (por ejemplo:
						un sitio <em>web</em>) y la interrelación de ese contenido. Facilita la tarea del usuario para conocer la organización 
						del hipertexto, pero también constituye una herramienta de diseño, ya que, clarifica y expone la planificación de la 
						estructura de la información que se propone el diseñador. Esto ayuda a visualizar posibles errores o la 
						propuesta de mejoras en la organización de la información y su navegación.</p>
					<p>En la metodología CROA, se recomienda representar cada nodo de información con un rectángulo. Se debe poner al 
						rectángulo el nombre del nodo de información o bien un número que será referenciado posteriormente para indicar 
						el nombre del nodo de información. La relación entre los nodos de información se graficará mediante una flecha que 
						denote la posibilidad de recorrido o acceso desde un nodo a otro (origen-destino). Pueden darse relaciones que 
						muestren una ida y vuelta entre origen y destino. Cuando se dieran recorridos desde cualquier nodo a cualquier otro, 
						y resultase engorroso mostrar todas las líneas de enlace entre los nodos, se puede encerrar al grupo de nodos 
						correspondientes en un rectángulo más amplio que indique que todos esos nodos permiten una navegación en red.</p>
				</div>
			</div>
		</div>
	</div>