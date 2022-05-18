{{-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script> --}}

<br><br><br><br>

<div id="implementacion-box" align="center">
	<p id='titulo-decision'>Seleccione una opción para la implementación del OA</p>
	<a class="button " id="boton-decision" type="button" href="{{ route('desarrollo.importar',$proyecto) }}">Importar SCORM</a>
	<a class="button " id="boton-decision" type="button" href="{{ route('desarrollo.nueva',$proyecto) }}">Nuevo Recurso</a>
</div>

{{-- <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Formulario con ckeditor</div>
                    <div class="panel-body">
                        <form>
                            <textarea class="ckeditor" id="summary-ckeditor" name="summary-ckeditor">
                                Este es el textarea que es modificado por la clase ckeditor
                            </textarea>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}