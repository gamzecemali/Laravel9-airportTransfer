@foreach($children as $subcategory)
        <li class="has-dropdown">
            <a href="{{route('categorytransfers',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}" >{{$subcategory->title}}</a>
            @if(count($subcategory->children))
            <ul class="dropdown">

                @include('home.categorytree',['children'=>$subcategory->children])

            </ul>
        @else
        @endif

@endforeach

