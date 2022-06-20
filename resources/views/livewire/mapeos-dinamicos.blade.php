
<div>
    <div>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif







           
            <form method="POST" wire:submit.prevent="store({{$proyecto}})" {{-- action="{{route('multimedial.store',$proyecto ) }}" --}}>
                
                {{ csrf_field() }}

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
                    <input type="text" class="form-control" wire:model="diseño_mult_p1" name="diseño_mult_p1" id="diseño_mult_p1" value="{{ $diseño_mult_p1 }}" required>
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






              

            @if($mapeos)
                @foreach($mapeos as $mapeo => $num)
                    <div class=" add-input" >
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" wire:model="nodo.{{ $num }}" placeholder="{{$mapeo['nodo']}}" required >
                                    @error('nodo'.$num) <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" wire:model="descripcion.{{ $num }}" placeholder="{{$mapeo->descripcion}}">
                                    @error('descripcion.'.$num) <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" wire:model="plantilla.{{ $num }}" placeholder="{{$mapeo->plantilla}}">
                                    @error('plantilla'.$num) <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-danger btn-sm" wire:click.prevent="eliminar_mapeo({{$mapeo}})">Quitar Mapeo</button>
                            </div>

                            
                        </div>
                    </div>
                @endforeach
            @endif
           

            @foreach($inputs as $key => $value)
                 <div class=" add-input" >
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nodo" wire:model="nodo.{{ $value }}">
                                @error('nodo.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" class="form-control" wire:model="descripcion.{{ $value }}" placeholder="Descripcion">
                                @error('descripcion.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" class="form-control" wire:model="plantilla.{{ $value }}" placeholder="Plantilla">
                                @error('plantilla.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">Quitar Mapeo</button>
                        </div>
                    </div>
                </div>
            @endforeach
           {{--  <div class="row">
                <div class="col-md-12">
                    <button type="button" wire:click.prevent="store()" class="btn btn-success btn-sm">Guardar</button>
                </div>
            </div> --}}



{{-- Aca va la logica Si existen mapeos no muestres esto --}}
 <div class=" add-input">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" wire:model="nodo.0" placeholder="Nodo">
                            @error('Nodo.0') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" wire:model="descripcion.0" placeholder="Descripcion">
                            @error('descripcion.0') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" wire:model="plantilla.0" placeholder="Plantilla">
                            @error('plantilla.0') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>   
                  
                </div>
            </div>

{{-- Hasta aca --}}

        <br><br><div class="text-center">
                        <button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})">    + Agregar Mapeo</button>
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
                            {{-- <button class="btn btn-secondary e-diseño" href="{{route('principal')}}" role="button"> --}}
                            <button type="submit" {{-- wire:click.prevent="store()" --}} class="btn btn-secondary e-diseño">

                                <svg class="bi bi-brush" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
                                    <path d="M15.213 1.018a.572.572 0 0 1 .756.05.57.57 0 0 1 .057.746C15.085 3.082 12.044 7.107 9.6 9.55c-.71.71-1.42 1.243-1.952 1.596-.508.339-1.167.234-1.599-.197-.416-.416-.53-1.047-.212-1.543.346-.542.887-1.273 1.642-1.977 2.521-2.35 6.476-5.44 7.734-6.411z"/>
                                    <path d="M7 12a2 2 0 0 1-2 2c-1 0-2 0-3.5-.5s.5-1 1-1.5 1.395-2 2.5-2a2 2 0 0 1 2 2z"/>
                                </svg>
                                GUARDAR
                            </button>
                    </div>  
                    {{-- <div class="col text-right">
                        
                            <a class="btn btn-secondary boton-generar" href="" role="button">
                            <svg class="bi bi-box-arrow-down" width="30" height="30" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6.646 13.646a.5.5 0 01.708 0L10 16.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z" clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M10 6.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V7a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M4.5 4A1.5 1.5 0 016 2.5h8A1.5 1.5 0 0115.5 4v7a1.5 1.5 0 01-1.5 1.5h-1.5a.5.5 0 010-1H14a.5.5 0 00.5-.5V4a.5.5 0 00-.5-.5H6a.5.5 0 00-.5.5v7a.5.5 0 00.5.5h1.5a.5.5 0 010 1H6A1.5 1.5 0 014.5 11V4z" clip-rule="evenodd"></path>
                            </svg>  
                            </a>
                    </div> --}}
                </div>
            </div>      
        </form>        
    

    </div>
</div>
