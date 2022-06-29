<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Crear nuevo mapeo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
          {{--   <div class="form-group">
                <label for="multimedial_id">Multi</label>
                <input wire:model="multimedial_id" type="text" class="form-control" id="multimedial_id" placeholder="Multimedial Id">@error('multimedial_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div> --}}
            <div class="form-group">
                <label for="nodo">Nodo</label>
                <input wire:model="nodo" type="text" class="form-control" id="nodo" placeholder="Nodo">@error('nodo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input wire:model="descripcion" type="text" class="form-control" id="descripcion" placeholder="Descripcion">@error('descripcion') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="plantilla">Plantilla</label>
                <input wire:model="plantilla" type="text" class="form-control" id="plantilla" placeholder="Plantilla">@error('plantilla') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cancelar</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Guardar</button>
            </div>
        </div>
    </div>
</div>