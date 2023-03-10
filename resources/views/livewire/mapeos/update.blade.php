<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Mapeo
                   @if (session()->has('message'))
                            <br><br>
                            <span wire:poll.4s class="btn btn-sm btn-success" > {{ session('message') }} </span>
                    @endif 
                </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <form>
					<input type="hidden" wire:model="selected_id">
         {{--    <div class="form-group">
                <label for="multimedial_id"></label>
                <input wire:model="multimedial_id" type="text" class="form-control" id="multimedial_id" placeholder="Multimedial Id">@error('multimedial_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div> --}}
            <div class="form-group">
                <label for="nodo">Nodo</label>
                <input wire:model="nodo" type="text" class="form-control" id="nodo" placeholder="Nodo">@error('nodo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input wire:model="descripcion" type="text" class="form-control" id="descripcion" placeholder="Descripcion">@error('descripcion') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="plantilla">Plantilla</label>
                <input wire:model="plantilla" type="text" class="form-control" id="plantilla" placeholder="Plantilla">@error('plantilla') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Guardar</button>
                <button type="button" wire:click.prevent="cancel()" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
       </div>
    </div>
</div>
