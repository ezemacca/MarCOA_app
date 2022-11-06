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
    <div>
      <link rel="stylesheet" type="text/css" href="{{ public_path('css/pdf/analisis.css')}}" />

      <div class="analisis-container">
        <img
          alt="image"
          src="{{ public_path('playground_assets/cabecera.png')}}"
          class="analisis-image"
        />
      <div class="centrado">
        <div class="analisis-analisis">
          <span class="analisis-titulo">
            1. ¿Qué necesitan aprender los destinatarios?
          </span>
          <span class="analisis-text">
            
            {!! $analisis->analisis_p1 !!} 
            
          </span>
          <br><br>
           <span class="analisis-titulo">
            2. ¿Por qué se cree necesario utilizar un OA y no otro tipo de material educativo?
          </span>
          <span class="analisis-text">
            
            {!! $analisis->analisis_p2 !!} 
            
          </span>
          <br><br>
           <span class="analisis-titulo">
            3. ¿A qué nivel educativo se orienta el OA?
          </span>
          <span class="analisis-text">
            
            {!! $analisis->analisis_p3 !!} 
            
          </span>
          <br><br>
           <span class="analisis-titulo">
            4. ¿Qué tema abordará el OA?
          </span>
          <span class="analisis-text">
            
            {!! $analisis->analisis_p4 !!} 
            
          </span>
          <br><br>
           <span class="analisis-titulo">
            5. ¿Qué conocimientos previos debería tener el alumno para utilizar el OA?
          </span>
          <span class="analisis-text">
            
            {!! $analisis->analisis_p5 !!} 
            
          </span>
          <br><br>
           <span class="analisis-titulo">
            6. ¿Con qué conocimiento que pueden ser adquiridos posteriormente se relaciona el OA?
          </span>
          <span class="analisis-text">
            
            {!! $analisis->analisis_p6 !!} 
            
          </span>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>
