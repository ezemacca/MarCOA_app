<div class="text-right" style="padding-bottom: 10px;">
	<a class="nav-link" data-toggle="modal" href="#de_metadatos">
		<svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
		</svg>
	</a>					
</div>

	<div class="container-fluid">
		<ul class="nav nav-tabs">
				<li class="nav-item active">
					<button id="general-tab" class="nav-link pestaña pestaña-pequeña" data-bs-toggle="tab" data-bs-target="#general">1. GENERAL</button>
				</li>
			
				<li class="nav-item">
					<button class="nav-link pestaña pestaña-pequeña" data-bs-toggle="tab" data-bs-target="#ciclo_de_vida">2. CICLO DE VIDA</button>
				</li>

				<li class="nav-item">
					<a id="meta_metadatos-tab" class="nav-link pestaña pestaña-pequeña" data-bs-toggle="tab" data-bs-target="#meta_metadatos">3. META-METADATOS</a>
				</li>
			
				<li class="nav-item">
					<a id="tecnica-tab" class="nav-link pestaña pestaña-pequeña" data-bs-toggle="tab" data-bs-target="#tecnica">4. TÉCNICA</a>
				</li>

				<li class="nav-item">
					<a id="educacional-tab" class="nav-link pestaña pestaña-pequeña" data-bs-toggle="tab" data-bs-target="#educacional">5. EDUCACIONAL</a>
				</li>
	
				<li class="nav-item">
					<a id="derechos_de_uso-tab" class="nav-link pestaña pestaña-pequeña" data-bs-toggle="tab" data-bs-target="#derechos_de_uso">6. DERECHOS DE USO</a>
				</li>
		
				<li class="nav-item">
					<a id="relacion-tab" class="nav-link pestaña pestaña-pequeña" data-bs-toggle="tab" data-bs-target="#relacion">7. RELACIÓN</a>
				</li>
		
				<li class="nav-item ">
					<a id="anotaciones-tab" class="nav-link pestaña pestaña-pequeña" data-bs-toggle="tab" data-bs-target="#anotaciones">8. ANOTACIONES</a>
				</li>
			
				<li class="nav-item">
					<a id="clasificacion-tab" class="nav-link  pestaña pestaña-pequeña" data-bs-toggle="tab" data-bs-target="#clasificacion">9. CLASIFICACIÓN</a>
				</li>
		
		</ul>	
	</div>
	<div class="tab-content">
		<!--CATEGORÍA 1-->
		@if(is_null($proyecto->desarrollo->metadatos->general()->first()))
			<div id="general" aria-labelledby="general-tab" role="tabpanel" class="tab-pane fade show active" >
				@include('content.etapas.metadatos.general')
			</div>

		@else
			<div id="general" aria-labelledby="general-tab" class="tab-pane fade show active">
				@include('content.etapas.metadatos.general_edit')
			</div>
		@endif
		
		<!--CATEGORÍA 2-->
		@if(is_null($proyecto->desarrollo->metadatos->ciclo()->first()))
			<div id="ciclo_de_vida" aria-labelledby="ciclo_de_vida-tab" role="tabpanel" class="tab-pane fade">
				@include('content.etapas.metadatos.ciclo')
			</div>
		@else
			<div id="ciclo_de_vida" aria-labelledby="ciclo_de_vida-tab" role="tabpanel" class="tab-pane fade">
				@include('content.etapas.metadatos.ciclo_edit')
			</div>
		@endif


		<!--CATEGORÍA 3-->
		@if(is_null($proyecto->desarrollo->metadatos->metametadatos()->first()))
		
			<div id="meta_metadatos" aria-labelledby="meta_metadatos-tab" role="tabpanel" class="tab-pane fade">
				@include('content.etapas.metadatos.metametadatos')
			</div>

		@else
		<div id="meta_metadatos" aria-labelledby="meta_metadatos-tab" role="tabpanel" class="tab-pane fade">
			@include('content.etapas.metadatos.metametadatos_edit')
		</div>

		@endif

		<!--CATEGORÍA 4-->
		@if(is_null($proyecto->desarrollo->metadatos->tecnica()->first()))
		{{-- edicion --}}
			<div id="tecnica" aria-labelledby="tecnica-tab" role="tabpanel" class="tab-pane fade">
				@include('content.etapas.metadatos.tecnica')
			</div>
		@else
			<div id="tecnica" aria-labelledby="tecnica-tab" role="tabpanel" class="tab-pane fade">
					@include('content.etapas.metadatos.tecnica_edit')
				</div>
		@endif

		<!--CATEGORÍA 5-->
		@if(is_null($proyecto->desarrollo->metadatos->educacional()->first()))
		{{-- edicion --}}
			<div id="educacional" aria-labelledby="educacional-tab" role="tabpanel" class="tab-pane fade">
				@include('content.etapas.metadatos.educacional')
			</div>
		@else
			<div id="educacional" aria-labelledby="educacional-tab" role="tabpanel" class="tab-pane fade">
				@include('content.etapas.metadatos.educacional_edit')
			</div>
		@endif

		<!--CATEGORÍA 6-->
		@if(is_null($proyecto->desarrollo->metadatos->derechos()->first()))
		{{-- edicion --}}
		<div id="derechos_de_uso" aria-labelledby="derechos_de_uso-tab" role="tabpanel" class="tab-pane fade">
			@include('content.etapas.metadatos.derechos')
		</div>
		@else
			<div id="derechos_de_uso" aria-labelledby="derechos_de_uso-tab" role="tabpanel" class="tab-pane fade">
				@include('content.etapas.metadatos.derechos_edit')
			</div>
		@endif

		<!--CATEGORÍA 7-->
		@if(is_null($proyecto->desarrollo->metadatos->relacion()->first()))
		{{-- edicion --}}
			<div id="relacion" aria-labelledby="relacion-tab" role="tabpanel" class="tab-pane fade">
				@include('content.etapas.metadatos.relacion')
			</div>
		@else
		<div id="relacion" aria-labelledby="relacion-tab" role="tabpanel" class="tab-pane fade">
			@include('content.etapas.metadatos.relacion_edit')
		</div>
		@endif
		<!--CATEGORÍA 8-->
		@if(is_null($proyecto->desarrollo->metadatos->anotaciones()->first()))
			<div id="anotaciones" aria-labelledby="anotaciones-tab" role="tabpanel" class="tab-pane fade">
				@include('content.etapas.metadatos.anotaciones')
			</div>
		@else
			<div id="anotaciones" aria-labelledby="anotaciones-tab" role="tabpanel" class="tab-pane fade">
				@include('content.etapas.metadatos.anotaciones_edit')
			</div>
		@endif
		
		<!--CATEGORÍA 9-->

		@if(is_null($proyecto->desarrollo->metadatos->clasificacion()->first()))
		{{-- edicion --}}
			<div id="clasificacion" aria-labelledby="clasificacion-tab" role="tabpanel" class="tab-pane fade">
				@include('content.etapas.metadatos.clasificacion')
			</div>
		@else
			<div id="clasificacion" aria-labelledby="clasificacion-tab" role="tabpanel" class="tab-pane fade">
				@include('content.etapas.metadatos.clasificacion_edit')
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
