<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
{{-- <script src="/js/agregar_y_quitar_campos.js"></script> --}}


<div class="text-right" style="padding-bottom: 10px;">
	<a class="nav-link" data-toggle="modal" href="#d_multimedial">
		<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
		</svg>				
	</a>					
</div>


					
					
					
			


							<label for="diseño_mult_p2">Mapeos Actuales:</label>
							
							<table class="table table-bordered table-hover table-sortable text-center" >
								<thead>
									<tr>
										<!--<th scope="col">#</th>-->
										<th scope="col">NOMBRE DEL NODO</th>
										<th scope="col">DESCRIPCIÓN</th>
										<th scope="col">PLANTILLA A UTILIZAR</th>
									</tr>
								</thead>
									<tbody>						       
											<div>
									
												@php 
													$mapeos=$multimedial->mapeos;
													// $cant_mapeos=(count($mapeos->all()));
													$n=0;

												@endphp

												
												@foreach($mapeos as $mapeo)
													
													

												<tr>

													<td >
														<textarea  type="text"  name="{{"p2_c1f".$n}}" class="form-control" id="{{"p2_c1f".$n}}" data-items="8"
														placeholder="Complete con el nombre del nodo"  >{{$mapeo->nodo}}
													</textarea>
													</td>

													<td >												 	
														<textarea  type="text" name="{{"p2_c2f".$n}}" class="form-control" id="{{"p2_c2f".$n}}" data-items="8"
														placeholder="Complete con la descripción" >{{$mapeo->descripcion}}
														</textarea>
													</td>

													<td >
														<textarea type="text" name="{{"p2_c3f".$n}}" class="form-control" id="{{"p2_c3f".$n}} "data-items="8"
														placeholder="Complete con la plantilla a utilizar">{{$mapeo->plantilla}}
														</textarea>											
													</td>

													@php
													++$n;
													@endphp

												

													<td>
													<form action="{{route('mapeo.destroy',$mapeo)}}" method="POST">
															@csrf
															@method('DELETE')

        												
     			 										
														<button linkname="borrar" class="btn btn-primary" role="button" > 
														<span >Eliminar</span>
														</button>
													</form>
													</td>

												</tr>

													
													
												@endforeach
											</div>
							</tbody>
							</table>


<form method="POST" action="{{ route('multimedial.update',$proyecto,$multimedial) }}">
	{{ csrf_field() }}
	@method('PATCH')

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
		<textarea type="text" class="form-control" name="diseño_mult_p1" id="diseño_mult_p1" required>{{ $multimedial->diseño_mult_p1 }}</textarea> 
	</div>

						{{-- <div class="col text-right">
							<a class="nav-link" data-toggle="modal" href="#dm_ayuda2">
								<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
								</svg>					
							</a>
						</div> --}}
					
					
					
			<div class="row clearfix">
						<div class="col-md-12 table-responsive">
							<label for="diseño_mult_p2">2. Mapeo entre nodos y plantillas multimedia:</label>
							<table class="table table-bordered table-hover table-sortable text-center" id="tab_logic">
								<thead>
									<tr>
										<!--<th scope="col">#</th>-->
										<th scope="col">NOMBRE DEL NODO</th>
										<th scope="col">DESCRIPCIÓN</th>
										<th scope="col">PLANTILLA A UTILIZAR</th>
									</tr>
								</thead>
								<tbody>						       

									<div class="controls" id="profs"> 

										<form class="input-append">

											
												<!--<th scope="row">1</th>-->
												{{-- <input type="text" class="control-group" name="diseño_mult_p2" id="fields" value="{{ old('diseño_mult_p2') }}" required> --}}
												<tr id='addr0' data-id="0" class="hidden">

													<td data-name="diseño_mult_p2_c1f">
														<input autocomplete="off" class="form-control" type="text"  name="diseño_mult_p2_c1f0" id="diseño_mult_p2_c1f1" data-items="8"
														placeholder="Complete con el nombre del nodo" value="{{ old('diseño_mult_p2_f1c1') }}" required>
													</td>

													<td data-name="diseño_mult_p2_c2f">												 	
														<input autocomplete="off" class="form-control" type="text" name="diseño_mult_p2_c2f0" id="diseño_mult_p2_c2f1" data-items="8"
														placeholder="Complete con la descripción"value="{{ old('diseño_mult_p2_f1c2') }}" required>
													</td>

													<td data-name="diseño_mult_p2_c3f">
														<input autocomplete="off" class="form-control" type="text" name="diseño_mult_p2_c3f0" id="diseño_mult_p2_c3f1" data-items="8"
														placeholder="Complete con la plantilla a utilizar"value="{{ old('diseño_mult_p2_f1c3') }}" required>												
													</td>



													<td data-name="del">
														<button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true">×</span></button>

													</td>

												</tr>
											</form>

										</div>
									</tbody>
								</table>			

								<h3>
									<a id="add_row" class="btn btn-secondary float-right">
									Agregar Mapeo
								</a>
								</h3>
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
							<button type="submit" class="btn btn-secondary e-diseño" {{-- href="{{route('principal')}}" --}} role="button">
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
		
									</tbody>
								</table>			

		</form>

			</div>
						<!--<button type="submit" class="btn btn-secondary e-diseño">
							<svg class="bi bi-brush" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
								<path d="M15.213 1.018a.572.572 0 0 1 .756.05.57.57 0 0 1 .057.746C15.085 3.082 12.044 7.107 9.6 9.55c-.71.71-1.42 1.243-1.952 1.596-.508.339-1.167.234-1.599-.197-.416-.416-.53-1.047-.212-1.543.346-.542.887-1.273 1.642-1.977 2.521-2.35 6.476-5.44 7.734-6.411z"/>
								<path d="M7 12a2 2 0 0 1-2 2c-1 0-2 0-3.5-.5s.5-1 1-1.5 1.395-2 2.5-2a2 2 0 0 1 2 2z"/>
							</svg>
							GUARDAR
						</button>-->
					

		<script>
					$(document).ready(function() {
					    $("#add_row").on("click", function() {
					        // Dynamic Rows Code
					        
					        // Get max row id and set new id
					        var newid = 0;
					        $.each($("#tab_logic tr"), function() {
					            if (parseInt($(this).data("id")) > newid) {
					                newid = parseInt($(this).data("id"));
					            }
					        });
					        newid++;
					        
					        var tr = $("<tr></tr>", {
					            id: "addr"+newid,
					            "data-id": newid
					        });
					        
					        // loop through each td and create new elements with name of newid
					        $.each($("#tab_logic tbody tr:nth(0) td"), function() {
					            var td;
					            var cur_td = $(this);
					            
					            var children = cur_td.children();
					            
					            // add new td and element if it has a nane
					            if ($(this).data("name") !== undefined) {
					                td = $("<td></td>", {
					                    "data-name": $(cur_td).data("name")
					                });
					                
					                var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
					                c.attr("name", $(cur_td).data("name") + newid);
					                c.appendTo($(td));
					                td.appendTo($(tr));
					            } else {
					                td = $("<td></td>", {
					                    'text': $('#tab_logic tr').length
					                }).appendTo($(tr));
					            }
					        });

					        $(tr).appendTo($('#tab_logic'));
					        
					        $(tr).find("td button.row-remove").on("click", function() {
					             $(this).closest("tr").remove();
					        });
					});
					    // Sortable Code
					    var fixHelperModified = function(e, tr) {
					        var $originals = tr.children();
					        var $helper = tr.clone();
					    
					        $helper.children().each(function(index) {
					            $(this).width($originals.eq(index).width())
					        });
					        
					        return $helper;
					    };
					  
					    $(".table-sortable tbody").sortable({
					        helper: fixHelperModified      
					    }).disableSelection();

					    $(".table-sortable thead").disableSelection();



					    $("#add_row").trigger("click");
					});
		</script>

		


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