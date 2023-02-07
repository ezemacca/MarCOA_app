<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            
        </x-slot>

    <div class="grid-container" style="grid-template-columns: 400px 200px ;">

        <div class="grid-item">
        <a style="font-family: 'Raleway';font-size: 25px; font-weight: 900;">
                RESTABLECER CONTRASEÑA
            </a>
            <br><br>
        <div class="mb-4 text-gray-600" style="font-family: 'Raleway';font-size: 15px; font-weight: 900;">
            {{ __('Para reiniciar su contraseña, indique el correo electrónico con el que se registro en MarCOA') }}
        </div>

      

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input placeholder="Correo electrónico" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="btn btn-primary" >
                    {{ __('Enviar link para reiniciar contraseña') }}
                </x-button>
            </div>
            
        </form>

    
    </div>
    <div class="grid-item">
        <br>
            <div class="mb-4 text-gray-600" style="font-family: 'Raleway';font-size: 15px; font-weight: 900;">
                {{ __('Si recuerda su contraseña, inicie sesión') }}
            </div>
            <a  
            class="btn btn-primary"
            style="font-family: 'Raleway';font-size: 14px; font-weight: 900; "
            href="{{url('/')}}" >
                Iniciar sesión
            </a>
    </div>
</div>
</x-auth-card>
</x-guest-layout>
