@section('title', __('Proyectos'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			@if($proyectos->isEmpty())
				<div class="center">
					
						<p> No hay proyectos para mostrar</p>
					<br>
						<p> Desea crear un proyecto nuevo?</p>
					<br>
							<a  href="{{route('creacion')}}" >
								<img src="{{url('/images/MarCOA-19.png')}}" width="220px" height="220px"/> 
							</a>
				</div>
			@else
				<div class="card">
					<div class="card-header">
						<div style="display: flex; justify-content: space-between; align-items: center;">
							
							<div class=" float-left">
								
									<a href="{{route('inicio')}}">
										<img src="{{url('/images/MarCOA-18.png')}}" width="50%" height="50%"/>
									</a>

								
							</div>
							<div class="float-left">
									<h1 style="color:black;">@lang('Proyectos de ') {{Auth::user()->name}} </h1>
							</div>	
							
							@if (session()->has('message'))
							<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
							@endif
							
							<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
							<i class="fa fa-plus"></i>  Agregar un nuevo proyecto
							</div>
						</div>
					</div>
					
					<div class="card-body" >
							@include('livewire.proyectos.create')
							@include('livewire.proyectos.update')
					
					<div class="table-responsive" >
						<table class="table table-bordered table-sm">
							<thead class="thead">
								<tr> 
									{{-- <td>#</td> 
									<th>User Id</th> --}}
									<th>Titulo</th>
									<th>Descripcion</th>
									<th>Progreso </th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($proyectos as $row)
								<tr>
									{{-- <td>{{ $loop->iteration }}</td> 
									<td>{{ $row->user_id }}</td> --}}
									<td><br>
										<a href="{{route('principal', $row)}}">
											{{$row->titulo}} 
										</a>
									</td>
									<td><br>{{ $row->descripcion }}</td>
									<td><br>							

										<div class="progress">
										  <div class="progress-bar bg-info" role="progressbar" style="width: {{ ($row->etapa)*100/5 }}%" >{{ ($row->etapa)*100/5 }}% </div>
										</div>
										</div>

										
									</td>
									<th>
										<div class="btn-toolbar" role="toolbar" >
											<div class="btn-group" role="group">
												<div style="padding: 10px;"></div>
												 
												<form action="{{route('principal', $row)}}">
												<button type="submit" class="btn btn-sm btn-info" >
													<a>
													Abrir
													</a>	
												</button>
											</form>
												<div style="padding: 10px;"></div>

												 <button type="button" class="btn btn-sm btn-info" wire:click="edit({{$row->id}})">
													 <a data-toggle="modal" data-target="#updateModal">
														<i class="fa fa-edit"></i> 
														Editar
													</a>		
												</button>
												<div style="padding: 10px;"></div>
												<button type="button" class="btn btn-sm btn-info" wire:click="destroy({{$row->id}})" onclick="confirm('Confirma eliminar el proyecto {{$row->id}}? \nRecuerde que los proyectos eliminados no se pueden recuperar.')||event.stopImmediatePropagation()">
													<a data-toggle="modal" data-target="#updateModal"  >
														<i class="fa fa-trash"></i> 
														Eliminar 
													</a>   
												</button>
											</div>
										</div>
									</th>
									
								@endforeach
								

							</tbody>
						</table>						
						{{ $proyectos->links() }}
						</div>
					</div>
				</div>
			@endif
		</div>
	</div>
</div>
