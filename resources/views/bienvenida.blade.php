@extends('layouts.default')

@section('content')

<div class="split left"> 
    <div class="centered">
     <div class="container-fluid text-center titulo">
        <p>MarCOA</p>
    </div>

    <div class="container-fluid text-center sub-titulo">
        <b>Mar</b>co para la <b>C</b>reación de <b>O</b>bjetos de <b>A</b>prendizaje
    </div>

    <div class="container-fluid text-center">

      @if (Route::has('login'))
      <div
      @auth
      class="container-fluid text-center">

      <a class="btn btn-primary" href="{{ route('GestorProyectos') }}" role="button">Continuar</a>

      <!-- <a class="btn btn-primary"  href="{{ route('logout')  }}" role="button" > Cerrar Sesión</a> -->
      {{-- <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a> --}}

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
     </form>
     @else
     <div class="container-fluid text-center">
        <a class="btn btn-primary" href="{{ route('login') }}" role="button">Iniciar Sesión</a>
    </div>
    @if (Route::has('register'))
    <div class="container-fluid text-center">    
        <a class="btn btn-primary" href="{{ route('register') }}" role="button">Registrarse</a>
    </div>
    @endif	

    @endauth
    </div>
@endif	
</div>

</div>


<div class="split right"> 
    <div class="centered">

        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Correo')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme  ') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Olvidó su contraseña?') }}
                </a>
                @endif

                <x-button class="ml-3">
                </x-button>
            </div>
        </form>
</div> 
</div>



@stop

