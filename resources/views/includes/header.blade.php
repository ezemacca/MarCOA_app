
<div class="container-fluid barra-superior">
	
	<nav class="navbar navbar-expand-lg">
		<a class="link-marcoa" href="{{url('/')}}">MarCOA</a>
		<!--<b>Mar</b>co para la <b>C</b>reación de <b>O</b>bjetos de <b>A</b>prendizaje-->
		<ul class="navbar-nav ml-auto">
		  <li class="nav-item">
			<a class="nav-link link-barra-superior" data-toggle="modal" href="#que_es">QUÉ ES</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link link-barra-superior" data-toggle="modal" href="#como_se_usa">CÓMO SE USA</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link link-barra-superior" data-toggle="modal" href="#quienes_somos">QUIÉNES SOMOS</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link link-barra-superior" data-toggle="modal" href="#contacto"> CONTACTO</a>
		  </li>
		  @if (Auth::check())
			  <li class="nav-item">
					<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">|Salir</a>

						<form class="nav-link link-barra-superior" data-toggle="modal" id="logout-form" action="{{ route('logout') }}" method="POST" >
    					@csrf
						</form>
			  </li>
		  @endif
		</ul>
	</nav>

	<!-- Extra large modal - qué es MarCOA -->
	<div id="que_es" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">¿QUÉ ES MarCOA?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Es un <strong>Mar</strong>co para la <strong>C</strong>reación de <strong>O</strong>bjetos de <strong>A</strong>prendizaje (OAs), basado en la <strong>Metodología CROA</strong>.
						Guía todos los pasos establecidos, por la Metodología CROA, para el proceso de creación de un OA. CROA es una metodología híbrida de diseño de OAs que ha sido propuesta, 
						y utilizada reiteradas veces, en el marco de la Facultad de Informática de la Universidad Nacional de La Plata.</p>
					<p>MarCOA considera cada una de las etapas, y aspectos tanto pedagógicos como tecnológicos, de creación de OAs que establece CROA. Propone realizar un cierto recorrido 
						por las etapas que conforman el proceso completo de creación de OAs determinado por CROA:</p>
					<p><strong>1. ANÁLISIS:</strong> planteo de la necesidad educativa que da origen al OA.</p>
					<p><strong>2. DISEÑO (instruccional, de estructura, multimedial):</strong>  abordaje del diseño instruccional del OA, planificación del recorrido entre los diversos nodos, determinación de 
						los tipos de escenarios que se utilizarán y mapeo entre nodos y plantillas multimedia.</p>
					<p><strong>3. ANÁLISIS DE COHERENCIA INTERNA:</strong>  verificación y reflexión acerca de las etapas de análisis y diseño alcanzadas.</p>
					<p><strong>4. DESARROLLO (implementación y carga de metadatos):</strong>  armado e integración de los componentes del OA y carga los metadatos del estándar IEEE-LOM que lo identifican y 
						describen facilitando su reutilización.</p>
					<p><strong>5. PUBLICACIÓN:</strong>  sugerencias e instrucciones para publicar el OA en entornos tecnológicos (Repositorios de Objetos de Aprendizaje y Entornos Vistuales de Enseñanza y Aprendizaje) que respeten el estándar de empaquetamiento SCORM.</p>						
					<p><strong>6. EVALUACIÓN:</strong>  sugerencias e instrucciones para evaluar la calidad del OA en contextos de uso específicos.</p>
					<p>MarCOA posibilita la creación del OA y la generación de la documentación sobre análisis y diseño asociada. Al finalizar el proceso de creación, ofrece la posibilidad 
						de configurar cuestiones de exportación. Por último, permite exportar el paquete SCORM correspondiente al OA, que incluye los metadatos del estándar IEEE-LOM, 
						y los documentos correspondientes a las etapas de análisis y diseño del OA.</p>
					<!--<div class="pie-modal text-center">
						<p>MarCOA pretende ser una herramienta amiglable, de manejo simple e intuitivo, al alcance de cualquier docente interesado en utilizarla para crear sus propios OAs a partir de una metodología de diseño específica.</p>
					</div>-->
				</div>
			</div>
		</div>
	</div>

	<!-- Extra large modal - cómo se usa MarCOA -->
	<div id="como_se_usa" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">¿CÓMO SE USA MarCOA?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>MarCOA pretende ser una herramienta amiglable, de manejo simple e intuitivo, al alcance de cualquier docente interesado en utilizarla para crear sus propios OAs a partir de una metodología de diseño específica, 
						más allá de su nivel de conocimientos sobre manejo de herramientas de <em>software</em> y sobre metodologías de diseño. MarCOA proporciona guías y ayuda para cada uno de los pasos/tareas que se deben realizar tras el propósito de crear el OA.</p>
					<div>	
						<p><strong>CÓMO COMENZAR, AVANZAR Y CULMINAR EL PROCESO DE CREACIÓN DE UN OA</strong></p>
						<p><strong>- 1RO:</strong> Para dar comienzo al proceso, presionar el botón COMENZAR de la pantalla inicial. Luego, optar por presionar CREAR PROYECTO u EDITAR PROYECTO según si se pretende empezar un proyecto nuevo o retomar un proyecto existente.</p>
						<p><strong>- 2DO:</strong> Abordar cada una de las etapas de creación del OA: ANÁLISIS, DISEÑO, ANÁLISIS DE COHERENCIA INTERNA, DESARROLLO, PRUBLICACIÓN Y EVALUACIÓN. 
							Presionar sobre cada una para acceder. Primeramente, sólo la etapa de análisis estará habilitada. Conforme al avance, se irán habilitando las etapas restantes.</p>
						<p><strong>- 3RO:</strong> Por último, presionar el botón EXPORTAR para configurar cuestiones de exportación y, finalmente, exportar el paquete SCORM del OA con su correspondiente archivo de metadatos IEEE-LOM y la documentación de análisis y diseño seleccionada.
					</div>
					<div>
						<p><strong>TIPOS DE AYUDA</strong></p>
							<div class="row">
								<div class="col-11">
									<p><strong>- Ayuda sobre procedimiento:</strong> se asiste en cuestiones propias del manejo de MarCOA, esto es, instrucciones sobre cómo proceder para realizar cierta tarea y/o aclaraciones de dudas procedimentales.
										Para obtener ayudas de este tipo, presionar el ícono que aparecerá oportunamente a lo largo del proceso.</p>
								</div>
								<div class="col">
									<img src="{{ asset('images/ayuda_proc.PNG') }}">
								</div>
							</div>							
							<div class="row">
								<div class="col-11">
									<p><strong>- Ayuda sobre la metodología de base:</strong> se facilita la información de CROA relacionada a cada cuestión de análisis, diseño, desarrollo, publicación y evaluación de los OAs.
										Para obtener ayudas de este tipo, presionar el ícono que aparecerá oportunamente a lo largo del proceso.</p>
								</div>
								<div class="col">
									<img src="{{ asset('images/ayuda_metod.PNG') }}">
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Extra large modal - quiénes somos -->
	<div id="quienes_somos" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">¿QUIÉNES SOMOS?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Sobre nosotros...</p>
				</div>
			</div>
		</div>
	</div>

	<!--Extra large modal - contacto -->
	<div id="contacto" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">CONTACTO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Información de contacto...</p>
				</div>
			</div>
		</div>
	</div>

</div>