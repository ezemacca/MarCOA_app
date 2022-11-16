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

@if (!auth()->check())
    <div class="split left"> 
@endif
    <div class="centered">

        <img src="{{url('/images/MarCOA-01.png')}}" width="100%" height="100%"/>
        @if (auth()->check())
            <a class="btn btn-primary" href="{{ route('inicio') }}" role="button">Continuar</a>
        @endif
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
            <a style="font-family: 'Raleway';font-size: 25px; font-weight: 900;">
                INICIAR SESIÓN
            </a>
            <form method="POST" action="{{ route('login') }}">
                {{-- @csrf --}}
                {{ csrf_field() }}

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
                    <button class="btn btn-primary" role="button">Ingresar</button>
                </div>
                <div class="btn-group" role="group" >   
                 @if (Route::has('password.request'))
                    <button class="btn btn-primary"  href="{{ route('password.request') }}">
                            {{ __('Olvidé mi contraseña') }}
                    </button>

                    @endif
                </div>
                    

                </div>
            </form>
    </div>         

    {{-- <div class="grid-item">2</div> --}}

    <div class="grid-item">
                @if (Route::has('register'))
                    <br><br><br><br>
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
</div>

            <!--<footer class="row d-block mx-auto fixed-bottom">-->
            <footer class="row fixed-bottom">
                @include('includes.footer')
            </footer>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </div>
    

        @livewireScripts
    </body>

</html>
