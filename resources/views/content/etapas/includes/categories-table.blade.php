
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<!-- Bootstrap -->
{{-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
<style>
body { background-color:#fafafa; }
.container { margin:150px auto;}
    .treegrid-indent {
        width: 0px;
        height: 16px;
        display: inline-block;
        position: relative;
    }

    .treegrid-expander {
        width: 0px;
        height: 16px;
        display: inline-block;
        position: relative;
        left:-17px;
        cursor: pointer;
    }
</style>

<link rel="stylesheet" href="bootstrap.min.css">

<!-- jQuery -->

<script src="//code.jquery.com/jquery.min.js"></script>




<div class="jquery-script-clear"> </div>
	    <div class="row ">
	        <div class="col-md-10">
	            <div class="card">
	                <div class="card-header">Nodos</div>

	                <div class="card-body">

	                <table id="tree-table" class="table table-hover table-bordered">

	                    <tbody >
	                            @foreach($nodos as $nodo)
	                                <tr data-id="{{$nodo->id}}" data-parent="0" data-level="1">
	                                    <td bold data-column="name"><strong>{{$nodo->nombre}}</strong></td>
	                                </tr>

 
	                                @isset($nodo->scorm)
	                                    @include('content.etapas.includes.subCategoryView',['subcategory' => $nodo->scorm, 'dataParent' => $nodo->id , 'dataLevel' => 1])
	                                @endisset
					            @endforeach
	                        </tbody>
	                    
	                    </table>
	                </div>
	            </div>
	        </div>
	    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script src="js/javascript.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  </script>

  <script >
  	$(function () {
    var
        $table = $('#tree-table'),
        rows = $table.find('tr');

    rows.each(function (index, row) {
        var
            $row = $(row),
            level = $row.data('level'),
            id = $row.data('id'),
            $columnName = $row.find('td[data-column="name"]'),
            children = $table.find('tr[data-parent="' + id + '"]');

        if (children.length) {
            var expander = $columnName.prepend('' +
                '<span class="treegrid-expander glyphicon glyphicon-chevron-right"></span>' +
                '');

            children.hide();

            expander.on('click', function (e) {
                var $target = $(e.target);
                if ($target.hasClass('glyphicon-chevron-right')) {
                    $target
                        .removeClass('glyphicon-chevron-right')
                        .addClass('glyphicon-chevron-down');

                    children.show();
                } else {
                    $target
                        .removeClass('glyphicon-chevron-down')
                        .addClass('glyphicon-chevron-right');

                    reverseHide($table, $row);
                }
            });
        }

        $columnName.prepend('' +
            '<span class="treegrid-indent" style="width:' + 15 * level + 'px"></span>' +
            '');
    });

    // Reverse hide all elements
    reverseHide = function (table, element) {
        var
            $element = $(element),
            id = $element.data('id'),
            children = table.find('tr[data-parent="' + id + '"]');

        if (children.length) {
            children.each(function (i, e) {
                reverseHide(table, e);
            });

            $element
                .find('.glyphicon-chevron-down')
                .removeClass('glyphicon-chevron-down')
                .addClass('glyphicon-chevron-right');

            children.hide();
        }
    };
});
  </script>
{{-- <script>
	@import "http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css";
	var elemento=document.querySelector('tree-table');
	elemento.setAttribute('rel','stylesheet');
	elemento.css('href','bootstrap.min.css');
</script> --}}
