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
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya está registrado?') }}
                </a>
                <br>
                <x-button class="btn btn-primary" >
                    {{ __('Confirmar Registro') }}
                </x-button>
            </div>
        </form>

    </div>         

    {{-- <div class="grid-item">2</div> --}}

  {{--   <div class="grid-item">
                @if (Route::has('register'))
                    <div class="container-fluid text-center">    
                        <a class="btn btn-primary" href="{{ route('register') }}" role="button">Registrarse</a>
                    </div>
                @endif  
            </div> --}}
        
</div>

    </div>
</div> 
</div>

@endif

@stop
