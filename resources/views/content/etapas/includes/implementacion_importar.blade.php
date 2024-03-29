

 
 {{-- control de SCORM existente --}}
 @if($scorm==null)
<div id="implementacion-importar" align="center">
  <form method="POST" action="{{ route('scorm.store', $proyecto) }}" enctype="multipart/form-data">
    @csrf 
    <div id="importar-recurso">
      <h1>IMPORTACIÓN DE RECURSO SCORM</h1>
      </br>
      <input type="file" class="form-control-file" name="archivo" id="archivo">
      <button type="submit"  class="btn boton-imp">

        <svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
        </svg>

      </button>
    </div>
  </form>

</div>

  </br>

  @else
    {{-- verificar si esta línea va --}}
    <div class="container-fluid text-right" style="padding-bottom: 10px;">

    <div id="implementacion-box" align="right">
    <p id='titulo-cambiar-decision'>Cambiar a una nueva implementacion</p>
    <a class="button " id="boton-cambiar-decision" type="button" href="{{ route('desarrollo.importar',$proyecto) }}">Importar SCORM</a>
    <a class="button " id="boton-cambiar-decision" type="button" href="{{ route('desarrollo.nueva',$proyecto) }}">Nuevo Recurso</a>
  </div>

    <div class="row">
      <div class="col-11">
        <a class="nav-link" data-toggle="modal" href="#de_implementacion1">
          <svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
          </svg>
        </a>
      </div>
      <div class="col">
        <a class="nav-link" data-toggle="modal" href="#de_implementacion2">
          <svg class="bi bi-info-circle-fill a-croa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
  <div class="container-fluid text-right">
    <a class="nav-link" data-toggle="modal" href="#ayuda">
      <svg class="bi bi-question-circle-fill a-marcoa" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.57 6.033H5.25C5.22 4.147 6.68 3.5 8.006 3.5c1.397 0 2.673.73 2.673 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.355H7.117l-.007-.463c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.901 0-1.358.603-1.358 1.384zm1.251 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
      </svg>
    </a>
  </div>

  <div class="row">
    
    <div class="col-3 bloque-imp">
      <div class="row">
        <div class="col-8">
          <h1>ESTRUCTURA</h1>
        </div>
        <div class="col-2">
          <a class="btn boton-imp" role="button">EDITAR</a>
          <!--<div class="row">
            <div class="col">
              <a class="btn boton-imp" style="font-size: 20px;" role="button">+</a>
            </div>
            <div class="col">
              <a class="btn boton-imp" style="font-size: 20px;" role="button">-</a>
            </div>
          </div>-->
        </div>  
      </div>
      <div class="row">
        
        @foreach ($archivos_html as $archivo)
        {{-- <div class="row"> --}}
          </br>{{substr($archivo, strrpos($archivo, '/')+1)}}
        {{-- </div> --}}
        
        @endforeach

        {{-- <br>- INICIO
        <br>- ACTIVIDAD DIAGNÓSTICA
        <br>- MOTIVACIÓN
        </br>- CONTENIDO
        </br>- ACTIVIDADES
        </br>- AUTOEVALUACIÓN
        </br>- CIERRE --}}
      </div>
    </div>
    <div class="col-1 bloque-imp text-center">
      <h1>ACCIÓN</h1>
      </br>

      @foreach ($archivos_html as $archivo)
      <a class="btn boton-imp" role="button" onclick="mostrar_gn()">
        <svg width="14" height="14" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg>
      </a> 
      <a class="btn boton-imp" role="button" onclick="mostrar_ir()">
        <svg width="14" height="14" viewBox="0 0 16 16" class="bi bi-upload" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
        </svg>
      </a>
      @endforeach
      
    </div>
    
    <div id="generar-nodo" class="col-8 bloque-nodo">
      <h1>GENERACIÓN DEL NODO</h1>
      </br>
      <div id="editor">
        <p>{{$archivos_html[1]}}</p>
      </div>
      <script>
        ClassicEditor
          .create( document.querySelector( '#editor' ), {
            language: 'es'
          } )
          .then( editor => {
            console.log( editor );
          } )
          .catch( error => {
            console.error( error );
          } );
      </script>
      <button type="submit" class="btn boton-imp">
        <svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
        </svg>
      </button>
    </div>
    
    <div id="importar-recurso" class="col-8 bloque-nodo">
      <h1>IMPORTACIÓN DE RECURSO</h1>
      </br>
      <input type="file" class="form-control-file" name="" id="">
      <button type="submit" class="btn boton-imp">
        <svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
        </svg>
      </button>
    </div>
  </div>
  </br>
  <form method="POST" action="{{ url('desarrollo') }}">
    {{ csrf_field() }}
    
    <div class="conteiner-fluid text-center">
      <!--<button type="submit" class="btn btn-secondary e-desarrollo">
        <svg class="bi bi-tools" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
          <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
          <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
        </svg>
        GUARDAR
      </button>-->
      <div class="conteiner-fluid text-left">
        <a class="btn btn-secondary e-desarrollo" href="{{route('principal',$proyecto)}}" role="button">
          <svg class="bi bi-tools" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:WHITE;">
            <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
            <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
          </svg>
          GUARDAR
        </a>
      </div>
    </div>
  </form>


@endif
  <!-- Extra large modal - implementación1-->
  <div id="de_implementacion1" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">   
      <div class="modal-content">
        <div class="modal-header a-croa-modal">
          <h5 class="modal-title">SUB-ETAPA DE IMPLEMENTACIÓN: HEURÍSTICAS DE USABILIDAD</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-justify">
          <p> Aquí se presenta una serie de heurísticas de usabilidad, algunas tomadas de Nielsen [1] e Instone [2] y otras adaptadas para CROA, a partir de 
          criterios de diferentes autores. Estas heurísticas se orientan a ser una guía para aquel que esté trabajando en la creación de un OA a partir de la metodología CROA.</p>
          <p><strong>1. Estructura</strong>: la información debe estar agrupada y organizada por su significado.</p>
          <p><strong>2. Visibilidad del estado del sistema</strong>: el destinatario siempre debe saber exactamente en qué parte del OA se encuentra y cómo puede acceder a otra. 
          Otro aspecto no menos importante, es ofrecer al destinatario retroalimentación a las acciones que éste realice.</p>
          <p><strong>3. Similitud entre el sistema y el mundo real</strong>: el OA debe de hablar el lenguaje del destinatario, las frases, palabras y conceptos deben de ser familiares para éste.
          Además, se deberán de seguir las convenciones usadas en el mundo real, haciendo que la información aparezca en un orden lógico y natural. La utilización 
          de metáforas, ya sea visuales o textuales, ayuda a este punto. Es importante aprovechar las posibilidades del lenguaje multimedia para generar las metáforas.</p>
          <p><strong>4. Consistencia</strong>: los destinatarios no tienen por qué preguntarse si distintas palabras, situaciones o acciones significan lo mismo. Es conveniente seguir 
          las convenciones de los entornos tecnológicos en los que se esté mostrando el OA. Es importante usar de manera consistente el fraseo, imágenes y fuentes 
          a través del OA para dar la imagen de consistencia.</p>
          <p><strong>5. Prevención de errores</strong>: hay que asegurarse de que las instrucciones estén escritas de una manera clara y que éstas sean desplegadas de manera 
          conveniente, evitando cualquier tipo de contaminación visual y posibles errores y ambigüedades.</p>
          <p><strong>6. Preferencia al reconocimiento frente a la memorización</strong>: se debe hacer que los objetos, acciones y opciones sean visibles. El destinatario no tiene por qué 
          recordar información de una parte de un diálogo a otra parte. Las instrucciones de uso del OA deben de ser visibles y accesibles cuando el destinatario lo considere 
          necesario. Podría haber una sección de ayuda o referencias de uso que puedan ser accedidas en cualquier momento.</p>
          <p><strong>7. Estética y diseño minimalista</strong>: los diálogos no deben de contener información que sea irrelevante o que rara vez sea de utilidad. Cada información extra compite 
          con unidades relevantes de información y disminuye su visibilidad relativa. Es altamente recomendable que la información más importante sea colocada en la parte superior 
          de la página, pues ésta es la región que siempre es visible en el navegador.</p>
          <p><strong>8. Legibilidad</strong>: el color de los textos debe contrastar con el del fondo, y el tamaño de fuente debe ser adecuado para su lectura. Se tiene en cuenta aquí también el uso 
          de colores en general, y la iconografía. Para lograr buen contraste es recomendable el uso de fondos claros y letras oscuras o viceversa. No se debe abusar del uso de mayúsculas.</p>
          <p><strong>9. Navegabilidad</strong>: los recorridos posibles del OA deben resultar flexibles y adecuados acordes al objetivo planteado para éste. El destinatario debería poder volver fácilmente a algún punto de interés.</p>
          <p>[1] “Designing web usability” - Jakob Nielsen. Indianapolis: New Riders, 1999</p>
          <p>[2] “Site Usability Heuristics for the Web” - Keith Instone. http://www.webreview.com/1997/10_10/strategists/10_10_97_2.shtml Webreview.com, 1997</p>
        </div>
      </div>
    </div>
  </div>
    
  <!-- Extra large modal - implementación2-->
  <div id="de_implementacion2" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">   
      <div class="modal-content">
        <div class="modal-header a-croa-modal">
          <h5 class="modal-title">SUB-ETAPA DE IMPLEMENTACIÓN: SITIOS RECOMENDADOS</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-justify">
          <p>Es muy importante que el OA aproveche el lenguaje multimedial, resulta clave el uso de imágenes, videos y animaciones. Se recomiendan los 
          siguientes sitios que podrán resultar de utilidad en la sub-etapa de implementación.</p>
          <p><strong>REPOSITORIOS DE RECURSOS</strong></p>
          <p><strong>1. Banco de imágenes y sonidos:</strong> http://recursostic.educacion.es/bancoimagenes/web/</p>
          <p><strong>2. Banco de imágenes, pictogramas y sonidos:</strong> http://www.catedu.es/arasaac/imagenes.php</p>
          <p><strong>3. Banco de imágenes para texturas:</strong> http://www.cgtextures.com/ (es necesario registrarse para descargar las imágenes)</p>
          <p><strong>4. Banco de fotografías:</strong> http://www.flickr.com/creativecommons</p>
          <p><strong>5. Banco de íconos:</strong> https://www.iconfinder.com/</p>
          <p><strong>6. Repositorio de objetos 3D:</strong> http://www.turbosquid.com/</p>
          <p><strong>7. Repositorio de imágenes animadas GIF:</strong> http://giphy.com/search/computer/</p>
          <p><strong>8. Variedad de recursos educativos y herramientas en el sitio de Conectarigualdad:</strong> http://www.conectarigualdad.gob.ar/recurso/perfil/alumnos-1</p>
          <p><strong>9. Repositorios de videos:</strong> https://www.youtube.com/. Dentro de Youtube, hay varios canales muy interesantes para ser utilizados en el 
          ámbito educativo. Entre ellos, se pueden mencionar:</p>
          <p>a. https://www.youtube.com/user/KhanAcademyEspanol. Contiene videos educativos de diferentes temáticas, orientados a distintos niveles educativos.</p>
          <p>b. https://www.youtube.com/education. Concentra el contenido de más de 100 universidades y facultades, facilitando el acceso a las conferencias, 
          investigaciones y visitas a campus universitarios. Se trata de una gran aula audiovisual mundial dividida en tres sub-categorías: Primaria/Educación 
          Secundaria, Universidad y Formación Continua.</p>
          <p>c. https://www.youtube.com/user/teachers. Es un recurso para los educadores de todo el mundo. Hay sugerencias de materias para lecciones, 
          comentarios de otros contenidos educativos en Youtube y consejos sobre la manera de grabar tus vídeos educativos.</p>
          <p>d. https://www.youtube.com/user/thenobelprize. Contiene entrevistas con los ganadores del Premio Nobel pasados y presentes, obteniendo 
          enriquecedoras ideas sobre sus procesos creativos y técnicos.</p>
          <p>e. https://www.youtube.com/user/NationalGeographic. Contiene videos sobre fauna, historia natural, arqueología, etc.</p>
          <p>f. https://www.youtube.com/user/RoyalOperaHouse/videos. Contiene fragmentos de óperas y ballets, así como entrevistas a actores, directores y músicos.</p>
          <p>Estos son sólo algunos ejemplos de canales de Youtube, útiles para el ámbito educativo. Es importante aclarar que si se utiliza un video en un OA, 
          es necesario que esté disponible aún sin conexión a <em>internet</em>, por lo que se recomienda utilizar la herramienta Video DownloadHelper para descargar el video.</p>
          <p><strong>HERRAMIENTAS</strong></p>
          <p><strong>1. Editor de video:</strong> http://www.videohelp.com/tools/AviDemux</p>
          <p><strong>2. Editor de esquemas y diagramas:</strong> http://www.gliffy.com/</p>
          <p><strong>3. Generador de nubes de palabras:</strong> http://www.wordle.net/</p>
          <p><strong>4. Editor de imágenes y collage:</strong> http://picasa.google.com/</p>
          <p><strong>5. Creador de caricaturas:</strong> http://www.toondoo.com/</p>
          <p><strong>6. Editor de videos animados:</strong> http://goanimate.com/</p>
          <p><strong>7. Para descargar videos de Youtube:</strong> https://addons.mozilla.org/es/firefox/addon/video-downloadhelper/</p>
          <p><strong>8. Editor de audio:</strong> http://audacity.sourceforge.net</p>
          <p><strong>9. Editor y biblioteca de podcasts:</strong> http://www.poderato.com/</p>
          <p><strong>10. Editor de imágenes creativas, con repositorio propio:</strong> https://www.genial.ly/</p>
          <p><strong>11. Creador de podcast:</strong> http://vocaroo.com/</p>
          <p>Estas son algunas herramientas útiles, que pueden servir de apoyo al momento de crear los propios materiales educativos. 
          Queda a criterio del autor del OA la utilización de algunas de estas herramientas o de cualquier otra.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Large modal - ayuda -->
  <div id="ayuda" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header a-marcoa-modal">
          <h5 class="modal-title">AYUDA: IMPLEMENTACIÓN DEL OA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-justify">
          <p>Para cada nodo de la estructura, presionar la acción a realizar: <strong>GENERAR NODO</strong> (1er. botón) o 
          <strong>IMPORTAR RECURSO</strong> (2do. botón).</p>
          <p>De acuerdo a la alternativa elegida, se habilitará un espacio para:</p>
          <p>- GENERACIÓN DE NODO: Allí será posible armar el nodo incluyendo: texto (simple o enriquecido), imágenes, videos. 
          Una vez finalizado el armado, presionar el botón de <strong>CONFIRMACIÓN</strong> para efectuar la generación del nodo.</p>
          <p>- IMPORTACIÓN DE RECURSO: Allí será posible importar un recurso externo. Para ello, presionar <strong>Seleccionar archivo</strong>, 
          se desplegará una ventana que permitirá buscar el archivo que se pretende importar. Una vez finalizada la importación, 
          presionar el botón de <strong>CONFIRMACIÓN</strong> para efectuar la importación del recurso.</p>
        </div>
      </div>
    </div>
  </div>