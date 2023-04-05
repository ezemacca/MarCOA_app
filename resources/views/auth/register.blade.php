<!doctype html>
<html lang="es">

    <head>
        @include('includes.head')
        @livewireStyles 
        @include('components.head.tinymce-config')
    </head>

    <body>
        <div class="container-fluid">
            <!--<header class="row fixed-top">-->
            <header class="row header">
                @include('includes.header')
            </header>

<div class="row contenido ">


<div class="split left"> 

    <div class="centered">
            <img src="{{url('/images/MarCOA-01.png')}}" width="100%" height="100%"/>
        @if (auth()->check())
            <a class="btn btn-primary" href="{{ route('inicio') }}" role="button">Continuar</a>
        @endif 
    </div>

</div> 
<div class="split right"> 
    <div class="centered">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="grid-container-registro" >
            <div class="grid-item">
                    <h3 style="padding-bottom:20px;">
                        REGISTRO
                    </h3>
                
                 <form method="POST" action="{{ route('register') }}">
                    {{-- @csrf --}}
                    {{ csrf_field() }}

                    <!-- Name -->
                    <div>
                        <x-input placeholder="Nombre" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                   
                        <x-input placeholder="Correo" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">                  
                        <x-input placeholder="Contraseña" id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
         
                        <x-input placeholder="Confirme contraseña" id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        
              
                        <x-button class="btn btn-primary" >
                            {{ __('Confirmar Registro') }}
                        </x-button>
                        <br>
                        <br>
                        <a style="font-size: 17px" href="{{ route('bienvenida') }}">
                            {{ __('Ya está registrado?') }}
                        </a>
                    </div>
                </form>

            </div>         
        
</div>

    </div>
</div> 





