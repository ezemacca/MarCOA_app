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
        <div class="grid-container">
            <div class="grid-item">
                    <h3>
                        Registrarse
                    </h3>
                    <br>
                 <form method="POST" action="{{ route('register') }}">
                    {{-- @csrf --}}
                    {{ csrf_field() }}

                    <!-- Name -->
                    <div>
                        <x-label for="name" :value="__('Nombre')" />
                        <br>
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" />
                        <br>
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Clave')" />
                        <br>
                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirme Clave')" />
                        <br>
                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('bienvenida') }}">
                            {{ __('Ya está registrado?') }}
                        </a>
                        <br>
                        <x-button class="btn btn-primary" >
                            {{ __('Confirmar Registro') }}
                        </x-button>
                    </div>
                </form>

            </div>         
        
</div>

    </div>
</div> 





