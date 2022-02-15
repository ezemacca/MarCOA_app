@extends('layouts.default')

@section('content')

@if (!auth()->check())
<div class="split left"> 
@endif
    <div class="centered">{{-- 
     <div class="container-fluid text-center titulo">
        <p>MarCOA</p> --}}
        <img src="{{url('/images/MarCOA-01.png')}}" width="100%" height="100%"/>
        @if (auth()->check())
            <a class="btn btn-primary" href="{{ route('inicio') }}" role="button">Continuar</a>

        @endif 
    </div>

    {{-- <div class="container-fluid text-center sub-titulo">
        <b>Mar</b>co para la <b>C</b>reación de <b>O</b>bjetos de <b>A</b>prendizaje
    </div> --}}

    <div class="container-fluid text-center">

        
            {{-- <div @auth class="container-fluid text-center"> --}}

            
                      {{-- <a class="btn btn-primary"  href="{{ route('logout')  }}" role="button" > Cerrar Sesión</a> --}}
                      {{-- <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a> --}}

                   {{--  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> --}}
             
                     
                    

            {{-- @endauth --}}
            </div>
	
    </div>

</div>

</div>


@if (!auth()->check())

<div class="split right"> 
    <div class="centered">

       
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        

<div class="grid-container">

    <div class="grid-item">
            <h3>
                Inicio de Sesión
            </h3>
            <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Usuario" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                

                <x-input id="password" class="block mt-1 w-full" 
                type="password"
                name="password"
                required autocomplete="current-password" placeholder="Contraseña"/>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme  ') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                

                <div class="btn-group" role="group" >
                    <button class="btn btn-primary" role="button">Iniciar Sesión</button>
                </div>
                <div class="btn-group" role="group" >   
                 @if (Route::has('password.request'))
                    <button class="btn btn-primary"  href="{{ route('password.request') }}">
                            {{ __('Olvidó su contraseña?') }}
                    </button>

                    @endif
                </div>
                    

                </div>
            </form>
    </div>         

    {{-- <div class="grid-item">2</div> --}}

    <div class="grid-item">
                @if (Route::has('register'))
                    <div class="container-fluid text-center">    
                        <a class="btn btn-primary" href="{{ route('register') }}" role="button">Registrarse</a>
                    </div>
                @endif  
            </div>
        
</div>

    </div>
</div> 
</div>

@endif

@stop

