{{-- @foreach($subcategories as $subcategory) --}}
        <tr data-id="{{$subcategory->id}}" data-parent="{{$dataParent}}" data-level = "{{$dataLevel + 1}}">
           <td style="display: inline-block;" data-column="name">{{$subcategory->title}}</td> 
        </tr>

	    {{-- @isset($subcategory->subcategory))
            @include('content.etapas.includes.subCategoryView',['subcategories' => $subcategory->subcategory, 'dataParent' => $subcategory->id, 'dataLevel' => $dataLevel ])
        @endisset --}}
{{-- @endforeach --}}