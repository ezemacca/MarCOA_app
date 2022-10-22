
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



@extends('layouts.default')
@section('content')
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>


	

<div class="container-fluid">
			
	<div class="row" id="cabecera-proyecto">
		<div class="col-2 text-left">
			<div class="volver-flecha" >
				<a href="{{route('inicio')}}">
					<img src="{{url('/images/MarCOA-18.png')}}" width="50%" height="50%"/>
				</a>

			</div>
		</div>
		<div class="col-10 text-left">
				<h1 style="color:black;">@lang('Proyectos de ') {{Auth::user()->name}} </h1>
		</div>
		
	</div>
			
	<div class="row">
		<div class="col-2">	
		</div>
		<div class="col-8">
			<div class="row">
				<div class="table-wrapper">

					<table class="table table-striped table-hover">
						<thead id="thead">
							<tr>
								<th>Nombre</th>
								<th>Descripción</th>
								<th>Acciones</th>
							</tr>
						</thead>

						<tbody>
							@forelse($portafolio as $proyecto)
								<tr>

									@if($proyecto['user_id'] == Auth::user()->id )

										<td>
											<a href="{{route('principal', $proyecto)}}">{{$proyecto->titulo}} </a></td>
									
										<td>{{$proyecto['descripcion']}}</td> </a>

										<td>
											<a href="{{route('GestorProyectos.edit',$proyecto)}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
											
											<form action="{{route('GestorProyectos.destroy',$proyecto)}}" class="eliminar-proyecto" method="POST">
												@method('DELETE')
												@csrf
												
													<button type="submit"  data-toggle="modal" class="material-icons" data-toggle="tooltip" title="Eliminar">
													&#xE872;
													</button>
											</form>
											</td>
										
									@endif
								</tr>
								@empty
										<li> No hay proyectos para mostrar</li>
								@endforelse
									
								</tr>		 
						</tbody>
					</table>
				</div>			
			</div>
		</div>
		<div class="col-2">	
		</div>
	</div>  
</div>




<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	
	$('.eliminar-proyecto').submit(function(e)
	{
		e.preventDefault();
			const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: 'btn btn-success',
				cancelButton: 'btn btn-danger'
			},
			buttonsStyling: true
			})

			swalWithBootstrapButtons.fire({
			title: 'Está seguro?',
			text: "Una vez elminado, no se podrá recuperar la información de su proyecto",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Sí, eliminar',
			cancelButtonText: 'No, cancelar',
			reverseButtons: true
			}).then((result) => {
			if (result.isConfirmed) {
				swalWithBootstrapButtons.fire(
				'Eliminado!',
				'El proyecto fue eliminado con éxito.'
				)
			} else if (
				/* Read more about handling dismissals below */
				result.dismiss === Swal.DismissReason.cancel
			) {
				swalWithBootstrapButtons.fire(
				'Cancelado',
				'Su proyecto no se eliminó',
				)
			}
			})
	});
</script>


 
@stop