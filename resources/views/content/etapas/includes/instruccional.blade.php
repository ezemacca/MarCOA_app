			<div class="text-right" style="padding-bottom: 10px;">
				<a class="nav-link" data-toggle="modal" href="#d_instruccional">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
			 	</a>					
			</div>
		

			<form method="POST" action="{{ route('instruccional.store',$proyecto) }}">
				{{ csrf_field() }}
				
				<div class="form-group">
					<div class="row">
						<div class="col-11">
							<label for="diseño_inst_p1">1. ¿Qué objetivo de aprendizaje específico se propone para el OA?</label>
						</div>
						<div class="col text-right">
							<a class="nav-link" data-toggle="modal" href="#di_ayuda1">
								<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
								</svg>				
							</a>
						</div>
					</div>				
					<textarea type="text" class="form-control" name="instruccional_p1" id="instruccional_p1"   ></textarea>
					<script>
						ClassicEditor
							.create( document.querySelector( '#instruccional_p1' ), {
								language: "es"
							} )
							.then( editor => {
								console.log( editor );
							} )
							.catch( error => {
								console.error( error );
							} );
					</script>
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-10">
							<label for="diseño_inst_p2">2. ¿Qué información proveerá el OA acerca del tema a tratar? ¿Cómo se organizará y presentará la información?</label>
						</div>
						<div class="col text-right">
							<a class="nav-link" data-toggle="modal" href="#di_ayuda2a">
								<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
								</svg>									
							</a>
						</div>
						<div class="col text-right">
							<a class="nav-link" data-toggle="modal" href="#di_ayuda2b">
								<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
								</svg>									
							</a>
						</div>
						<div class="col text-right">
							<a class="nav-link" data-toggle="modal" href="#di_ayuda2c">
								<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
								</svg>									
							</a>
						</div>
					</div>	
					<textarea type="text" class="form-control" name="instruccional_p2" id="instruccional_p2"   ></textarea>
					<script>
						ClassicEditor
							.create( document.querySelector( '#instruccional_p2' ), {
								language: "es"
							} )
							.then( editor => {
								console.log( editor );
							} )
							.catch( error => {
								console.error( error );
							} );
					</script>
				</div>	
				
				<div class="form-group">
					<div class="row">
						<div class="col-11">
							<label for="diseño_inst_p3">3. ¿Qué actividades se le propondrán al alumno?</label>
						</div>
						<div class="col text-right">
							<a class="nav-link" data-toggle="modal" href="#di_ayuda3">
								<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
								</svg>									
							</a>
						</div>
					</div>
					<textarea type="text" class="form-control" name="instruccional_p3" id="instruccional_p3"   ></textarea>
					<script>
						ClassicEditor
							.create( document.querySelector( '#instruccional_p3' ), {
								language: "es"
							} )
							.then( editor => {
								console.log( editor );
							} )
							.catch( error => {
								console.error( error );
							} );
					</script>
				</div>	
				
				<div class="form-group">
					<div class="row">
						<div class="col-11">
							<label for="diseño_inst_p4">4. ¿En qué consistirá la autoevaluación? ¿De qué manera se dará <em>feedback</em> al alumno sobre su desempeño?</label>
						</div>
						<div class="col text-right">
							<a class="nav-link" data-toggle="modal" href="#di_ayuda4a">
								<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
								</svg>									
							</a>
						</div>
						<div class="col text-right">
							<a class="nav-link" data-toggle="modal" href="#di_ayuda4b">
								<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
								</svg>									
							</a>
						</div>
					</div>	
					<textarea type="text" class="form-control" name="instruccional_p4" id="instruccional_p4"   ></textarea>
					<script>
						ClassicEditor
							.create( document.querySelector( '#instruccional_p4' ), {
								language: "es"
							} )
							.then( editor => {
								console.log( editor );
							} )
							.catch( error => {
								console.error( error );
							} );
					</script>
				</div>				
				
				<div class="row">
					<div class="col text-left">
						
						<div class="conteiner-fluid text-left">
							<button type="submit" name="guardar" value="guardar" class="btn btn-secondary e-diseño">
								<svg class="bi bi-brush" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
									<path d="M15.213 1.018a.572.572 0 0 1 .756.05.57.57 0 0 1 .057.746C15.085 3.082 12.044 7.107 9.6 9.55c-.71.71-1.42 1.243-1.952 1.596-.508.339-1.167.234-1.599-.197-.416-.416-.53-1.047-.212-1.543.346-.542.887-1.273 1.642-1.977 2.521-2.35 6.476-5.44 7.734-6.411z"/>
									<path d="M7 12a2 2 0 0 1-2 2c-1 0-2 0-3.5-.5s.5-1 1-1.5 1.395-2 2.5-2a2 2 0 0 1 2 2z"/>
								</svg>
								GUARDAR
							</button>
						</div>	
					</div>
					<div class="col text-right">
						<button type="submit" name="guardar" value="guardar-pdf"  class="btn btn-secondary boton-generar" >
							<svg class="bi bi-box-arrow-down" width="30" height="30" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M6.646 13.646a.5.5 0 01.708 0L10 16.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z" clip-rule="evenodd"></path>
								<path fill-rule="evenodd" d="M10 6.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V7a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
								<path fill-rule="evenodd" d="M4.5 4A1.5 1.5 0 016 2.5h8A1.5 1.5 0 0115.5 4v7a1.5 1.5 0 01-1.5 1.5h-1.5a.5.5 0 010-1H14a.5.5 0 00.5-.5V4a.5.5 0 00-.5-.5H6a.5.5 0 00-.5.5v7a.5.5 0 00.5.5h1.5a.5.5 0 010 1H6A1.5 1.5 0 014.5 11V4z" clip-rule="evenodd"></path>
							</svg>	
						</button>
					</div>
				</div>				
			</form>
	

	<!-- Extra large modal - diseño instruccional-->
	<div id="d_instruccional" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">SUB-ETAPA DE DISEÑO INSTRUCCIONAL</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>El diseño instruccional permite anticipar la configuración que se le dará a la experiencia de aprendizaje que propone el OA. Aquí, se ofrecen 
						algunas recomendaciones para facilitar la identificación de necesidades de formación y el diseño de la estrategia para dar respuesta 
						a esa necesidad.</p>
					<p>El diseño instruccional, de forma muy sintética, se vincula con las siguientes preguntas: ¿qué se va a enseñar?, ¿cómo y cuándo va a 
						enseñarse?, ¿qué y cómo va a evaluarse lo aprendido?. Las respuestas a estas preguntas se vinculan con los cuatro componentes esenciales 
						del diseño: objetivos, contenidos, actividades y evaluación. Una de las claves de un buen diseño es la coherencia entre estos cuatro 
						componentes, de allí que es fundamental tener especial cuidado en cómo se elaboran e interrelacionan durante el proceso de diseño.</p>
					<p>Se propone guiar el diseño del OA a través de una serie de preguntas.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda1-->
	<div id="di_ayuda1" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">QUÉ OBJETIVO DE APRENDIZAJE ESPECÍFICO SE PROPONE PARA EL OA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>Los objetivos, comúnmente, refieren a los resultados esperados del proceso de aprendizaje. Durante el diseño, es necesario 
						definirlos con claridad para facilitar la construcción de forma coherente con los demás componentes. Por otra parte, cuando el OA está 
						en uso, explicitar qué es lo que se espera que el alumno logre, al interactuar con el OA, permite orientar su proceso de aprendizaje.</p>
					<p>Dado el grado de granularidad con el que se propone diseñar los OAs desde la metodología CROA, se sugiere que refiera a un único objetivo 
						de aprendizaje y que sea de carácter acotado en relación al tema a trabajarse. Este grado de atomicidad es lo que posibilita generar OAs 
						sobre aspectos muy específicos de este tema, susceptibles de ser reutilizados en distintas situaciones educativas y, eventualmente, 
						combinados con otros OAs para promover aprendizajes más globales.</p>
					<p><strong>DEFINICIÓN DEL OBJETIVO</strong></p>
					<p>- Debería surgir del análisis de la necesidad de formación detectada en la etapa anterior.</p>
					<p>- Debería formularse en términos de aprendizaje, es decir, aquello que se espera que el alumno pueda hacer como resultado de haber 
					interactuado con el OA.</p>
					<p>- Debería ser alcanzable según los contenidos y actividades que se presentan en el OA.</p>
					<p>- Debería expresar qué operaciones cognitivas se espera que los alumnos, que interactúen con el OA, realicen en relación al tema. 
						Por ejemplo: no es lo mismo “comprender ecuaciones lineales” que “aplicar ecuaciones lineales” o que “usar ecuaciones lineales para resolver problemas complejos”.</p>
					<p>En este punto, se encuentran diferentes propuestas para definir el nivel de complejidad que expresa un objetivo de aprendizaje. Una de
						las más reconocidas es la taxonomía de Bloom (1971) que propone seis niveles de complejidad progresiva: recuerdo, comprensión, aplicación,
						análisis, síntesis y evaluación. Si bien este modelo es uno de los primeros en plantear la necesidad de formular objetivos de forma clara 
						y concisa y propone una complejidad progresiva, fue formulado bajo las premisas de una visión conductista del aprendizaje imperante en la 
						época. Revisiones posteriores de esta taxonomía reformulan su propuesta, ya no en términos de conductas sino de habilidades y procesos 
						cognitivos y metacognitivos que deberán reinterpretarse en el marco de los saberes específicos de la disciplina que se pretende enseñar 
						(Coll, 1994). La escala de los seis niveles, sin embargo, suele mantenerse de forma bastante fiel a la de la taxonomía original. Algunas 
						de las taxonomías pensadas desde un marco cognitivista son la taxonomía de Anderson y Krathwohl (2001) y la taxonomía de Marzano y Kendall (2007).</p>
					<p><strong>FORMULACIÓN DEL OBJETIVO</strong></p>
					<p>La formulación del objetivo puede adoptar diversas formas, sin embargo, desde la metodología, se propone incluir un verbo que designe 
						la operación cognitiva que se espera que el alumno realice y el contenido específico que se trabajará en el OA. Se insiste en que 
						debe formularse de forma muy acotada, dado el grado de granularidad propuesto.</p>
					<p>Continuando con el ejemplo ya planteado: el objetivo de aprendizaje sería "Formular objetivos de aprendizaje específicos para OAs".</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda2a-->
	<div id="di_ayuda2a" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">QUÉ INFORMACIÓN PROVEERÁ EL OA ACERCA DEL TEMA A TRATAR</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>El contenido que se aborda en un material educativo es siempre un recorte de un área de conocimientos y adquiere una forma particular, 
						de acuerdo a la situación de enseñanza y aprendizaje en la que se inserta.</p>
					<p>La definición de los contenidos involucra: seleccionar qué aspectos serán trabajados en el OA, definir qué organización se le dará 
						a los aspectos seleccionados y planificar cómo se presentará la información a fin de promover buenos aprendizajes.</p>
					<p><strong>SELECCIÓN DE CONTENIDOS</strong></p> 
					<p>Un OA aborda un contenido acotado por lo que se hace necesario seleccionar cuidadosamente qué se va a incluir y qué no. Para realizar 
						esta selección se propone tener en cuenta: la correspondencia con el objetivo de aprendizaje propuesto, la identificación del tipo de 
						contenido sobre el que se concentrará el OA (datos, conceptos, teorías; técnicas, procedimientos, estrategias; actitudes, disposiciones,
						criterios de acción; etcétera), la durabilidad de los conocimientos, la transferibilidad (posibilidad de usar el contenido en otros 
						contextos o situaciones diferentes a aquellas en las que se aprendió), la forma en que se inserta el OA dentro de una estrategia de 
						enseñanza más amplia, la vinculación con otros conocimientos (los conocimientos previos necesarios para trabajar los contenidos del OA y 
						los conocimientos con los que se pretende que se vincule luego de trabajar con el OA que se está diseñando), el tiempo se propone que 
						insuma el OA, etcétera.</p>
					<p>Estos son algunos de los criterios más relevantes, pueden sumarse otros de acuerdo a la particularidad de la situación educativa en la 
						que se pretende insertar el OA. Por otra parte, no todos los criterios tendrán el mismo peso a la hora de tomar decisiones respecto 
						a la selección; la correspondencia con el objetivo de aprendizaje definido previamente tendrá preeminencia por encima de los demás 
						descriptos.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda2b-->
	<div id="di_ayuda2b" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">CÓMO SE ORGANIZARÁ LA INFORMACIÓN EN EL OA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p><strong>ORGANIZACIÓN/SECUENCIACIÓN DE CONTENIDOS</strong></p>
					<p>La forma en que los contenidos se organicen o secuencien puede responder a diferentes parámetros dependiendo del tipo de contenido, de 
						la perspectiva del aprendizaje que se sostenga, del propósito con el que fue creado el OA, etcétera. Se presentan aquí algunas opciones que 
						son descriptas muy sucintamente, aunque es necesario aclarar que existen otras alternativas e incluso combinaciones de las aquí presentadas.</p>
					<p><strong>- Análisis de tareas:</strong> un tipo de secuenciación de contenidos de uso frecuente es el que surge del <em>análisis de tareas</em>. Desde esta perspectiva, se 
						propone la identificación de las actividades, pasos u operaciones que permiten llegar a la resolución de una tarea específica. En base 
						a los pasos identificados o subtareas y a su nivel de complejidad (los más simples o pre-requisitos deben aprenderse antes de avanzar 
						sobre los más complejos), se determina el orden en que deben presentarse los distintos aspectos del contenido a tratar. Es este 
						ordenamiento jerárquico de subtareas el que establece una jerarquía de aprendizajes y, por ende, su ordenamiento o secuenciación. 
						El análisis de tareas es particularmente pertinente en el caso de contenidos de tipo procedimental.</p>
					<p><strong>- Teoría del aprendizaje significativo:</strong> otro tipo de organización es la que se propone desde la teoría del<em> Aprendizaje Significativo</em> y que es particularmente 
						pertinente en el caso de conocimientos conceptuales. En este caso, se propone: identificar los conceptos claves de la temática a tratar en el OA;
						ordenar los conceptos de acuerdo a su importancia y especificidad, creando una estructura jerárquica que evidencie las relaciones 
						entre los diferentes conceptos. De esta forma, la organización de los conceptos a presentar parte de los conceptos fundamentales más generales e inclusivos hacia los 
						más particulares y específicos, presentando una estructura jerárquica y relacional.</p>
					<p><strong>- Teoría de la elaboración:</strong> otra propuesta para secuenciar los contenidos es la que se propone desde la <em>teoría de 
						la elaboración</em>. Según Merril y Reigluth, el aprendizaje se facilita a través de un ordenamiento que procede por elaboraciones 
						sucesivas que operan a la manera de un <em>zoom</em>: se parte “haciendo foco” en los aspectos más generales y abarcadores del 
						contenido, luego se centra la atención en alguno de los aspectos más específicos, para otra vez volver al panorama más general. A 
						través de estas “idas y vueltas” sucesivas, entre los conocimientos más generales y los más específicos, se busca: facilitar la 
						identificación de las relaciones entre unos y otros, brindar contexto y enriquecer la comprensión de los conocimientos más generales.</p>
					<p><strong>- Problema o práctica auténtica como eje:</strong> otra forma posible de establecer el orden de los contenidos es introducir un problema o 
						práctica auténtica como eje desde el cual se estructurarán los demás contenidos. De esta forma, los conocimientos que se van presentando 
						se resignifican a partir de un contexto o problema ligado a una situación real y de su uso para resolverlo. Este tipo de estructuración 
						es más pertinente en el caso de problemas más bien abiertos, reales, en los que no existe una solución única y donde se promueve la 
						toma de decisiones en base al conocimiento experto y la reflexión sobre una acción contextualizada.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda2c-->
	<div id="di_ayuda2c" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">CÓMO SE PRESENTARÁ LA INFORMACIÓN EN EL OA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p><strong>PRESENTACIÓN DE CONTENIDOS</strong></p>
					<p>La efectividad de los aprendizajes que se buscan promover a través de un OA, como en el caso de cualquier material educativo, depende
						no sólo de cómo los contenidos se organicen y secuencien sino también de cómo la información es presentada al alumno. Algunas pautas 
						que pueden ayudar en este sentido son:</p>
					<p><strong>- Contextualización:</strong> una buena manera de facilitar que los alumnos comprendan el sentido de lo que están aprendiendo 
						es señalar, sucintamente: para qué pueden serles de utilidad los conocimientos que se abordarán en el OA, en qué campos disciplinares se 
						emplean, qué tipo de problemas o tareas permiten resolver, cómo se vinculan con interrogantes de una disciplina, etcétera. De allí que 
						se sugiera considerar la explicitación de estas cuestiones en alguna sección introductoria al OA.</p>
					<p><strong>- Simplicidad y economía:</strong> presentar la información de la manera más directa posible, evitando referencias innecesarias.</p>
					<p><strong>- Uso de ejemplos:</strong> explicitando las relaciones entre el ejemplo presentado y los conceptos o procedimientos que se están 
						tratando. Puede utilizarse desde una lógica inductiva (partir de los ejemplos para llegar a los conceptos y procedimientos) o desde una 
						lógica deductiva (partir de conceptos y procedimientos que se ilustran a través de los ejemplos).</p>
					<p><strong>- Ruptura del sentido común:</strong> incluir algún interrogante, presentar ejemplos/contraejemplos o situaciones dilemáticas que 
					contribuyan a quebrar ciertas concepciones erróneas que los alumnos podrían traer en relación a ciertos temas.</p>
					<p><strong>- Recapitulación:</strong> incluir alguna síntesis o referencia al punto de partida al finalizar una sección o toda la presentación.</p>
					<p><strong>- Uso de señalizaciones discursivas, gráficos y multimedia para presentar la información:</strong> en función de facilitar la 
						atención y retención de los aspectos más importantes del contenido que se presenta, es recomendable el empleo de señalizaciones 
						discursivas tales como: la cursiva, la negrita, el subrayado; cambios en el tamaño de letra; uso de viñetas, recuadros, repeticiones 
						y espacios en blanco para destacar la información relevante. Es fundamental evaluar cuidadosamente la cantidad de información que se
						presentará por pantalla en función de evitar la saturación del aprendiz.</p>
					<p><strong>- Imágenes y recursos multimedia e interactivos:</strong> las imágenes (ilustraciones, esquemas, mapas conceptuales, etcétera) así 
						como los recursos multimedia e interactivos favorecen la retención de la información: los humanos recordamos con más facilidad imágenes 
						que ideas verbales o impresas. Este tipo de recursos, además, facilitan lo que sería difícil comunicar en forma puramente verbal. Suelen
						ser más efectivos para expresar: ideas concretas, conceptos de tipo visual o espacial, eventos que ocurren de manera simultánea e ilustrar 
						procedimientos o instrucciones, etcétera (Mayer, 2000). La inclusión de recursos interactivos suele generar mayor interés y actividad 
						cognitiva al poner al usuario en situación de elegir alternativas o dar respuesta.</p>
					<p>Por todo lo expresado, la diversidad en el empleo de recursos y la combinación de escenarios es altamente recomendable en la elaboración
						de OAs.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Extra large modal - ayuda3-->
	<div id="di_ayuda3" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">QUÉ ACTIVIDADES SE LE PROPONDRÁN AL ALUMNO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>La selección y diseño de las actividades que se incluyan en el OA están estrechamente ligados a los objetivos de aprendizaje y 
						contenidos planteados, es decir, qué se desea que el alumno aprenda y con qué grado de dominio o profundidad; los recursos 
						tecnológicos disponibles y las características de la población destinataria, entre los factores más relevantes.</p>
					<p>Las actividades del OA deben pensarse como autosuficientes, es decir, como actividades cuya resolución y corrección no dependen 
						de agentes externos al material diseñado. La razón que justifica esta recomendación es que la autosuficiencia del material es lo 
						que facilita su reutilización en otros contextos. Esto no quita que, al usarse, el OA pueda funcionar como parte de una estrategia 
						didáctica más amplia y combinarse con otro tipo de actividades no autosuficientes -como por ejemplo: foros, trabajos grupales o de 
						investigación- para promover aprendizajes más completos. Es el docente quien decide cuál es la mejor forma de emplear el OA dentro 
						de su contexto y con una población destinataria determinada.</p>
					<p><strong>CLASIFICACIÓN DE LAS ACTIVIDADES EN RELACIÓN AL PROPÓSITO DE SU INCLUSIÓN EN EL OA</strong></p>
					<p><strong>- Diagnóstico:</strong> en el caso de un OA, fundamentalmente para identificar los conocimientos previos que poseen los 
						alumnos respecto de la temática que se va a abordar. Pueden ser útiles para ayudarlos a que tomen consciencia acerca de lo que 
						saben y lo que no y activar lo que ya conocen antes de iniciar el proceso de aprendizaje.</p>
					<p><strong>- Motivación:</strong> “dar motivos para aprender” es una buena estrategia para promover aprendizajes significativos y 
						duraderos. Incluir alguna actividad que posibilite reflexionar sobre la importancia del tema, dispare interrogantes o señale los 
						posibles usos de aquello que se va a aprender en el contexto de la práctica profesional, son algunos ejemplos de esos motivos.</p>
					<p><strong>- Compresión, aplicación, transferencia:</strong> este tipo de actividades se proponen contribuir a procesar, organizar, 
						guardar y usar la información que se está aprendiendo.</p>
					<p><strong>- Intregración:</strong> este tipo de actividades busca promover la interrelación, integración y síntesis de distintos saberes 
						abordados.</p>
					<p><strong>- Autoevaluación:</strong> para ayudar al alumno a determinar cuánto ha aprendido sobre el tema trabajado.</p>
					<p><strong>CLASIFICACIÓN DE LAS ACTIVIDADES EN FUNCIÓN DE LA ACTIVIDAD INTELECTUAL INVOLUCRADA</strong></p>
					<p><strong>- Reconocimiento:</strong> este es el nivel más bajo de demanda cognitiva, se trata de <em>reconocer</em> información que 
						fue presentada previamente.</p>
					<p><strong>- Recuerdo:</strong> el alumno <em>recuerda</em> de memoria la información que se presentó; a diferencia del anterior no sólo 
						reconoce sino que tiene que producir la respuesta.</p>
					<p><strong>- Comprensión:</strong> el alumno debe <em>reconstruir</em> la información, teniendo en cuenta su estructura semántica y su 
						significado. (1) Comprensión de afirmaciones: se presenta un texto que si bien no coincide con las palabras en las que fue presentado 
						originalmente, expresa las mismas ideas. (2) Comprensión de conceptos: se hacen juicios acerca de ideas; se discrimina entre diferentes 
						ejemplos de un concepto o se resuelven problemas que comprometen ponerlos en juego de distintas maneras. (3) Comprensión de principios: 
						implica el reconocimiento de nuevos ejemplos de dicho principio, sustitución de casos generales por ejemplos específicos, etcétera.</p> 
					<p><strong>- Reconstrucción global:</strong> el alumno debe <em>usar</em> la información que se le presentó en la resolución de un 
						problema o situación.</p> 
					<p><strong>- Interpretación constructiva:</strong> el alumno debe ser capaz de <em>plantearse nuevos problemas</em> a partir de la 
						información que tiene sobre una determinada área de conocimiento.</p>
					<p>Las distintas actividades que proveen diversas herramientas de autor pueden emplearse con los distintos propósitos presentados en la 
						construcción del OA. En general, suele darse una secuencia en la que primero se presentan contenidos y luego alguna actividad de 
						práctica, sin embargo, esta no es la única opción posible: el empleo de actividades antes de presentar información para motivar, 
						contextualizar, activar conocimientos previos; el combinar la presentación de secuencias breves de contenidos con actividades para 
						procesar, organizar, guardar o transferir la información que se aprende; la inclusión de instancias de síntesis e integración, etcétera, 
						son algunas alternativas que también se pueden usar. Cabe aclarar que esto no significa que en un OA tengan que emplearse todos los 
						tipos de actividades o que a mayor número de actividades diseñadas, mayor es la calidad del OA. La decisión fundamentada sobre qué tipos
						de actividades se utilizan y con qué propósitos, así como su congruencia con los demás componentes del diseño, son las claves para 
						contribuir a un buen aprendizaje.</p>						
				</div>
			</div>
		</div>
	</div>
	
	<!-- Extra large modal - ayuda4a-->
	<div id="di_ayuda4a" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">EN QUÉ CONSISTIRÁ LA AUTOEVALUACIÓN</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>En el diseño de un OA, tanto como en las situaciones educativas en general, la evaluación no es agregado. Es una 
						instancia que tiene función didáctica y se construye en coherencia con los demás componentes del diseño: objetivos, 
						contenidos y actividades.</p>
					<p>Genera una instancia de reflexión sobre lo aprendido, permite explicitar y verificar lo que se aprendió y lo que no, 
						y reorientar el proceso hacia nuevos aprendizajes, a completar lo que no se sabe, a reforzar lo aprendido. De esta 
						forma, la evaluación no sólo funciona como un mecanismo de control sino que forma parte, también, del proceso de 
						aprendizaje.</p>
					<p>Algunas de las decisiones que se toman al incluir una instancia de evaluación son:</p>
					<p><strong>¿Qué se va a evaluar?</strong> El objetivo de aprendizaje es lo que permite dar respuesta a esta pregunta, 
						ya que, define las operaciones cognitivas que se deberán poner en juego en los <em>ítems</em> de evaluación y el tema 
						que se evaluará.</p>
					<p><strong>¿Cómo se va a evaluar?</strong> La creación de los <em>ítems</em> de evaluación puede realizarse con los 
						recursos que brindan las aplicaciones empleadas en la construcción del OA, asignándole un <em>feedback</em> y un 
						puntaje. Algunos puntos a tener en cuenta al elaborar la autoevaluación:</p>
					<p>- La dificultad de la evaluación deberá ser apropiada de acuerdo al objetivo propuesto y las instancias de práctica 
						o ejercitación presentadas al alumno; la evaluación no debiera ser más compleja que estas últimas. El tipo y la
						cantidad de tareas que el alumno resuelva en la evaluación deben ser pertinente al objetivo propuesto.</p>
					<p>- La redacción de las consignas, preguntas y opciones de respuesta debe realizarse cuidadosamente para no generar 
						confusión: evitar preguntas o consignas ambiguas, brindar toda la información que el alumno necesite en la 
						consigna, elaborar distractores verosímiles pero indiscutiblemente erróneos.</p>
					<p>- Las preguntas abiertas o semi-abiertas funcionan mejor como actividad que como evaluación, en el caso de materiales 
						autosuficientes. Pueden incluirse en la autoevaluación siempre y cuando se brinde un <em>feedback</em> que explicite 
						criterios de evaluación y ofrezca un modelo de respuesta o referente con el cual contrastar lo que se respondió.</p>
					<p>- Distintas aplicaciones coinciden, en general, en las opciones que ofrecen para configurar las preguntas: el número de 
						intentos, la cantidad de tiempo para responder, la bonificación de tiempo extra por respuestas correctas, mostrar 
						intentos y aciertos. La decisión por unas u otras dependerá: del resultado de aprendizaje esperado, del tipo de 
						pregunta, de las características de los destinatarios, del criterio del docente. Sí es importante explicitarlo 
						en la consigna o en alguna instancia previa a que el alumno inicie la autoevaluación.</p>
					<p>- En la medida de lo posible, testear el funcionamiento de las preguntas, poniéndolas a consideración de colegas o 
						haciendo una pequeña prueba piloto.</p>
					<p>- Algunas otras prácticas que posibilitan que la evaluación opere como instancia de aprendizaje son: brindar una 
						retroalimentación enriquecedora, reorientar al estudiante a revisar o repasar ciertos contenidos en caso de errar 
						en la respuesta, ofrecer más de un intento para hacer la autoevaluación.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Extra large modal - ayuda4b-->
	<div id="di_ayuda4b" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">DE QUÉ MANERA SE DARÁ <em>FEEDBACK</em> AL ALUMNO SOBRE SU DESEMPEÑO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>El <em>feedback</em> o retroalimentación es fundamental en instancias de autoevaluación en materiales autosuficientes. Se 
						recomienda su inclusión tanto en las respuestas acertadas (para validar lo respondido, ofrecer información adicional) 
						como en las erróneas (para brindar “pistas” que permitan orientar la respuesta en un nuevo intento, explicar las 
						razones por las que la respuesta es incorrecta, invitar a repasar ciertos temas).</p>
					<p>Otra decición a tomar es si se dará calificación: la calificación en un material autosuficiente es importante porque 
						ofrece una referencia acerca del desempeño del alumno en contraste con el desempeño esperado. Las aplicaciones 
						coinciden en las opciones que ofrecen para calificar: en general, la calificación es cuantitativa (números/porcentajes) 
						o se da una referencia indirecta (mostrando los aciertos en relación a los intentos), también se permite descontar puntos 
						en caso de respuestas erróneas. La decisión por una opción u otra dependerá de: las características de los destinatarios, 
						la finalidad con la que es usado el OA, las concepciones docentes acerca de la evaluación.<p>
				</div>
			</div>
		</div>
	</div>