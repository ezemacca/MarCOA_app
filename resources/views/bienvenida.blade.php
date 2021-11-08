@extends('layouts.default')
 
@section('content')
	
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

                        <a class="btn btn-primary" href="{{ route('principal') }}" role="button">Continuar proyecto </a>

                        <!-- <a class="btn btn-primary"  href="{{ route('logout')  }}" role="button" > Cerrar Sesión</a> -->
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

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

@stop