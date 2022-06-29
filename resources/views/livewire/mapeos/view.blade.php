@section('title', __('Mapeos'))

<div class="container-fluid">
	<div class="row justify-content-center">
		
			<div class="card">
					<div class="card-header">
						<div style="display: flex; justify-content: space-between; align-items: center;">
							
							@if (session()->has('message'))
							<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
							@endif
							<div>
								<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Mapeos">
							</div>
							<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
							<i class="fa fa-plus"></i>  Agregar Mapeo
							</div>
						</div>
					</div>
					
					<div class="card-body">
							@include('livewire.mapeos.create')
							@include('livewire.mapeos.update')
					<div class="table-responsive">
						<div class="table-wrapper" >
						<table class="table table-bordered ">
							<thead class="thead">
								<tr> 
									 
									<th>Nodo</th>
									<th>Descripcion</th>
									<th>Plantilla</th>
									<td>Acciones</td>
								</tr>
							</thead>
							<tbody>
								@foreach($mapeos as $row)
								<tr>
									<td><br>{{ $row->nodo }}</td>
									<td><br>{{ $row->descripcion }}</td>
									<td><br>{{ $row->plantilla }}</td>
									<td>
										<div class="btn-toolbar" role="toolbar" >
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-sm btn-info" wire:click="edit({{$row->id}})" >
													<a data-toggle="modal" data-target="#updateModal"   >
														<i class="fa fa-edit"></i> 
														Editar  
													</a>	
												</button>
												<button type="button" class="btn btn-sm btn-info" >
													<a  onclick="confirm('Confirm Delete Mapeo id {{$row->id}}? \nDeleted Mapeos cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})">
														<i class="fa fa-trash"></i> 
														Eliminar 
													</a>
												</button>
											</div>
										</div>
									</td>
									</tr>
								@endforeach

							</tbody>
						</table>						
						
						</div>
					</div>
					{{ $mapeos->links() }}
					</div>
			</div>
		
	</div>
</div>
	
