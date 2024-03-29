<!DOCTYPE html>
<html lang="spanish">
  <head>
    <title>Multimedial</title>
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
    <div>
      <link rel="stylesheet" type="text/css" href="{{ public_path('css/pdf/analisis.css')}}" />

      <div class="analisis-container">
        <img
          alt="image"
          src="{{ public_path('playground_assets/CabeceraDisenoMultimedial.png')}}"
          class="analisis-image"
        />
      <div class="centrado">
        <div class="analisis-analisis">
          <span class="analisis-titulo">
            1. ¿Qué necesitan aprender los destinatarios?
          </span>
          <br>
          <span class="analisis-text">
            <br>
            {!! $multimedial->diseño_mult_p1 !!} 
          </span>

          <br><br><hr><br><br><br>
           <span class="analisis-titulo">
            2. Mapeos entre nodos y plantillas multimediales
          </span>
          <br>
          <br>
          <span class="analisis-text">
          <br>  
          <table class="table table-bordered ">
            <thead class="thead">
                <tr>
                  <th>Nodo</th>
                  <th>Descripcion</th>
                  <th>Plantilla</th>
                </tr>
              </thead>
              <tbody>
            @foreach($multimedial->mapeos()->get() as $row)
                
                <tr>
                  <td>
                    {!! $row->nodo !!}
                  </td>
                  <td>
                    {!! $row->descripcion !!}
                  </td>
                  <td>
                    {!! $row->plantilla !!}
                  </td>
                </tr>
            @endforeach
            </tbody>
            </table>  
            
        </div>
      </div>
    </div>
  </body>
</html>
