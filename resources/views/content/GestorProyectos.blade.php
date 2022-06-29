
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

<div class="volver-flecha">
	<a href="{{url('inicio')}}">
		<img src="{{url('/images/MarCOA-18.png')}}" width="50%" height="50%"/>
	</a>
</div>


<div class="container-xl">
	<div class="table-responsive">
			<br><br><br>
			<div class="table-title">
				
				<div class="row">
					
						<br><br><br>
						<h1 style="color:black;">@lang('Proyectos de ') {{Auth::user()->name}}</h1>
						<br>
				
					
				</div>
			</div>
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
									<a href="{{route('principal', $proyecto)}}">{{$proyecto['titulo']}} </a></td>
							
								<td>{{$proyecto['descripcion']}}</td> </a>

								<td>
									<a href="{{route('GestorProyectos.edit',$proyecto)}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>

									<a href="#EliminarProyectoModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
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

</div>
@stop
<!-- Edit Modal HTML -->
{{-- <div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
 </div> --}}

{{-- @if(! is_null($portafolio)) --}}
<!-- Edit Modal HTML -->

<!-- Delete Modal HTML -->
 {{-- @endif --}}

 
