<!DOCTYPE html>

<html lang="english">
  <head>
    <title>exported project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15; margin: 0;}
      body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea 
        {  font-family: Raleway;  font-size: 100%;  line-height: 1.15;  margin: 0;}
        button,select {  text-transform: none;}
        button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}
        button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}
        button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}
        input {  padding: 2px 4px;}
        img {  display: block;}
        html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="{{ public_path('css/pdf1.css') }}"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="{{ public_path('css/pdf1.css') }}"
      data-tag="font"
    />
    <link rel="stylesheet" type="text/css" href="{{ public_path('css/pdf/style.css')}}"/>
  </head>
  <body>
    @php
      $path = Storage::url($estructura->estructura_p2);
      // $type = pathinfo($path, PATHINFO_EXTENSION);
      // $data = file_get_contents($estructura->estructura_p2);
      // $data =Storage::get($path);
      // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    @endphp
    <div>
      <link rel="stylesheet" type="text/css" href="{{ public_path('css/pdf/analisis.css')}}" />

      <div class="analisis-container">
        <img
          alt="image"
          src="{{ public_path('playground_assets/CabeceraEstructura.png')}}"
          class="analisis-image"
        />
      <div class="centrado">
        <div class="analisis-analisis">
          <span class="analisis-titulo">
1. ¿Cómo se diseña y planifica el recorrido entre los diversos nodos de información?
          </span>
          <br>
          <span class="analisis-text">
            
            {!! $estructura->estructura_p1 !!} 
            
          </span>
          <br><br><hr><br><br>
           <span class="analisis-titulo">
2. Mapa de navegación:
          </span>
          <br>
          <span class="analisis-text">
            
            Archivo Cargado en el sistema: 
            <br> 
            {{-- <p>{!! $estructura->estructura_p2 !!} </p> --}}
            
            {{-- <img src="{{$path}}"/> --}}
            <img src="{{!!$path!!}}">

            
          </span>
         
        </div>
      </div>
    </div>
  </body>
</html>
