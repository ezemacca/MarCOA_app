@livewireStyles
@livewireScripts
<div>
    <div class="max-w-xl w-full">
        @foreach($inputs as $key => $input)
        <td>
                <div class="mt-12">
                    <div class="w-full">
                        
                        {{-- <label for="input_{{$key}}_email" class="sr-only">Email</label> --}}
                        <input type="text" id="input_{{$key}}_email" wire:model.defer="inputs.{{$key}}.nodo" class="shadow-sm border-0 focus:outline-none p-3 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Complete con el nombre del nodo" autocomplete="off">

                        @error('inputs.'.$key.'.nodo') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                    </div>

                    @if($key > 0)
                    <div wire:click="removeInput({{$key}})" class="flex items-center justify-end text-red-600 text-sm w-full cursor-pointer">
                        <svg width="30" height="30"fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        <p>Remove Input</p>
                    </div>
                    @endif
                </div>
        </td>

        <td>

                <div class="mt-12">
                <div class="w-full">
                    
                    {{-- <label for="input_{{$key}}_email" class="sr-only">Email</label> --}}
                    <input type="text" id="input_{{$key}}_email" wire:model.defer="inputs.{{$key}}.descripcion" class="shadow-sm border-0 focus:outline-none p-3 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Complete con la descripción" autocomplete="off">

                    @error('inputs.'.$key.'.descripcion') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>
                
                @if($key > 0)
                <div wire:click="removeInput({{$key}})" class="flex items-center justify-end text-red-600 text-sm w-full cursor-pointer">
                    <svg width="30" height="30"fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                    <p>Remove Input</p>
                </div>
                @endif
                </div>

        </td>

        <td>
                <div class="mt-12">
                <div class="w-full">
                    
                    {{-- <label for="input_{{$key}}_email" class="sr-only">Email</label> --}}
                    <input type="text" id="input_{{$key}}_email" wire:model.defer="inputs.{{$key}}.plantilla" class="shadow-sm border-0 focus:outline-none p-3 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Complete con la plantilla a utilizar" autocomplete="off">

                    @error('inputs.'.$key.'.plantilla') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>
                
                @if($key > 0)
                <div wire:click="removeInput({{$key}})" class="flex items-center justify-end text-red-600 text-sm w-full cursor-pointer">
                    <svg width="30" height="30"fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                    <p>Remove Input</p>
                </div>
                @endif
                </div>

        </td>




        @endforeach

<td>
        <div wire:click="addInput" class="flex items-center justify-center text-blue-600 text-sm py-4 w-full cursor-pointer">
            <svg width="30" height="30" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
            <p class="ml-2">Agregar Mapeo</p>
        </div>
</td>

    </div>

    @error('inputs.'.$key.'.email') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

    </div>
