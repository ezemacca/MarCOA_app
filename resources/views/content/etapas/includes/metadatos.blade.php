			<div class="text-right" style="padding-bottom: 10px;">
				<a class="nav-link" data-toggle="modal" href="#de_metadatos">
					<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
				</a>					
			</div>

			<div class="container-fluid">
				<ul class="nav nav-tabs">
					@if($subetapa_metadatos==1 )
						<li class="nav-item active">
							<a class="nav-link active pestaña pestaña-pequeña" data-toggle="tab" href="#general">1. GENERAL</a>
						</li>
					@elseif($subetapa_metadatos>=2 )
						<li class="nav-item ">
							<a class="nav-link pestaña pestaña-pequeña" data-toggle="tab" href="#general">1. GENERAL</a>
						</li>

					@endif

					@if($subetapa_metadatos==2 )
						<li class="nav-item active">
							<a class="nav-link active pestaña pestaña-pequeña" data-toggle="tab" href="#ciclo_de_vida">2. CICLO DE VIDA</a>
						</li>
					@elseif($subetapa_metadatos>=3 )
						<li class="nav-item">
							<a class="nav-link pestaña pestaña-pequeña" data-toggle="tab" href="#ciclo_de_vida">2. CICLO DE VIDA</a>
						</li>
					@endif

					@if($subetapa_metadatos==3)
						<li class="nav-item active">
							<a class="nav-link active pestaña pestaña-pequeña" data-toggle="tab" href="#meta_metadatos">3. META-METADATOS</a>
						</li>
					@elseif($subetapa_metadatos>=4)
						<li class="nav-item">
							<a class="nav-link pestaña pestaña-pequeña" data-toggle="tab" href="#meta_metadatos">3. META-METADATOS</a>
						</li>
					@endif


					@if($subetapa_metadatos==4)
						<li class="nav-item active">
							<a class="nav-link active pestaña pestaña-pequeña" data-toggle="tab" href="#tecnica">4. TÉCNICA</a>
						</li>
					@elseif($subetapa_metadatos>=5)
						<li class="nav-item">
							<a class="nav-link pestaña pestaña-pequeña" data-toggle="tab" href="#tecnica">4. TÉCNICA</a>
						</li>
					@endif

					@if($subetapa_metadatos==5)
						<li class="nav-item active">
							<a class="nav-link active pestaña pestaña-pequeña" data-toggle="tab" href="#educacional">5. EDUCACIONAL</a>
						</li>
					@elseif($subetapa_metadatos>=6)
						<li class="nav-item">
							<a class="nav-link pestaña pestaña-pequeña" data-toggle="tab" href="#educacional">5. EDUCACIONAL</a>
						</li>
					@endif

					@if($subetapa_metadatos==6)
						<li class="nav-item active">
							<a class="nav-link active pestaña pestaña-pequeña" data-toggle="tab" href="#derechos_de_uso">6. DERECHOS DE USO</a>
						</li>
					@elseif($subetapa_metadatos>=7)
						<li class="nav-item">
							<a class="nav-link pestaña pestaña-pequeña" data-toggle="tab" href="#derechos_de_uso">6. DERECHOS DE USO</a>
						</li>
					@endif

					@if($subetapa_metadatos==7)
						<li class="nav-item active">
							<a class="nav-link active pestaña pestaña-pequeña" data-toggle="tab" href="#relacion">7. RELACIÓN</a>
						</li>
					@elseif($subetapa_metadatos>=8)
						<li class="nav-item">
							<a class="nav-link pestaña pestaña-pequeña" data-toggle="tab" href="#relacion">7. RELACIÓN</a>
						</li>
					@endif

					@if($subetapa_metadatos==8)
						<li class="nav-item active">
							<a class="nav-link active pestaña pestaña-pequeña" data-toggle="tab" href="#anotaciones">8. ANOTACIONES</a>
						</li>
					@elseif($subetapa_metadatos>=9)
						<li class="nav-item ">
							<a class="nav-link pestaña pestaña-pequeña" data-toggle="tab" href="#anotaciones">8. ANOTACIONES</a>
						</li>
					@endif


					@if($subetapa_metadatos==9)
						<li class="nav-item active">
							<a class="nav-link active pestaña pestaña-pequeña" data-toggle="tab" href="#clasificacion">9. CLASIFICACIÓN</a>
						</li>
					
					@elseif($subetapa_metadatos>=10)
						<li class="nav-item">
							<a class="nav-link  pestaña pestaña-pequeña" data-toggle="tab" href="#clasificacion">9. CLASIFICACIÓN</a>
						</li>
					@endif

				</ul>	
			</div>
			<div class="tab-content">
				<!--CATEGORÍA 1-->
				@if($subetapa_metadatos>=2)
				{{-- vista de edicion --}}
					<div id="general" class="tab-pane">
						@include('content.etapas.metadatos.general_edit')
					</div>
				@elseif($subetapa_metadatos==1) 
					<div id="general" class="tab-pane in active">
						@include('content.etapas.metadatos.general')
					</div>
				@endif
				
				<!--CATEGORÍA 2-->
				@if($subetapa_metadatos>=3)
				{{-- vista de edicion --}}
				<div id="ciclo_de_vida" class="tab-pane">
					@include('content.etapas.metadatos.ciclo_edit')
				</div>
				@elseif($subetapa_metadatos==2)
					<div id="ciclo_de_vida" class="tab-pane in active">
						@include('content.etapas.metadatos.ciclo')
					</div>
				@endif


				<!--CATEGORÍA 3-->
				@if($subetapa_metadatos>=4)
				{{-- edicion --}}
				<div id="meta_metadatos" class="tab-pane">
					@include('content.etapas.metadatos.metametadatos_edit')
				</div>
				@elseif($subetapa_metadatos==3)
				<div id="meta_metadatos" class="tab-pane in active">
					@include('content.etapas.metadatos.metametadatos')
				</div>
				@endif

				<!--CATEGORÍA 4-->
				@if($subetapa_metadatos>=5)
				{{-- edicion --}}
					<div id="tecnica" class="tab-pane">
						@include('content.etapas.metadatos.tecnica_edit')
					</div>
				@elseif($subetapa_metadatos==4)
					<div id="tecnica" class="tab-pane in active">
							@include('content.etapas.metadatos.tecnica')
						</div>
				@endif

				<!--CATEGORÍA 5-->
				@if($subetapa_metadatos>=6)
				{{-- edicion --}}
					<div id="educacional" class="tab-pane ">
						@include('content.etapas.metadatos.educacional_edit')
					</div>
				@elseif($subetapa_metadatos==5)
					<div id="educacional" class="tab-pane in active">
						@include('content.etapas.metadatos.educacional')
					</div>
				@endif

				<!--CATEGORÍA 6-->
				@if($subetapa_metadatos>=7)
				{{-- edicion --}}
				<div id="derechos_de_uso" class="tab-pane">
					@include('content.etapas.metadatos.derechos_edit')
				</div>
				@elseif($subetapa_metadatos==6)
					<div id="derechos_de_uso" class="tab-pane in active">
						@include('content.etapas.metadatos.derechos')
					</div>
				@endif

				<!--CATEGORÍA 7-->
				@if($subetapa_metadatos>=8)
				{{-- edicion --}}
					<div id="relacion" class="tab-pane">
						@include('content.etapas.metadatos.relacion_edit')
					</div>
				@elseif($subetapa_metadatos==7)
				<div id="relacion" class="tab-pane in active">
					@include('content.etapas.metadatos.relacion')
				</div>
				@endif
				<!--CATEGORÍA 8-->
				@if($subetapa_metadatos>=9)
					<div id="anotaciones" class="tab-pane">
						@include('content.etapas.metadatos.anotaciones_edit')
					</div>
				@elseif($subetapa_metadatos==8)
					<div id="anotaciones" class="tab-pane in active">
						@include('content.etapas.metadatos.anotaciones')
					</div>
				@endif
				
				<!--CATEGORÍA 9-->

				@if($subetapa_metadatos>=10)
				{{-- edicion --}}
					<div id="clasificacion" class="tab-pane">
						@include('content.etapas.metadatos.clasificacion_edit')
					</div>
				@elseif($subetapa_metadatos==9)
					<div id="clasificacion" class="tab-pane in active">
						@include('content.etapas.metadatos.clasificacion')
					</div>
				@endif
			</div>
			
	<!-- Extra large modal - metadatos-->
	<div id="de_metadatos" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">		
			<div class="modal-content">
				<div class="modal-header a-croa-modal">
					<h5 class="modal-title">SUB-ETAPA DE CARGA DE MATADATOS</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-justify">
					<p>El estándar IEEE-LOM permite caracterizar diferentes materiales, recursos y herramientas educativas con el fin de permitir 
					que sean almacenados, buscados y recuperados en diferentes entornos tecnológicos. Aquí, se especificarán cuáles de los metadatos
					propuestos por IEEE-LOM se sugieren como obligatorios desde CROA y de qué forma pueden ser completados.</p>
					<p>El estándar IEEE-LOM establece las siguientes categorías de metadatos:</p>
					<p>1. GENERAL</p>
					<p>2. CICLO DE VIDA</p>
					<p>3. META-METADATOS</p>
					<p>4. TÉCNICA</p>
					<p>5. EDUCACIONAL</p>
					<p>6. DERECHOS DE USO</p>
					<p>7. RELACIÓN</p>
					<p>8. ANOTACIONES</p>
					<p>9. CLASIFICACIÓN</p>
				</div>
			</div>
		</div>
	</div>