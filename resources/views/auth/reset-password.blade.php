<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
          
        </x-slot>


        <a style="font-family: 'Raleway';font-size: 25px; font-weight: 900;">
                RESTABLECER CONTRASEÑA
            </a>
            <br><br>
        <div class="mb-4 text-gray-600" style="font-family: 'Raleway';font-size: 15px; font-weight: 900;">
            {{ __('Para restablecer su contraseña, indique el correo electrónico con el que se registro en MarCOA y la nueva contraseña') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>

                <x-input  placeholder="Correo electrónico" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">

                <x-input  placeholder="Nueva Contraseña" id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
               
                <x-input  placeholder="Repita nueva contraseña" id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                
                   
                    <a  
                    class="btn btn-primary" type="submit" 
                    style="font-family: 'Raleway';font-size: 14px; font-weight: 900; color: white;">
                            Restablecer Contraseña
                    </a>
               
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
